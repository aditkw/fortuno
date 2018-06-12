<?php
/**
*
*/
class Event extends Frontend_Controller {

	public function index()
	{
		$this->data['event'] = $this->news_model->get_news(array('catnews_id' => 2 ,'news_pub' => '99', 'image_parent_name' => 'event'));

		$this->data['content']	= 'pages/event';
		$this->load->view('index', $this->data);
	}

	public function detail($link)
	{
		$this->data['event'] = $this->news_model->get_news(array('news_link' => $link, 'image_parent_name' => 'event'), 1, NULL, TRUE);
		$this->data['others'] = $this->news_model->get_news(array('catnews_id' => 2 ,'news_pub' => '99', 'image_parent_name' => 'event'));
		$this->data['content']	= 'pages/event-detail';
		$this->load->view('index', $this->data);
	}

}
