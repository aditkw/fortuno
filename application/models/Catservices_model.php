<?php

/**
*
*/
class Catservices_model extends MY_Model
{

	protected $_table_name = 'catservices';
	protected $_primary_key = 'catservices_id';
	public $rules = array(
		'name' => array(
			'field' => 'name',
			'label' => 'Name Indonesia',
			'rules' => 'required'
			),
		'desc' => array(
			'field' => 'desc',
			'label' => 'Description Indonesia',
			'rules' => 'required'
			),
		'name_en' => array(
			'field' => 'name_en',
			'label' => 'Name English',
			'rules' => 'required'
			),
		'desc_en' => array(
			'field' => 'desc_en',
			'label' => 'Description English',
			'rules' => 'required'
			)
		);

	function __construct()
	{
		parent::__construct();
	}

	public function get_category($where = NULL, $limit = NULL, $offset= NULL, $single=FALSE, $select=NULL, $like = NULL, $order = NULL)
	{
		$this->db->join('{PRE}'.'image', '{PRE}'.'image.parent_id = {PRE}'.$this->_table_name.'.catservices_id');
		if ($like) {
			$this->db->like($like);
		}
		if ($order) {
			foreach ($order as $key => $value) {
				$this->db->order_by($key, $value);
			}
		}
		return parent::get_by($where,$limit,$offset,$single,$select);
	}

	public function count_product($where = NULL, $like = NULL)
	{
		if ($like) {
			$this->db->like($like);
		}
		return parent::count($where);
	}
}
