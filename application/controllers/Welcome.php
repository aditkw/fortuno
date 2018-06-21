<?php
/**
*
*/
class Welcome extends Frontend_Controller {

	public function index() {
			$this->data['text'] = $this->text_model->get(1);
			$this->data['about'] = $this->about_model->get_about(array('image_parent_name' => 'about'), 1, NULL, TRUE);

			$category = array();
			$categories = $this->catservices_model->get();

			foreach ($categories as $cat) {

				$services = $this->services_model->get_by(array('catservices_id' => $cat->catservices_id));
				foreach ($services as $service) {
					$services[] = (object)array(
						'services_name' => $service->services_name,
						'services_link' => $service->services_link,
					);
				}

				$category[] = (object)array(
					'catservice_name' => $cat->catservices_name,
					'catservice_desc' => $cat->catservices_desc,
					'catservice_icon' => $cat->catservices_icon,
					'services' => $services
					);

			}

			$this->data['category'] = $category;

			// echo "<pre>";
			// print_r($this->data['category']);
			// echo "</pre>";
			// die();

			$this->data['content'] = 'pages/home';
			$this->load->view('index', $this->data);
	}

}
