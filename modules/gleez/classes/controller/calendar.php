<?php
/**
 * Calendar Controller
 *
 * @package    Gleez\Controller
 * @author     Gleez Team
 * @version    1.0.4
 * @copyright  (c) 2011-2014 Gleez Technologies
 * @license    http://gleezcms.org/license  Gleez CMS License
 */
class Controller_Calendar extends Template {

    	public function before()
	{

		if ($this->request->action() == 'index')
		{
			$this->request->action('view');
		}


		ACL::required('access content');

		parent::before();
	}

	/**
	 * The after() method is called after controller action
	 */
	public function after()
	{


			// Flag to disable left/right sidebars
			$this->_sidebars = TRUE;

		parent::after();
	}
        
        public function action_view(){

                $view = View::factory('calendar/view');

		$this->response->body($view);
        }
}
