<?php
/**
*
*/
class Links extends Frontend_Controller {

	public function index()
	{
		$this->data['links'] = $this->info_model->get_by(array('catinfo_id' => 6, 'info_pub' => '99'));

		$this->data['content']	= 'pages/links';
		$this->load->view('index', $this->data);
	}

}
