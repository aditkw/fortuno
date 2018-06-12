<?php
/**
*
*/
class News extends Frontend_Controller {

	public function index()
	{
		$this->data['news'] = $this->news_model->get_news(array('catnews_id' => 1 ,'news_pub' => '99', 'image_parent_name' => 'news'));

		$this->data['content']	= 'pages/news';
		$this->load->view('index', $this->data);
	}

	public function detail($link)
	{
		$this->data['news'] = $this->news_model->get_news(array('news_link' => $link, 'image_parent_name' => 'news'), 1, NULL, TRUE);
		$this->data['others'] = $this->news_model->get_news(array('catnews_id' => 1 ,'news_pub' => '99', 'image_parent_name' => 'news'));
		$this->data['content']	= 'pages/news-detail';
		$this->load->view('index', $this->data);
	}

}
