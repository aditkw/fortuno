<?php

/**
* 9 jun 2017 -> action: status
*/
class Portofolio extends Backend_Controller
{
	protected $max_size					= 1024 * 200;
	protected $wt 							= 70;
	protected $ht 							= 0;
	protected $image_input_name = 'image';
	protected $modul_file 			= 'portofolio';

	function index()
	{
		$this->data['content'] 		= 'admin/pages/portofolio/view';
		$this->data['portofolio'] 		= $this->portofolio_model->get_portofolio(
			array(
				'{PRE}image.image_seq' => '0',
				'{PRE}image.image_parent_name' => 'portofolio'
				)
			);
		// $this->data['thumb_pre']	= $this->thumb_pre;
		// $this->data['path_file']	= $this->img_path.$this->modul_file;

		$this->load->view('admin/media', $this->data);
	}

	public function page($param)
	{
		$id 		= (!empty($_GET['id'])) ? hash_link_decode($_GET['id']) : NULL;
		$this->data['path_file']	= $this->img_path.$this->modul_file;

		switch ($param) {

			/* ---------- HALAMAN TAMBAH DATA ---------- */
			case 'add':
				$this->data['content'] 		= 'admin/pages/portofolio/add';
				$this->load->view('admin/media', $this->data);
				break;

			/* ---------- HALAMAN EDIT DATA ---------- */
			case 'edit':
				$where_img_index					= array('parent_id' => $id, 'image_parent_name' => 'portofolio', 'image_seq' => 0);
				$where_img								= array('parent_id' => $id, 'image_parent_name' => 'portofolio');

				$this->data['content'] 		= 'admin/pages/portofolio/edit';
				$this->data['portofolio'] 		= $this->portofolio_model->get($id);
				$this->data['image_index']= $this->image_model->get_by($where_img_index, 1, NULL, TRUE);
				$this->data['image'] 			= $this->image_model->get_by($where_img);
				$this->data['thumb_pre']	= $this->thumb_pre;

				$this->load->view('admin/media', $this->data);
				break;

			default:
				redirect(site_url('admin/article'));
				break;
		}
	}

	public function action($param)
	{
		$post 			= $this->input->post(NULL, TRUE);
		$rules 			= $this->portofolio_model->rules;
		$id 				= (!empty($_GET['id'])) ? hash_link_decode($_GET['id']) : NULL;

		if ($post) {
			$link 			= title_url($post['name_en']);
			$array_data['portofolio_name'] 				= $post['name'];
			$array_data['portofolio_name_en'] 		= $post['name_en'];
			$array_data['portofolio_desc'] 				= $post['desc'];
			$array_data['portofolio_desc_en'] 		= $post['desc_en'];
			$array_data['portofolio_link']				= $link;
		}

		switch ($param) {

			/* ---------- TAMBAH DATA ---------- */
			case 'insert':
				$this->form_validation->set_rules('name','portofolio Name','required|is_unique[{PRE}portofolio.portofolio_name]');
				$this->form_validation->set_rules($rules);

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
					redirect(site_url('admin/portofolio'));
				}

				else {
					// $this->load->library('image_moo');
					$upload_image = $this->lawave_image->upload_images(
						$this->modul_file,
						$this->image_input_name,
						$link,
						$this->thumb_pre,
						$this->wt,
						$this->ht
						);

					// $this->image_moo
					// 	->load($this->img_path.'/'.$this->modul_file.'/'.$upload_image[0])
					// 	->resize(252,255)
					// 	->save_pa('thumbnail_','');

					$portofolio_id = $this->portofolio_model->insert($array_data);

					for ($i=0; $i < 4; $i++) {
						$array_img[] = array(
							'parent_id' 				=> $portofolio_id,
							'image_parent_name'	=> 'portofolio',
							'image_name' 				=> $upload_image[$i],
							'image_seq'					=> $i
							);
					}

					$this->image_model->insert($array_img, TRUE);
					$this->session->set_flashdata('success',$this->add_text);

					redirect(site_url('admin/portofolio'));
				}
				break;

			/* ---------- EDIT DATA ---------- */
			case 'update':
				$id 				= hash_link_decode($post['id']);
				$where_img	= array('parent_id' => $id, 'image_parent_name' => 'portofolio');
				$get_data 	= $this->portofolio_model->get($id); // dapatkan data berdasarkan id
				$get_image 	= $this->image_model->get_by($where_img); // dapatkan data berdasarkan id
				$array_id 	= array('portofolio_id' => $id);		// id untuk update berbentuk array
				$files 			= $_FILES[$this->image_input_name]['name'];
				$count_file = count($files);

				$is_unique = $this->portofolio_model->unique_update($post['name'], $id, 'portofolio_name');

				$this->form_validation->set_rules('name','portofolio name','required'.$is_unique);
				$this->form_validation->set_rules($rules);

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
					redirect(site_url('admin/portofolio'));
				}

