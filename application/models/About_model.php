<?php

/**
*
*/
class About_model extends MY_Model
{

	protected $_table_name = 'about';
	protected $_primary_key = 'about_id';
	protected $_order_by = 'about_id';
	protected $_order_by_type = 'DESC';
	public $rules = array(
		// 'title' => array(
		// 	'field' => 'title',
		// 	'label' => 'About Name / Title',
		// 	'rules' => 'required'
		// 	),
		'desc' => array(
			'field' => 'desc',
			'label' => 'About Description Indo',
			'rules' => 'required'
			),
		'desc_en' => array(
			'field' => 'desc_en',
			'label' => 'About Description English',
			'rules' => 'required'
			)
		);

	function __construct()
	{
		parent::__construct();
	}

	function get_about($where = NULL, $limit = NULL, $offset = NULL, $single = FALSE, $select = NULL)
	{
		$this->db->join('{PRE}'.'image', '{PRE}'.'image.parent_id = {PRE}'.$this->_table_name.'.about_id');
		return parent::get_by($where,$limit,$offset,$single,$select);
	}
}
