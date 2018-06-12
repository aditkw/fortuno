<?php

/**
*
*/
class Services extends Backend_Controller
{
	protected $max_size					= 1024 * 1000;
	protected $wt 	= 70;
	protected $ht = 0;
	protected $image_input_name = 'image';
	protected $modul_file 			= 'services';
	function index()
	{
		$this->data['content'] 	= 'admin/pages/services/view';
		$array_where = array('{PRE}image.image_parent_name' => 'services', '{PRE}image.image_seq' => '0',);
		$this->data['services'] 		= $this->services_model->get_services($array_where);

		$this->load->view('admin/media', $this->data);
	}

	public function action($param)
	{
		$post					= $this->input->post(NULL, TRUE);
		$rules 				= $this->services_model->rules;
		$id 					= (!empty($_GET['id'])) ?hash_link_decode( $_GET['id']) : NULL;

		$this->form_validation->set_rules($rules);

		if (!empty($post)) {
			$link 			= title_url($post['name']);

			$array_data['services_name'] 	= $post['name'];
			$array_data['services_desc'] 	= $post['desc'];
			$array_data['services_link'] 	= $link;
		}

		switch ($param) {

			/* --------- TAMBAH DATA --------- */
			case 'insert':
				$this->form_validation->set_rules('name','Services Name','required|is_unique[{PRE}services.services_name]');
				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
					redirect(site_url('admin/services'));
				}

				else {
					$upload_image = $this->lawave_image->upload_images(
						$this->modul_file,
						$this->image_input_name,
						$link,
						$this->thumb_pre,
						$this->wt,
						$this->ht
						);

					$services_id = $this->services_model->insert($array_data);
					for ($i=0; $i < 2; $i++) {
						$array_img[] = array(
							'parent_id' 				=> $services_id,
							'image_parent_name'	=> 'services',
							'image_name' 				=> $upload_image[$i],
							'image_seq'					=> $i
							);
					}
					$this->image_model->insert($array_img, TRUE);
					$this->session->set_flashdata('success',$this->add_text);

					redirect(site_url('admin/services'));
				}
				break;

			/* --------- EDIT DATA --------- */
			case 'update':
				$array_id = array('services_id' => hash_link_decode($post['id']));
				$files 			= $_FILES[$this->image_input_name]['name'];

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
					redirect(site_url('admin/services'));
				}

				else {
					// upload gambar baru
					$upload_image = $this->lawave_image->upload_images(
						$this->modul_file,
						$this->image_input_name,
						$link,
						$this->thumb_pre,
						$this->wt,
						$this->ht
						);

					for ($i=0; $i<2; $i++) {
						$id_img = array('image_id' => $post['id_image_'.$i]);

						if (!empty($files[$i])) {
							$image 	= $this->image_model->get($post['id_image_'.$i]);
							// hapus gambar lama
							$this->lawave_image->delete_image($this->modul_file, $image->image_name, $this->thumb_pre);
							// array yang akan dikirim ke function update
							$array_img = array(
								'image_name' 	=> $upload_image[$i]
								);
							// proses update gambar
							$this->image_model->update($array_img, $id_img); // insert_batch gambar
						}
					}
					$this->services_model->update($array_data, $array_id);
					$this->session->set_flashdata('success',$this->edit_text);

					redirect(site_url('admin/services'));
				}
				break;

			/* --------- HAPUS DATA --------- */
			case 'delete':
				$count = $this->services_model->count(array('services_id' => $id));

				if ($count > 0) {
					$where_image 	= array('image_parent_name' => 'services', 'parent_id' => $id);
					$image 	= $this->image_model->get_by($where_image);
					foreach ($image as $key => $image) {
						$this->lawave_image->delete_image($this->modul_file, $image->image_name, $this->thumb_pre);
					}

					// hapus data
					$this->services_model->delete($id);
					$this->image_model->delete_by($where_image);
					$this->session->set_flashdata('success',$this->delete_text);

					redirect(site_url('admin/services'));
				}

				else {
					$this->session->set_flashdata('error',$this->not_found);
					redirect(site_url('admin/services'));
				}
				break;

			/* --------- PUBLISH DATA --------- */
			case 'publish':
				$array_id = array('services_id' => $id);

				$get_data = $this->services_model->get($id);

				if ($get_data->services_pub == '88') {
					$array_data['services_pub'] = '99';
					$text_msg = $this->publish_text;
				}

				else {
					$array_data['services_pub'] = '88';
					$text_msg = $this->unpublish_text;
				}

				$this->services_model->update($array_data, $array_id);
				$this->session->set_flashdata('success',$text_msg);

				redirect(site_url('admin/services'));
				break;

			default:
				redirect(site_url('admin/services'));
				break;
		}
	}

	public function update_load()
	{
		$id 			= hash_link_decode($this->input->post('dataID'));
		$get_data	= $this->services_model->get($id);

		$get_image 	= $this->image_model->get_by(array('parent_id' => $id, 'image_parent_name' => 'services', 'image_seq' => '0'), 1, NULL, TRUE);
		$get_icon 	= $this->image_model->get_by(array('parent_id' => $id, 'image_parent_name' => 'services', 'image_seq' => '1'), 1, NULL, TRUE);

		$this->data['id'] 				= $this->input->post('dataID');
		$this->data['title'] 	= $get_data->services_name;
		$this->data['desc'] 		= $get_data->services_desc;
		$this->data['image'] = $get_image->image_id;
		$this->data['icon'] = $get_icon->image_id;

		echo json_encode($this->data);
	}
}
