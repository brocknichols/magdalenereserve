<?php
/**
 * Admin Poll Controller
 *
 * @package    Gleez\Controller\Admin
 * @author     Gleez Team
 * @version    1.0.1
 * @copyright  (c) 2011-2013 Gleez Technologies
 * @license    http://gleezcms.org/license  Gleez CMS License
 */
class Controller_Admin_Poll extends Controller_Admin {

	/**
	 * The before() method is called before controller action
	 *
	 * @uses  ACL::required
	 */
	public function before()
	{
		ACL::required('administer blog');

		parent::before();
	}

	/**
	 * The after() method is called after controller action.
	 *
	 * @uses  Route::url
	 */
	public function after()
	{
		$this->_tabs =  array(
			array('link' => Route::url('admin/poll', array('action' =>'index')), 'text' => __('Statistics')),
			array('link' => Route::url('admin/poll', array('action' =>'list')), 'text' => __('List')),
			array('link' => Route::url('admin/poll', array('action' =>'settings')),'text' => __('Settings')),
		);

		parent::after();
	}

public function action_list()
	{
    
                if ($this->request->is_post())
		{
                    $polls = ORM::factory('poll');
                    $polls->title=$_POST['title'];
                    $poll_array;
                    foreach($_POST['option'] as $opt){
                        $poll_array[$opt]=0;
                    }
                    $polls->results=serialize($poll_array);
                    $polls->date_start=date('Y-m-d H:m:s', time());
                    $polls->save();

                } 

		$view = View::factory('admin/poll/list');

		$this->response->body($view);
	}
}