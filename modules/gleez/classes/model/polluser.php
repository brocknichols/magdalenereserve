<?php
/**
 * Widget Model Class
 *
 * @package    Gleez\ORM\Widget
 * @author     Sandeep Sangamreddi - Gleez
 * @copyright  (c) 2011-2014 Gleez Technologies
 * @license    http://gleezcms.org/license  Gleez CMS License
 */
class Model_Polluser extends ORM {

    	protected $_table_name = 'poll_users';

        protected $_post_type = 'pollusers';
	/**
	 * Table columns
	 * @var array
	 */
	protected $_table_columns = array(
		'id'         => array( 'type' => 'int' ),
		'user_id'       => array( 'type' => 'int' ),
		'poll_id'      => array( 'type' => 'int' ),
	);

        protected $_belongs_to = array('poll' => array('foreign_key' => 'id'));
                
        public function find_all()
	{
		$this->where('id', '>', 0);

		return parent::find_all();
	}
        

	public function save(Validation $validation = NULL)
	{
		parent::save( $validation );


		return $this;
	}

	/**
	 * Deletes a single post or multiple posts, ignoring relationships.
	 *
	 * @return  ORM
	 * @throws  Gleez_Exception
	 * @uses    Path::delete
	 */
	public function delete()
	{
		if ( ! $this->_loaded)
		{
			throw new Gleez_Exception('Cannot delete :model model because it is not loaded.', array(':model' => $this->_object_name));
		}


		parent::delete();

		return $this;
	}

	
	/**
	 * Reading data from inaccessible properties
	 *
	 * @param   string  $field
	 * @return  mixed
	 *
	 * @uses    HTML::chars
	 * @uses    Path::load
	 */
	public function __get($field)
	{
		switch ($field)
		{
			case 'title':
				return HTML::chars(parent::__get('title'));
			break;
			case 'results':
				// Raw fields without markup. Usage: during edit or etc!
				return parent::__get('results');
			break;
			case 'date_start':
				return parent::__get('date_start');
			break;
			
		}

		return parent::__get($field);
	}

}