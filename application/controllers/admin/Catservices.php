<?php

/**
*
*/
class Catservices extends Backend_Controller
{
 	protected $wt 	= 70;
	protected $ht = 0;
	protected $image_input_name = 'image';
	protected $modul_file 			= 'catservices';
	function index()
	{
		$this->data['content'] 	= 'admin/pages/catservices/view';
		$array_where = array('{PRE}image.image_parent_name' => 'catservices', '{PRE}image.image_seq' => '0');

		$this->data['catservices'] 		= $this->catservices_model->get_category($array_where);

		$this->load->view('admin/media', $this->data);
	}

	public function action($param)
	{
		$post					= $this->input->post(NULL, TRUE);
		$rules 				= $this->catservices_model->rules;
		$id 					= (!empty($_GET['id'])) ?hash_link_decode( $_GET['id']) : NULL;

		$this->form_validation->set_rules($rules);

		if (!empty($post)) {
			$link 			= title_url($post['name_en']);

			$array_data['catservices_name'] 	= $post['name'];
			$array_data['catservices_desc'] 	= $post['desc'];
			$array_data['catservices_name_en'] 	= $post['name_en'];
			$array_data['catservices_desc_en'] 	= $post['desc_en'];
			$array_data['catservices_icon'] 	= $post['icon'];
			$array_data['catservices_link'] 	= $link;
		}

		switch ($param) {

			/* --------- TAMBAH DATA --------- */
			case 'insert':
				$this->form_validation->set_rules('name','catservices Name','required|is_unique[{PRE}catservices.catservices_name]');
				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
					redirect(site_url('admin/catservices'));
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

					$catservices_id = $this->catservices_model->insert($array_data);
					for ($i=0; $i < 1; $i++) {
						$array_img[] = array(
							'parent_id' 				=> $catservices_id,
							'image_parent_name'	=> 'catservices',
							'image_name' 				=> $upload_image[$i],
							'image_seq'					=> $i
							);
					}
					$this->image_model->insert($array_img, TRUE);
					$this->session->set_flashdata('success',$this->add_text);

					redirect(site_url('admin/catservices'));
				}
				break;

			/* --------- EDIT DATA --------- */
			case 'update':
				$array_id = array('catservices_id' => hash_link_decode($post['id']));
				$files 			= $_FILES[$this->image_input_name]['name'];

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
					redirect(site_url('admin/catservices'));
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

					for ($i=0; $i<1; $i++) {
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
					$this->catservices_model->update($array_data, $array_id);
					$this->session->set_flashdata('success',$this->edit_text);

					redirect(site_url('admin/catservices'));
				}
				break;

			/* --------- HAPUS DATA --------- */
			case 'delete':
				$count = $this->catservices_model->count(array('catservices_id' => $id));

				if ($count > 0) {
					$where_image 	= array('image_parent_name' => 'catservices', 'parent_id' => $id);
					$image 	= $this->image_model->get_by($where_image);
					foreach ($image as $key => $image) {
						$this->lawave_image->delete_image($this->modul_file, $image->image_name, $this->thumb_pre);
					}

					// hapus data
					$this->catservices_model->delete($id);
					$this->image_model->delete_by($where_image);
					$this->session->set_flashdata('success',$this->delete_text);

					redirect(site_url('admin/catservices'));
				}

				else {
					$this->session->set_flashdata('error',$this->not_found);
					redirect(site_url('admin/services'));
				}
				break;

			/* --------- PUBLISH DATA --------- */
			case 'publish':
				$array_id = array('catservices_id' => $id);

				$get_data = $this->catservices_model->get($id);

				if ($get_data->catservices_pub == '88') {
					$array_data['catservices_pub'] = '99';
					$text_msg = $this->publish_text;
				}

				else {
					$array_data['catservices_pub'] = '88';
					$text_msg = $this->unpublish_text;
				}

				$this->catservices_model->update($array_data, $array_id);
				$this->session->set_flashdata('success',$text_msg);

				redirect(site_url('admin/catservices'));
				break;

			default:
				redirect(site_url('admin/catservices'));
				break;
		}
	}

	public function update_load()
	{
		$id 			= hash_link_decode($this->input->post('dataID'));
		$get_data	= $this->catservices_model->get($id);

		$get_image 	= $this->image_model->get_by(array('parent_id' => $id, 'image_parent_name' => 'catservices', 'image_seq' => '0'), 1, NULL, TRUE);
		// $get_icon 	= $this->image_model->get_by(array('parent_id' => $id, 'image_parent_name' => 'catservices', 'image_seq' => '1'), 1, NULL, TRUE);

		$this->data['id'] 				= $this->input->post('dataID');
		$this->data['name'] 	= $get_data->catservices_name;
		$this->data['name_en'] 	= $get_data->catservices_name_en;
		$this->data['desc'] 		= $get_data->catservices_desc;
		$this->data['desc_en'] 		= $get_data->catservices_desc_en;
		$this->data['image'] = $get_image->image_id;
		$this->data['icon'] = $get_data->catservices_icon;

		echo json_encode($this->data);
	}
}
