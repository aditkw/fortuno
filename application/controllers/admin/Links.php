<?php

/**
*
*/
class Links extends Backend_Controller
{
	protected $catinfo_id 		= '6';

	function index()
	{
		$array_where =  array('catinfo_id' => $this->catinfo_id);

		$this->data['content'] 	= 'admin/pages/links/view';
		$this->data['links'] 		= $this->info_model->get_by($array_where);;

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
					redirect(site_url('admin/links'));
				}

				else {

						$links_id = $this->info_model->insert($array_data);
						$this->session->set_flashdata('success',$this->add_text);

						redirect(site_url('admin/links'));
				}
				break;

			/* --------- EDIT DATA --------- */
			case 'update':
				$id = hash_link_decode($post['id']);
				$array_id = array('info_id' => $id);

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
					redirect(site_url('admin/links'));
				}

				else {
					$this->info_model->update($array_data, $array_id);
					$this->session->set_flashdata('success',$this->edit_text);

					redirect(site_url('admin/links'));
				}
				break;

			/* --------- HAPUS DATA --------- */
			case 'delete':
				$count = $this->info_model->count(array('info_id' => $id));

				if ($count > 0) {
					$this->info_model->delete($id);
					$this->session->set_flashdata('success',$this->delete_text);

					redirect(site_url('admin/links'));
				}

				else {
					$this->session->set_flashdata('error',$this->not_found);
					redirect(site_url('admin/links'));
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

				redirect(site_url('admin/links'));
				break;

			default:
				redirect(site_url('admin/links'));
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
