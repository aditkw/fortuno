<?php
/**
*
*/
class Search extends Frontend_Controller {

	public function index()
	{
		$this->load->model('search_model');
		$searchIn = $this->uri->segment(2);
		$offset = $this->uri->segment(3);
		preg_match('/search\/(.+)\/0\/index\.php\?s=(.+)/', $_SERVER['REQUEST_URI'], $match_url);
		if(isset($match_url[2])) {
			redirect(base_url().'search/'.$match_url[1].'/0/'.str_replace('+', '-', $match_url[2]));
		}

		$search = str_replace('-', ' ', $this->uri->segment(4));
		$search = str_replace('+', ' ', $search);
		$search = trim(str_replace('%20', ' ', $search));

    if (empty($search) || $search === 'index.php') {
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
