<?php
/**
*
*/
class Search extends Frontend_Controller {

	public function index()
	{
    if (empty($_GET['s'])) {
      redirect(site_url());
    }
    else {
      $qs = $_GET['s'];
      $this->data['services'] = $this->services_model->get_services(array('image_seq' => 0, 'services_pub' => '99', 'image_parent_name' => 'services'), NULL, NULL, FALSE, NULL, array('services_name' => $qs));
      $this->data['news'] = $this->news_model->get_news(array('catnews_id' => 1, 'news_pub' => '99', 'image_parent_name' => 'news'), NULL, NULL, FALSE, NULL, array('news_title' => $qs));
      $this->data['event'] = $this->news_model->get_news(array('catnews_id' => 2, 'news_pub' => '99', 'image_parent_name' => 'event'), NULL, NULL, FALSE, NULL, array('news_title' => $qs));
  		$this->data['content']	= 'pages/search';
  		$this->load->view('index', $this->data);
    }
	}

}
