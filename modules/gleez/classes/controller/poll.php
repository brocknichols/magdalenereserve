<?php
/**
 * Poll Controller
 *
 * @package    Gleez\Controller
 * @author     Gleez Team
 * @version    1.0.4
 * @copyright  (c) 2011-2014 Gleez Technologies
 * @license    http://gleezcms.org/license  Gleez CMS License
 */
class Controller_Poll extends Template {

	/**
	 * The before() method is called before controller action
	 *
	 * @uses  Request::param
	 * @uses  Request::action
	 * @uses  ACL::required
	 */
	public function before()
	{
		$id = $this->request->param('id', FALSE);

		if ($id AND $this->request->action() == 'index')
		{
			$this->request->action('view');
		}

		if ( ! $id AND $this->request->action() == 'index')
		{
			$this->request->action('list');
		}

		ACL::required('access content');

		parent::before();
	}

	/**
	 * The after() method is called after controller action
	 */
	public function after()
	{
//		if ($this->request->action() == 'add' OR $this->request->action() == 'edit')
//		{
//			// Add RichText Support
//			Assets::editor('.textarea', I18n::$lang);
//
//			// Flag to disable left/right sidebars
//			$this->_sidebars = FALSE;
//		}

		parent::after();
	}


	public function action_list()
	{

            $results=null;
            
                 if ($this->request->is_post())
		{
                    $polls = ORM::factory('poll', $_POST['pollid']);
                    $poll_array=unserialize($polls->results);                   
                    $poll_array[$_POST['poll']]+=1;
                    $polls->results=serialize($poll_array);
                    $polls->user_id=$this->_auth->get_user()->id;
                    $polls->save();
                    
                    $put_poll_user=DB::insert('poll_users', array('user_id','poll_id'))
                            ->values($this->_auth->get_user()->id,$_POST['pollid'])->execute();
                    
                    // Check for any new unanswered polls
                        $query=DB::select('polls.id')
                                ->from('polls')
                                ->where('id','NOT IN', DB::expr('(select gl_poll_users.poll_id FROM gl_poll_users WHERE gl_poll_users.user_id='.$this->_auth->get_user()->id.')'))
                                ->execute();

                        if($query->count()==0){
                            
                        $view = View::factory('polls/none');


                        $this->response->body($view);
                        return;
                        }
          
                } 
                
                $polls = ORM::factory('poll')
                        ->where('id','NOT IN', DB::expr('(select gl_poll_users.poll_id FROM gl_poll_users WHERE gl_poll_users.user_id='.$this->_auth->get_user()->id.')'))
                        ->find_all();

                 if($polls->count()==0){
                            
                        $view = View::factory('polls/none');

                        $this->response->body($view);
                        return;
                }
                
                $view = View::factory('polls/list')
                        ->set("polls", $polls)
                        ->set("newold", "new")
                        ->set("userid", $this->_auth->get_user()->id);


		$this->response->body($view);
        }
        
        public function action_existing()
	{

            $results=null;
            
            try{
                $polls = ORM::factory('poll')
                        ->where('id','IN', DB::select('poll_id')->from('poll_users')->where('user_id','=',$this->_auth->get_user()->id)->execute()->as_array())
                        ->find_all();
            } catch (Exception $e){
                $view = View::factory('polls/noexisting');

                        $this->response->body($view);
                        return;
            }

                
                $view = View::factory('polls/list')
                        ->set("polls", $polls)
                        ->set("newold", "existing")
                        ->set("userid", $this->_auth->get_user()->id);


		$this->response->body($view);
        }
        
        public function action_add()
	{

           if ($this->request->is_post())
		{
               if(empty($_POST['option'][0]) || empty($_POST['option'][1]) || empty($_POST['title'])){
                   Message::ERROR(__('You must enter a title and at least two options for the poll'));
                   $view = View::factory('polls/add');

                    $this->response->body($view);
                    return;
               }
                   
                    $polls = ORM::factory('poll');
                    $polls->title=$_POST['title'];
                    $poll_array;
                    foreach($_POST['option'] as $opt){
                            $poll_array[$opt]=0;
                        
                    }
                    $polls->results=serialize($poll_array);
                    $polls->date_start=date('Y-m-d H:m:s', time());
                    $polls->user_id=$this->_auth->get_user()->id;
                    $polls->save();

                    $view = View::factory('polls/complete');

                        $this->response->body($view);
                        return;
                } 

		$view = View::factory('polls/add');

		$this->response->body($view);
        }
}