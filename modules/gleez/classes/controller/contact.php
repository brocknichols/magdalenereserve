<?php
/**
 * Gleez Contact Controller
 *
 * @package    Gleez\Controller
 * @author     Gleez Team
 * @version    1.1.0
 * @copyright  (c) 2011-2014 Gleez Technologies
 * @license    http://gleezcms.org/license  Gleez CMS License
 */
class Controller_Contact extends Template {

	/**
	 * The before() method is called before controller action
	 *
	 * @uses  ACL::required
	 */
	public function before()
	{
		ACL::required('sending mail');

		parent::before();
	}

	/**
	 * Sending mails
	 *
	 * @since 1.0.0  First time this method was introduced
	 * @since 1.1.0  Added jQuery Textarea Characters Counter Plugin
	 *
	 * @link  http://roy-jin.appspot.com/jsp/textareaCounter.jsp
	 *
	 * @uses  Request::query
	 * @uses  Route::get
	 * @uses  Route::uri
	 * @uses  URL::query
	 * @uses  URL::site
	 * @uses  Validation::rule
	 * @uses  Config::get
	 * @uses  Config::load
	 * @uses  Assets::js
	 */
	public function action_mail()
	{
		$this->title = __('Contact');

		$config = Config::load('contact');

		Assets::js('textareaCounter', 'media/js/jquery.textareaCounter.plugin.js', array('jquery'), FALSE, array('weight' => 10));
		Assets::js('greet/form', 'media/js/greet.form.js', array('textareaCounter'), FALSE, array('weight' => 15));

		//Add schema.org support
		$this->schemaType = 'ContactPage';

		// Set form destination
		$destination = ( ! is_null($this->request->query('destination'))) ? array('destination' => $this->request->query('destination')) : array();

		// Set form action
		$action = Route::get('contact')->uri(array('action' => $this->request->action())).URL::query($destination);

		// Get user
		$user = User::active_user();

		// Set mail types
		$types = $config->get('types', array());

		$view = View::factory('contact/form')
					->set('destination', $destination)
					->set('action',      $action)
					->set('config',      $config)
					->set('types',       $types)
					->set('user',        $user)
					->bind('post',       $post)
					->bind('errors',     $this->_errors);

		// Initiate Captcha
		if($config->get('use_captcha', FALSE) AND ! $this->_auth->logged_in())
		{
			$captcha = Captcha::instance();
			$view->set('captcha', $captcha);
		}

		if ($this->valid_post('contact'))
		{

			$post = Validation_Contact::factory($this->request->post());
                        

			if ($post->check())
			{
				// Create the email subject
				$subject = __('[:category] :subject', array(
					':category' => $types[$post['category']],
					':subject'  => Text::plain($post['subject'])
				));

				// Create the email body
				$body = View::factory('email/contact')
						->set('name',   $post['name'])
						->set('body',   $post['body'])
						->set('config', Config::load('site'))
						->render();

				// Create an email message
				$email = Email::factory()
						->to(Text::plain($this->_config->get('site_email', 'admin@magdalenereserve.com')), __('Webmaster :site', array(':site' => Template::getSiteName())))
						->subject($subject)
						->from($post['email'], Text::plain($post['name']))
						->message($body, 'text/html'); // @todo message type should be configurable

				// Send the message
				$email->send();

				Log::info(':name sent an e-mail regarding :cat',
					array(':name' => Text::plain($post['name']), ':cat' => $types[$post['category']])
				);
				Message::success(__('Your message has been sent.'));

				// Always redirect after a successful POST to prevent refresh warnings
				$this->request->redirect(Route::get('contact')->uri(), 200);
			}
			else
			{
				$this->_errors = $post->errors('contact', TRUE);
			}
		}

		$this->response->body($view);
	}
}
