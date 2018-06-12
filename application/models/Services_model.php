<?php

/**
*
*/
class Services_model extends MY_Model
{

	protected $_table_name = 'services';
	protected $_primary_key = 'services_id';
	public $rules = array(
		'name' => array(
			'field' => 'name',
			'label' => 'Service Name',
			'rules' => 'required'
			),
		'desc' => array(
			'field' => 'desc',
			'label' => 'Service Description',
			'rules' => 'required'
			)
		);

	function __construct()
	{
		parent::__construct();
	}

	public function get_services($where = NULL, $limit = NULL, $offset= NULL, $single=FALSE, $select=NULL, $like = NULL, $order = NULL)
	{
		$this->db->join('{PRE}'.'image', '{PRE}'.'image.parent_id = {PRE}'.$this->_table_name.'.services_id');
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
