<?php
  /**
   *
   */
  class Portfolio extends Frontend_Controller
  {
    function __construct() {
      parent::__construct();
      $this->data['top'] = 'portfolio';
      $this->data['bottom'] = 'portfolio';
      $this->data['header']['portfolio'] = 'portfolio';
    }

    function index() {
      $this->data['portofolio'] = $this->portofolio_model->get_portofolio(array('image_parent_name' => 'portofolio', 'image_seq' => 0));
      $this->data['content'] = 'pages/portfolio';
      $this->load->view('index', $this->data);
    }

    function gallery($link) {
      $this->data['portofolio'] = $this->portofolio_model->get_portofolio(array('portofolio_link' => $link ,'image_parent_name' => 'portofolio'));
      $this->data['port'] = $this->portofolio_model->get_by(array('portofolio_link' => $link),null,null,true);
      $this->data['content'] = 'pages/portfolio-gallery';
      $this->load->view('index', $this->data);
    }

  }

 ?>
