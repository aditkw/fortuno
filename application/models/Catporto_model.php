<?php

/**
*
*/
class Catporto_model extends MY_Model
{

	protected $_table_name = 'catporto';
	protected $_primary_key = 'catporto_id';
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
		$this->db->join('{PRE}'.'image', '{PRE}'.'image.parent_id = {PRE}'.$this->_table_name.'.catporto_id');
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
			$this->db->where(array('catporto_id' => $cat->catporto_id, 'portofolio_pub' => '99', 'image_parent_name' => 'portofolio', 'image_seq' => 0));
			$this->db->join('{PRE}'.'image', '{PRE}'.'image.parent_id = {PRE}portofolio.portofolio_id');
			$portos = $this->db->get('{PRE}portofolio')->result();

	    $port = array();
	    foreach ($portos as $porto) {
	      $porto[] = (object)array(
	        'portofolio_name' => $porto->portofolio_name,
	        'portofolio_name_en' => $porto->portofolio_name_en,
	        'portofolio_desc' => $porto->portofolio_desc,
	        'portofolio_desc_en' => $porto->portofolio_desc_en,
					'portofolio_link' => $porto->portofolio_link
	      );
	    }

	    $category[] = (object)array(
	      'catporto_name' => $cat->catporto_name,
	      'catporto_name_en' => $cat->catporto_name_en,
				'catporto_desc' => $cat->catporto_desc,
	      'catporto_desc_en' => $cat->catporto_desc_en,
				'catporto_link' => $cat->catporto_link,
	      'services' => $port
	      );

	    ($wimage == TRUE) ? $category[0]->catporto_bg = $cat->image_name : '';

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
