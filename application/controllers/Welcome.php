<?php
/**
*
*/
class Welcome extends Frontend_Controller {

	public function index()
	{
		$this->data['slides'] 	= $this->slide_model->get_slide(array('{PRE}image.image_parent_name' => 'slide', 'banner_pub' => '99'));
		$this->data['partners'] = $this->info_model->get_info(array('catinfo_id' => 2, 'info_pub' => '99', 'image_parent_name' => 'partners'));
		$this->data['clients'] 	= $this->info_model->get_info(array('catinfo_id' => 3, 'info_pub' => '99', 'image_parent_name' => 'clients'));
		$this->data['benefits'] = $this->info_model->get_by(array('catinfo_id' => 4, 'info_pub' => '99'), 1, NULL, TRUE);
		$this->data['services'] = $this->services_model->get_services(array('image_parent_name' => 'services', 'image_seq' => '1'), 6);
		$this->data['news'] 		= $this->news_model->get_by(array('news_pub' => '99'));
		// echo "<pre>";
		// print_r($this->data['services']);
		// echo "</pre>";
		// die();
		$this->data['content']	= 'pages/home';
		$this->load->view('index', $this->data);
	}
}
