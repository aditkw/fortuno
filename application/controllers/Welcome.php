<?php
/**
*
*/
class Welcome extends Frontend_Controller {

	public function index() {
			// duplikasi kategori, satu lagi gua taro di controller Service :v ga ngerti nyatuinnya
			$category = array();
			$categories = $this->catservices_model->get_by(array('catservices_pub' => '99'));

			foreach ($categories as $cat) {

				$services = $this->services_model->get_by(array('catservices_id' => $cat->catservices_id, 'services_pub' => '99'));
				$serpis = array();
				foreach ($services as $service) {
					$serpis[] = (object)array(
						'services_name' => $service->services_name,
						'services_link' => $service->services_link,
					);
				}

				$category[] = (object)array(
					'catservice_name' => $cat->catservices_name,
					'catservice_desc' => $cat->catservices_desc,
					'catservice_icon' => $cat->catservices_icon,
					'services' => $serpis
					);

				unset($serpis);
			}

			$this->data['category'] = $category;
			// akhir duplikasi kategori

			$this->data['text'] = $this->text_model->get(1);
			$this->data['about'] = $this->about_model->get_about(array('image_parent_name' => 'about'), 1, NULL, TRUE);
			$this->data['portofolio'] = $this->portofolio_model->get_portofolio(array('image_parent_name' => 'portofolio', 'portofolio_pub' => '99', 'image_seq' => 0), 3);
			$this->data['contact'] = $this->contact_model->get(1);

			$this->data['content'] = 'pages/home';
			$this->load->view('index', $this->data);
	}

}
