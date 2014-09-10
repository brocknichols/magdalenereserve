<?php
/**
 * Autocomplete Controller
 *
 * @package    Gleez\Controller
 * @author     Gleez Team
 * @version    1.0.2
 * @copyright  (c) 2011-2014 Gleez Technologies
 * @license    http://gleezcms.org/license  Gleez CMS License
 */
class Controller_Webservices_Widgets extends Controller {

	public function before()
	{
		// Ajax request only!
		if ( ! $this->request->is_ajax())
		{
			throw HTTP_Exception::factory(404, 'Accessing an ajax request :type externally',
				array(':type' => '<small>'.$this->request->uri().'</small>'));
		}

		ACL::required('access content');
		parent::before();
	}
        
        /**
	 * The after() method is called after controller action
	 *
	 * @uses  Request::is_ajax
	 * @uses  Response::headers
	 */
	public function after()
	{
		if ($this->request->is_ajax())
		{
			$this->response->headers('content-type',  'application/json; charset='.Kohana::$charset);
		}

		parent::after();
	}

	/**
	 * Retrieve a JSON object containing autocomplete suggestions for existing users.
	 */
	public function action_setcookie()
	{
                $post = $this->request->post();
                
                if(isset($post['widget'])){
                    Cookie::set($post['widget'], $post['val']);
                }
		$this->response->body( JSON::encode( true ) );
	}

}