<?php
/**
*
*/
class Contact extends Frontend_Controller {

	public function index()
	{
		$post = $this->input->post(NULL, TRUE);
		if (isset($post['c_send'])) {
			$this->contact['nama'] = $post['c_name'];
			$this->contact['subject'] = $post['c_subject'];
			$this->contact['email'] = $post['c_email'];
			// $this->contact['alamat'] = $post['address'];
			$this->contact['pesan'] = $post['c_message'];
			$this->contact['base_url'] = $this->data['base_url'];
			$this->contact['site'] = $this->data['site'];
			$this->contact['contact'] = $this->data['contact'];
			$this->contact['site_image'] = "";
			$subject = 'Pesan dari pengunjung website';

			$this->contact['content'] = 'pages/email/contact';
			$email = $this->load->view('email', $this->contact, TRUE);

			lwd_send_email($this->data['site']->site_email, $subject, $email);
			redirect(site_url());
		}
		else {
			redirect(site_url());
		}

		// $this->data['content']	= 'pages/contact';
		// $this->load->view('index', $this->data);
	}
}
