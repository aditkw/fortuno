<?php
/**
*
*/
class Benefits extends Frontend_Controller {

	public function index()
	{
		$this->data['benefits'] = $this->info_model->get_by(array('catinfo_id' => 4, 'info_pub' => '99'), 1, NULL, TRUE);

		$this->data['content']	= 'pages/benefits';
		$this->load->view('index', $this->data);
	}

}
