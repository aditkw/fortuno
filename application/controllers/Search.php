<?php
/**
*
*/
class Search extends Frontend_Controller {

	public function index()
	{
		$this->load->model('search_model');
		// $this->load->library('pagination');
		// $config['base_url'] = 'http://example.com/index.php/test/page/';
		// $config['total_rows'] = 200;
		// $config['per_page'] = 4;
		//
		// $this->pagination->initialize($config);
		//
		// echo $this->pagination->create_links();

//

		$searchIn = $this->uri->segment(2);
		$offset = $this->uri->segment(3);
		$search = str_replace('-', ' ', $this->uri->segment(4));
    if (empty($search)) {
      redirect(site_url());
    }
    else {
			if ($searchIn === 'services') {
				$this->data['searchIn'] = 'services';
				$this->data['result']	= $this->search_model->getServices($offset, $search);
			} else if ($searchIn === 'portfolio') {
				$this->data['searchIn'] = 'portofolio';
				$this->data['result']	= $this->search_model->getPortfolio($offset, $search);
			}
			$this->data['top']	= 'search';
			$this->data['search'] = $search;
			$this->data['content']	= 'pages/search';
			$this->load->view('index', $this->data);
    }
	}

}
