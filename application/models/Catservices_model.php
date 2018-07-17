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

	function olahData($categories, $wimage=NULL)
	{
	  $category = array();
	  foreach ($categories as $cat) {

			$this->db->where(array('catservices_id' => $cat->catservices_id, 'services_pub' => '99', 'image_parent_name' => 'services'));
			$this->db->join('{PRE}'.'image', '{PRE}'.'image.parent_id = {PRE}services.services_id');
			$services = $this->db->get('{PRE}services')->result();

	    $serpis = array();
	    foreach ($services as $service) {
	      $serpis[] = (object)array(
	        'services_name' => $service->services_name,
	        'services_name_en' => $service->services_name_en,
	        'services_desc' => $service->services_desc,
	        'services_desc_en' => $service->services_desc_en,
					'services_link' => $service->services_link,
	        'services_img' => $service->image_name
	      );
	    }

	    $category[] = (object)array(
	      'catservice_name' => $cat->catservices_name,
	      'catservice_name_en' => $cat->catservices_name_en,
				'catservice_desc' => $cat->catservices_desc,
	      'catservice_desc_en' => $cat->catservices_desc_en,
				'catservice_icon' => $cat->catservices_icon,
				'catservice_link' => $cat->catservices_link,
	      'services' => $serpis
	      );

	    ($wimage == TRUE) ? $category[0]->catservice_bg = $cat->image_name : '';

	    unset($serpis);
	  }

	  return $category;
	}

	public function count_product($where = NULL, $like = NULL)
	{
		if ($like) {
			$this->db->like($like);
		}
		return parent::count($where);
	}
}
