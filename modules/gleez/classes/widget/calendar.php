<?php
/**
 * Calendar Widget class
 *
 * @package    Gleez\Widget
 * @author     Gleez Team
 * @version    1.0.1
 * @copyright  (c) 2011-2014 Gleez Technologies
 * @license    http://gleezcms.org/license  Gleez CMS License
 */
class Widget_Calendar extends Widget {

	public function info(){}
	public function form(){}
	public function save(array $post){}
	public function delete(array $post){}

	public function render()
	{
		switch($this->name)
		{
			case 'widget':
				return $this->view_calendar();
			break;
			default:
				return;
		}
	}
        
        	public function view_calendar(){
                    
                   $view  = View::factory('widgets/calendar/view');

		return $view->render();
                }

}