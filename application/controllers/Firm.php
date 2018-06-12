<?php
/**
*
*/
class Firm extends Frontend_Controller {

	public function index()
	{
		$this->data['firm'] = $this->info_model->get_info(array('catinfo_id' => 1, 'info_pub' => '99'), 1, NULL, TRUE);
		$this->data['content']	= 'pages/firm';
		$this->load->view('index', $this->data);
	}

}
