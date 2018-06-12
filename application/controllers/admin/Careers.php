<?php

/**
*
*/
class Careers extends Backend_Controller
{
	function index()
	{
		$this->data['content'] 		= 'admin/pages/careers/view';
		$this->data['careers'] 		= $this->careers_model->get();

		$this->load->view('admin/media', $this->data);
	}

	public function page($param)
	{
		$id 		= (!empty($_GET['id'])) ? hash_link_decode($_GET['id']) : NULL;

		switch ($param) {

			/* ---------- HALAMAN TAMBAH DATA ---------- */
			case 'add':
				$this->data['content'] 		= 'admin/pages/careers/add';
				$this->load->view('admin/media', $this->data);
				break;

			/* ---------- HALAMAN EDIT DATA ---------- */
			case 'edit':
				$this->data['content'] 		= 'admin/pages/careers/edit';
				$this->data['careers'] 		= $this->careers_model->get($id);

				$this->load->view('admin/media', $this->data);
				break;

			default:
				redirect(site_url('admin/careers'));
				break;
		}
	}

	public function action($param)
	{
		$post 			= $this->input->post(NULL, TRUE);
		$date 			= date("Y-m-d");
		$rules 			= $this->careers_model->rules;
		$id 				= (!empty($_GET['id'])) ? hash_link_decode($_GET['id']) : NULL;

		$this->form_validation->set_rules($rules);

		if (!empty($post)) {
			$array_data['careers_name'] 				= $post['name'];
			$array_data['careers_desc'] 				= $post['desc'];
			$array_data['careers_close'] 				= $post['close'];
			$array_data['careers_post'] 		    = $date;
		}

		switch ($param) {

			/* ----------- TAMBAH DATA ----------- */
			case 'insert':
				// $this->form_validation->set_rules('title','careers Title','trim|required|is_unique[{PRE}careers.careers_title]');

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
					redirect(site_url('admin/careers'));
				}

				else {
					$careers_id = $this->careers_model->insert($array_data);
					$this->session->set_flashdata('success',$this->add_text);
					redirect(site_url('admin/careers'));
				}
				break;

			/* ----------- EDIT DATA ----------- */
			case 'update':
				$id 				= hash_link_decode($post['id']);
				$get_data 	= $this->careers_model->get($id);
				$array_id 	= array('careers_id' => $id);

				$this->form_validation->set_rules($rules);

				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', validation_errors('<li>','</li>'));
					redirect(site_url('admin/careers'));
				}

				else {
					$this->careers_model->update($array_data, $array_id);

					$this->session->set_flashdata('success', $this->edit_text);
					redirect(site_url('admin/careers'));
				}
				break;

			/* ----------- HAPUS DATA ----------- */
			case 'delete':
				$count 		= $this->careers_model->count(array('careers_id' => $id));

				if ($count > 0) {
					$get_data 		= $this->careers_model->get($id);
					/* hapus data */
					$this->careers_model->delete($id);
					$this->session->set_flashdata('success',$this->delete_text);

					redirect(site_url('admin/careers'));
				}

				else {
					$this->session->set_flashdata('failed',$this->not_found);
					redirect(site_url('admin/careers'));
				}
				break;

			/* ----------- PUBLISH DATA ----------- */
			case 'publish':
				$array_id = array('careers_id' => $id);
				$get_data = $this->careers_model->get($id);

				if ($get_data->careers_pub == '88') {
					$array_data['careers_pub'] = '99';
					$text_msg = $this->publish_text;
				}

				else {
					$array_data['careers_pub'] = '88';
					$text_msg = $this->unpublish_text;
				}

				$this->careers_model->update($array_data, $array_id);
				$this->session->set_flashdata('success', $text_msg);

				redirect(site_url('admin/careers'));
				break;

			default:
				redirect(site_url('admin/careers'));
				break;
		}
	}
}
