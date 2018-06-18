<?php

/**
*
*/
class About extends Backend_Controller
{
	protected $max_size					= 1024 * 200;
	protected $wt 							= 70;
	protected $ht 							= 0;
	protected $image_input_name = 'image';
	protected $modul_file 			= 'about';

	function index()
	{
		$this->data['content'] 		= 'admin/pages/about/view';
		$this->data['about'] 		= $this->about_model->get_about(
			array(
				'{PRE}'.'image.image_seq' => '0',
				'{PRE}'.'image.image_parent_name' => 'about',
				)
			);
		$this->data['thumb_pre']	= $this->thumb_pre;
		$this->data['path_file']	= $this->img_path.$this->modul_file;

		$this->load->view('admin/media', $this->data);
	}

	public function page($param)
	{
		$id 		= (!empty($_GET['id'])) ? hash_link_decode($_GET['id']) : NULL;

		$this->data['path_file']	= $this->img_path.$this->modul_file;

		switch ($param) {

			/* ---------- HALAMAN TAMBAH DATA ---------- */
			case 'add':
				$this->data['content'] 		= 'admin/pages/about/add';
				$this->load->view('admin/media', $this->data);
				break;

			/* ---------- HALAMAN EDIT DATA ---------- */
			case 'edit':
				$where_img_index					= array('parent_id' => $id, 'image_parent_name' => 'about', 'image_seq' => 0);

				$this->data['content'] 		= 'admin/pages/about/edit';
				$this->data['about'] 		= $this->about_model->get($id);
				$this->data['image_index']= $this->image_model->get_by($where_img_index, NULL, NULL, TRUE);
				$this->data['thumb_pre']	= $this->thumb_pre;

				$this->load->view('admin/media', $this->data);
				break;

			default:
				redirect(site_url('admin/about'));
				break;
		}
	}

	public function action($param)
	{
		$post 			= $this->input->post(NULL, TRUE);
		$date 			= date("Y-m-d H:i:s");
		$rules 			= $this->about_model->rules;
		$id 				= (!empty($_GET['id'])) ? hash_link_decode($_GET['id']) : NULL;

		$this->form_validation->set_rules($rules);

		if (!empty($post)) {
			$alt 				= title_url($post['title']);

			$array_data['about_title'] 				= $post['title'];
			$array_data['about_desc'] 					= $post['desc'];
		}

		switch ($param) {

			/* ----------- TAMBAH DATA ----------- */
			case 'insert':
				$this->form_validation->set_rules('title','about Title','trim|required|is_unique[{PRE}about.about_title]');

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
					redirect(site_url('admin/about'));
				}

				else {
					$upload_image = $this->lawave_image->upload_image($this->modul_file, $this->image_input_name, $alt);
					$this->image_moo
					->load($upload_image['image_path'].self::DS.$upload_image['image']['file_name'])
					->resize($this->wt,$this->ht)
					->save_pa($this->thumb_pre,'');

					$about_id = $this->about_model->insert($array_data);

					$array_img['parent_id']					= $about_id;
					$array_img['image_parent_name']	= 'about';
					$array_img['image_name']				= $upload_image['image']['file_name'];
					$array_img['image_seq']					= 0;

					$this->image_model->insert($array_img);
					$this->session->set_flashdata('success',$this->add_text);
					redirect(site_url('admin/about'));
				}
				break;

			/* ----------- EDIT DATA ----------- */
			case 'update':
				$id 				= hash_link_decode($post['id']);
				$where_img	= array('parent_id' => $id, 'image_parent_name' => 'about');
				$get_data 	= $this->about_model->get($id);
				$get_image 	= $this->image_model->get_by($where_img, NULL, NULL, TRUE);
				$array_id 	= array('about_id' => $id);
				$files 			= $_FILES[$this->image_input_name]['name'];

				$is_unique = $this->about_model->unique_update($post['title'], $id, 'about_title');
				// var_dump($is_unique);
				// die();

				$this->form_validation->set_rules('title','about Title','required'.$is_unique);
				$this->form_validation->set_rules($rules);

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
					redirect(site_url('admin/about'));
				}

				else {
					$this->about_model->update($array_data, $array_id);

					if (!empty($files)) {
						$this->lawave_image->delete_image($this->modul_file, $get_image->image_name, $this->thumb_pre);

						$upload_image = $this->lawave_image->upload_image($this->modul_file, $this->image_input_name, $alt);
						$this->image_moo
							->load($upload_image['image_path'].self::DS.$upload_image['image']['file_name'])
							->resize($this->wt,$this->ht)
							->save_pa($this->thumb_pre,'');

						$array_img['image_name']				= $upload_image['image']['file_name'];

						$this->image_model->update($array_img, array('image_id' => $get_image->image_id));
					}

					$this->session->set_flashdata('success', $this->edit_text);
					redirect(site_url('admin/about'));
				}
				break;

			/* ----------- HAPUS DATA ----------- */
			case 'delete':
				$count 		= $this->about_model->count(array('about_id' => $id));

				if ($count > 0) {
					$get_data 		= $this->about_model->get($id);
					/* hapus gambar */
					$where_image 	= array('parent_id' => $id, 'image_parent_name' => 'about');
					$get_image 	= $this->image_model->get_by($where_image, 1, NULL, TRUE);
					$this->lawave_image->delete_image($this->modul_file, $get_image->image_name, $this->thumb_pre);
					/* hapus data */
					$this->about_model->delete($id);
					$this->image_model->delete_by($where_image);
					$this->session->set_flashdata('success',$this->delete_text);

					redirect(site_url('admin/about'));
				}

				else {
					$this->session->set_flashdata('failed',$this->not_found);
					redirect(site_url('admin/about'));
				}
				break;

			/* ----------- PUBLISH DATA ----------- */
			case 'publish':
				$array_id = array('about_id' => $id);
				$get_data = $this->about_model->get($id);

				if ($get_data->about_pub == '88') {
					$array_data['about_pub'] = '99';
					$text_msg = $this->publish_text;
				}

				else {
					$array_data['about_pub'] = '88';
					$text_msg = $this->unpublish_text;
				}

				$this->about_model->update($array_data, $array_id);
				$this->session->set_flashdata('success', $text_msg);

				redirect(site_url('admin/about'));
				break;

			default:
				redirect(site_url('admin/about'));
				break;
		}
	}


	public function ajax_subcat()
	{
		$id 					= $this->input->post('dataID');
		$array_where 	= array('about_cat_id' => $id);
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
}
