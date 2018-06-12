<?php

/**
*
*/
class Benefits extends Backend_Controller
{
	protected $catinfo_id 		= '4';

	function index()
	{
		$array_where =  array('catinfo_id' => $this->catinfo_id);

		$this->data['content'] 	= 'admin/pages/benefits/view';
		$this->data['benefits'] 		= $this->info_model->get_by($array_where);;

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
			$array_data['info_name'] 	= $post['title'];
			$array_data['info_desc'] 	= $post['desc'];
		}

		switch ($param) {

			/* --------- TAMBAH DATA --------- */
			case 'insert':

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
					redirect(site_url('admin/benefits'));
				}

				else {

						$benefits_id = $this->info_model->insert($array_data);
						$this->session->set_flashdata('success',$this->add_text);

						redirect(site_url('admin/benefits'));
				}
				break;

			/* --------- EDIT DATA --------- */
			case 'update':
				$id = hash_link_decode($post['id']);
				$array_id = array('info_id' => $id);

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
					redirect(site_url('admin/benefits'));
				}

				else {
					$this->info_model->update($array_data, $array_id);
					$this->session->set_flashdata('success',$this->edit_text);

					redirect(site_url('admin/benefits'));
				}
				break;

			/* --------- HAPUS DATA --------- */
			case 'ndakboleh':
				$count = $this->info_model->count(array('info_id' => $id));

				if ($count > 0) {
					$this->info_model->delete($id);
					$this->session->set_flashdata('success',$this->delete_text);
					$where_image 	= array('image_parent_name' => 'benefits', 'parent_id' => $id);
					$image 	= $this->image_model->get_by($where_image, 1, NULL, TRUE);
					$this->lawave_image->delete_image($this->modul_file, $image->image_name, $this->thumb_pre);

					redirect(site_url('admin/benefits'));
				}

				else {
					$this->session->set_flashdata('error',$this->not_found);
					redirect(site_url('admin/benefits'));
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

				redirect(site_url('admin/benefits'));
				break;

			default:
				redirect(site_url('admin/benefits'));
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
