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
      $this->data['content'] = 'pages/portfolio';
      $this->load->view('index', $this->data);
    }

    function gallery($link) {
      $this->data['content'] = 'pages/portfolio-gallery';
      $this->load->view('index', $this->data);
    }

  }

 ?>
