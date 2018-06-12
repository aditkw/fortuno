<?php

/**
*
*/
class Info_model extends MY_Model
{
	protected $_table_name = 'info';
	protected $_primary_key = 'info_id';
	protected $_order_by = 'info_id';
	protected $_order_by_type = 'ASC';
	public $rules = array(
		'desc' => array(
			'field' => 'desc',
			'label' => 'description',
			'rules' => 'required'
      )
		);

	function __construct()
	{
		parent::__construct();
	}

	function get_info($where = NULL, $limit = NULL, $offset = NULL, $single = FALSE, $select = NULL)
	{
		$this->db->join('{PRE}'.'image', '{PRE}'.'image.parent_id = {PRE}'.$this->_table_name.'.info_id');
		return parent::get_by($where,$limit,$offset,$single,$select);
	}
}
