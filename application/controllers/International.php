<?php
/**
*
*/
class International extends Frontend_Controller {

	public function index()
	{
		$this->data['inter'] = $this->info_model->get_by(array('catinfo_id' => 5, 'info_pub' => '99'), 1, NULL, TRUE);

		$this->data['content']	= 'pages/international';
		$this->load->view('index', $this->data);
	}
}
