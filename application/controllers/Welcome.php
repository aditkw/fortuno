<?php
/**
*
*/
class Welcome extends Frontend_Controller {

	public function index() {
			$category = array();
			$categories = $this->catservices_model->get_by(array('catservices_pub' => '99'));

			$this->data['category'] = $this->catservices_model->olahData($categories, FALSE);


			$this->data['text'] = $this->text_model->get(1);
			$this->data['about'] = $this->about_model->get_about(array('image_parent_name' => 'about'), 1, NULL, TRUE);
			$this->data['portofolio'] = $this->portofolio_model->get_portofolio(array('image_parent_name' => 'portofolio', 'portofolio_pub' => '99', 'image_seq' => 0), 3);
			$this->data['catporto'] = $this->catporto_model->get_category(array('image_parent_name' => 'catporto'));

			$this->data['contact'] = $this->contact_model->get(1);

			$this->data['content'] = 'pages/home';
			$this->load->view('index', $this->data);
	}

}
