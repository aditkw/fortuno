<?php
/**
*
*/
class Careers extends Frontend_Controller {

	public function index()
	{
		$this->data['careers']  = $this->careers_model->get();
		$this->data['content']	= 'pages/careers';
		$this->load->view('index', $this->data);
	}

}