				else {
					$this->load->library('image_moo');

					// update data produk
					$this->portofolio_model->update($array_data, $array_id);

					// upload gambar baru
					$upload_image = $this->lawave_image->upload_images(
						$this->modul_file,
						$this->image_input_name,
						$alt,
						$this->thumb_pre,
						$this->wt,
						$this->ht
						);

					// $this->image_moo
					// 	->load($this->img_path.'/'.$this->modul_file.'/'.$upload_image[0])
					// 	->resize(252,255)
					// 	->save_pa('thumbnail_','');

					// perulangan untuk update data gambar
					for ($i=0; $i < $count_file; $i++) {

						// array WHERE untuk update gambar berdasarkan id_gambar
						$id_img = array('image_id' => $post['id_image_'.$i]);

						// jika _file[image][name] tidak kosong
						if (!empty($post['delete_image_'.$i])) {
							$image 	= $this->image_model->get($post['id_image_'.$i]);
							// hapus gambar lama
							$this->lawave_image->delete_image($this->modul_file, $image->image_name, $this->thumb_pre);
							// array yang akan dikirim ke function update
							$array_img = array(
								'image_name' 	=> ''
								);
							// proses update gambar
							$this->image_model->update($array_img, $id_img); // insert_batch gambar
						}

						else if (!empty($files[$i])) {
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

					$this->session->set_flashdata('success', $this->edit_text);
					redirect(site_url('admin/portofolio'));
				}
				break;

			/* ---------- HAPUS DATA ---------- */
			case 'delete':
				$get_data 		= $this->portofolio_model->get($id);
				// hapus gambar
				$where_image 	= array('image_parent_name' => 'portofolio', 'parent_id' => $id);
				$image 	= $this->image_model->get_by($where_image);
				foreach ($image as $key => $image) {
					$this->lawave_image->delete_image($this->modul_file, $image->image_name, $this->thumb_pre);
				}

				// hapus data
				$this->portofolio_model->delete($id);
				$this->image_model->delete_by($where_image);
				$this->session->set_flashdata('success',$this->delete_text);

				redirect(site_url('admin/portofolio'));
				break;

			case 'publish':
				$array_id = array('portofolio_id' => $id);

				$get_data = $this->portofolio_model->get($id);

				if ($get_data->portofolio_pub == '88') {
					$array_data['portofolio_pub'] = '99';
					$text_msg = $this->publish_text;
				}

				else {
					$array_data['portofolio_pub'] = '88';
					$text_msg = $this->unpublish_text;
				}

				$this->portofolio_model->update($array_data, $array_id);
				$this->session->set_flashdata('success', $text_msg);

				redirect(site_url('admin/portofolio'));
				break;

			default:
				redirect(site_url('admin/portofolio'));
				break;
		}
	}

	public function ajax_subcat()
	{
		$id 					= $this->input->post('dataID');
		$array_where 	= array('category_id' => $id);
		$get_data 		= $this->subcat_model->get_by($array_where);
		$output 			= '';

		if ($get_data) {
			$output .= '<option disabled selected>Select Sub Category</option>';
			foreach ($get_data as $result) {
				$output .= '<option value="'.$result->subcat_id.'">';
				$output .= ucwords($result->subcat_name);
				$output .= '</option>';
			}
			echo $output;
		}
	}

	public function ajax_type()
	{
		$id 					= $this->input->post('dataID');
		$array_where 	= array('subcat_id' => $id);
		$get_data 		= $this->type_model->get_by($array_where);
		$output 			= '';

		if ($get_data) {
			$output .= '<option disabled selected>Select Type</option>';
			foreach ($get_data as $result) {
				$output .= '<option value="'.$result->type_id.'">';
				$output .= ucwords($result->type_name);
				$output .= '</option>';
			}
			echo $output;
		}
	}
}
