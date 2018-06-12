<?php
/**
*
*/
class Partners extends Frontend_Controller {

	public function index()
	{
		$this->data['partners'] = $this->info_model->get_info(array('catinfo_id' => 2, 'info_pub' => '99'));
		$this->data['content']	= 'pages/partner';
		$this->load->view('index', $this->data);
	}

}
