<?php

/**
*
*/
class Clients extends Backend_Controller
{
	protected $catinfo_id 		= '3';
	protected $max_size					= 1024 * 1000;
	protected $width_thumbnail 	= 70;
	protected $height_thumbnail = 0;
	protected $image_input_name = 'image';
	protected $modul_file 			= 'clients';

	function index()
	{
		$array_where =  array('catinfo_id' => $this->catinfo_id, 'image_parent_name' => 'clients');

		$this->data['content'] 	= 'admin/pages/clients/view';
		$this->data['clients'] 		= $this->info_model->get_info($array_where);

		$this->data['thumb_pre']= $this->thumb_pre;
		$this->data['path_file']= $this->img_path.$this->modul_file;

		$this->load->view('admin/media', $this->data);
	}

	public function action($param)
	{
		$post					= $this->input->post(NULL, TRUE);
		$rules 				= $this->info_model->rules;
		$array_where 	= array('catinfo_id' => $this->catinfo_id);
		$id 					= (!empty($_GET['id'])) ?hash_link_decode( $_GET['id']) : NULL;

		$this->form_validation->set_rules($rules);

		if (!empty($post)) {
			$array_data['catinfo_id'] = $this->catinfo_id;
			// $array_data['info_name'] 	= $post['title'];
			$array_data['info_desc'] 	= $post['desc'];
		}

		switch ($param) {

			/* --------- TAMBAH DATA --------- */
			case 'insert':

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
					redirect(site_url('admin/clients'));
				}

				else {
					$size 		= $_FILES['image']['size'];

					if ($size > $this->max_size) {
						$this->session->set_flashdata('error', $this->too_large_text);
						redirect(site_url('admin/clients'));
					}

					else {
						$upload_image = $this->lawave_image->upload_image($this->modul_file, $this->image_input_name);
						// image moo
						$this->image_moo
							->load($upload_image['image_path'].self::DS.$upload_image['image']['file_name']) // ambil gambar
							->resize($this->width_thumbnail,$this->height_thumbnail) // resize
							->save_pa($this->thumb_pre,''); // simpan

						$clients_id = $this->info_model->insert($array_data);

						$array_image = array(
							'parent_id' => $clients_id,
							'image_parent_name' => 'clients',
							'image_name' => $upload_image['image']['file_name'],
							'image_seq' => '0'
							);
						$this->image_model->insert($array_image);
						$this->session->set_flashdata('success',$this->add_text);

						redirect(site_url('admin/clients'));
					}
				}
				break;

			/* --------- EDIT DATA --------- */
			case 'update':
			$id = hash_link_decode($post['id']);
			$array_id = array('info_id' => $id);
			$get_image= $this->image_model->get_by(array('image_parent_name' => 'clients', 'parent_id' => $id), 1, NULL, TRUE);
			// var_dump($get_image);
			// die();

			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
				redirect(site_url('admin/clients'));
			}

			else {
				if (!empty($_FILES['image']['name'])) {
					$size = $_FILES['image']['size'];

					if ($size > $this->max_size) {
						$this->session->set_flashdata('error', $this->too_large_text);
						redirect(site_url('admin/clients'));
					}

					else {
						$this->lawave_image->delete_image($this->modul_file, $get_image->image_name, $this->thumb_pre);
						$upload_image = $this->lawave_image->upload_image($this->modul_file, $this->image_input_name);
						// image moo
						$this->image_moo
							->load($upload_image['image_path'].self::DS.$upload_image['image']['file_name']) // ambil gambar
							->resize($this->width_thumbnail,$this->height_thumbnail) // resize
							->save_pa($this->thumb_pre,''); // simpan

						$array_image['image_name'] = $upload_image['image']['file_name'];

						$this->info_model->update($array_data, $array_id);
						$this->image_model->update($array_image, array('image_id' => $get_image->image_id));
						$this->session->set_flashdata('success', $this->edit_text);

						redirect(site_url('admin/clients'));
					}
				}

				$this->info_model->update($array_data, $array_id);
				$this->session->set_flashdata('success',$this->edit_text);

				redirect(site_url('admin/clients'));
			}
				break;

			/* --------- HAPUS DATA --------- */
			case 'delete':
				$count = $this->info_model->count(array('info_id' => $id));

				if ($count > 0) {
					$this->info_model->delete($id);
					$this->session->set_flashdata('success',$this->delete_text);
					$where_image 	= array('image_parent_name' => 'clients', 'parent_id' => $id);
					$image 	= $this->image_model->get_by($where_image, 1, NULL, TRUE);
					$this->image_model->delete($image->image_id);
					$this->lawave_image->delete_image($this->modul_file, $image->image_name, $this->thumb_pre);

					redirect(site_url('admin/clients'));
				}

				else {
					$this->session->set_flashdata('error',$this->not_found);
					redirect(site_url('admin/clients'));
				}
				break;

			/* --------- PUBLISH DATA --------- */
			case 'publish':
				$array_id = array('info_id' => $id);

				$get_data = $this->info_model->get($id);

				if ($get_data->info_pub == '88') {
					$array_data['info_pub'] = '99';
					$text_msg = $this->publish_text;
				}

				else {
					$array_data['info_pub'] = '88';
					$text_msg = $this->unpublish_text;
				}

				$this->info_model->update($array_data, $array_id);
				$this->session->set_flashdata('success',$text_msg);

				redirect(site_url('admin/clients'));
				break;

			default:
				redirect(site_url('admin/clients'));
				break;
		}
	}

	public function update_load()
	{
		$id 			= hash_link_decode($this->input->post('dataID'));
		$get_data	= $this->info_model->get($id);

		$this->data['id'] 				= $this->input->post('dataID');
		$this->data['title'] 	= $get_data->info_name;
		$this->data['desc'] 		= $get_data->info_desc;

		echo json_encode($this->data);
	}
}
