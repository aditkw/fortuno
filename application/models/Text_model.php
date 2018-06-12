<?php

/**
*
*/
class Text_model extends MY_Model
{
	protected $_table_name = 'text';
	protected $_primary_key = 'text_id';
	protected $_order_by = 'text_id';
	protected $_order_by_type = 'DESC';
	public $rules;

	function __construct()
	{
		parent::__construct();
	}
}
