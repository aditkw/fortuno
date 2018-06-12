<?php

/**
*
*/
class Text extends Backend_Controller
{

	public function index()
	{
		$id = 1;

		$this->data['content'] = 'admin/pages/text/view';
		$this->data['text'] = $this->text_model->get($id);

		$this->load->view('admin/media', $this->data);
	}

	public function action($param)
	{
		$id = 1;
		$array_id = array('text_id' => $id);
		$post 		= $this->input->post(NULL, TRUE);

		switch ($param) {

			/* ----------- EDIT DATA ----------- */
			case 'update':
				$array_data = array(
					// id
					'text_slide' => $post['slide'],
					'text_quote' => $post['quote'],
					'text_footer' => $post['footer'],
					'text_service' => $post['service'],
					'text_portofolio' => $post['portofolio'],
					// en
					'text_slide_en' => $post['slide_en'],
					'text_quote_en' => $post['quote_en'],
					'text_footer_en' => $post['footer_en'],
					'text_service_en' => $post['service_en'],
					'text_portofolio_en' => $post['portofolio_en'],
					);
				$update = $this->text_model->update($array_data, $array_id);
				$this->session->set_flashdata('success',$this->edit_text);
				redirect(site_url('admin/text'));
				break;

			default:
				redirect(site_url('admin/text'));
				break;
		}
	}
}
