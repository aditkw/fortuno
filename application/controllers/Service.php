<?php
/**
*
*/
class Service extends Frontend_Controller {

	public function index()
	{
		$this->data['text'] = $this->text_model->get(1);

		$change = array();
		$services = $this->services_model->get();

		$i=0;
		foreach ($services as $service) {
			$select = array('parent_id' => $service->services_id, 'image_parent_name' => 'services');

			$select['image_seq'] = 0;
			$image = $this->image_model->get_by($select, 1, NULL, TRUE);

			$select['image_seq'] = 1;
			$icon = $this->image_model->get_by($select, 1, NULL, TRUE);

			$change[$i] = (object)array(
				'service_name' => $service->services_name,
				'service_desc' => $service->services_desc,
				'service_link' => $service->services_link,
				'service_image'=> $image->image_name,
				'service_icon' => $icon->image_name,
			);

			$i++;
		}

		$this->data['services'] = $change;

		// echo "<pre>";
		// print_r($this->data['services']);
		// echo "</pre>";
		// die();

		$this->data['content']	= 'pages/service';
		$this->load->view('index', $this->data);
	}

	public function detail($link)
	{
		$this->data['content']	= 'pages/service-detail';
		$this->data['detail'] = $this->services_model->get_by(array('services_link' => $link), 1, NULL, TRUE);

		$change = array();
		$services = $this->services_model->get();

		$i=0;
		foreach ($services as $service) {
			$select = array('parent_id' => $service->services_id, 'image_parent_name' => 'services');

			$select['image_seq'] = 0;
			$image = $this->image_model->get_by($select, 1, NULL, TRUE);

			$select['image_seq'] = 1;
			$icon = $this->image_model->get_by($select, 1, NULL, TRUE);

			$change[$i] = (object)array(
				'service_name' => $service->services_name,
				'service_desc' => $service->services_desc,
				'service_link' => $service->services_link,
				'service_image'=> $image->image_name,
				'service_icon' => $icon->image_name,
			);

			$i++;
		}

		$this->data['services'] = $change;


		$this->load->view('index', $this->data);

	}
}
