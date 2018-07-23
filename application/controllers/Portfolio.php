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
      $this->data['catporto'] = $this->catporto_model->get_category(array('image_parent_name' => 'catporto'), NULL, NULL, NULL, array('catporto_name', 'catporto_name_en', 'catporto_link','image_name'));
      // print_r($this->data['catporto']);
      $this->data['content'] = 'pages/portfolio';
      $this->load->view('index', $this->data);
    }

    // function gallery($link) {
    //   $this->data['portofolio'] = $this->portofolio_model->get_portofolio(array('portofolio_link' => $link ,'image_parent_name' => 'portofolio'));
    //   $this->data['port'] = $this->portofolio_model->get_by(array('portofolio_link' => $link),null,null,true);
    //   $this->data['content'] = 'pages/portfolio-gallery';
    //   $this->load->view('index', $this->data);
    // }

    function workArea($link) {
      $this->data['content'] = 'pages/portfolio-gallery';
      $this->data['catporto'] = $this->catporto_model->get_category(array('image_parent_name' => 'catporto', '{PRE}catporto.catporto_link' => $link), NULL, NULL, NULL, array('{PRE}catporto.catporto_id', '{PRE}catporto.catporto_name', '{PRE}catporto.catporto_desc', '{PRE}catporto.catporto_name_en', '{PRE}catporto.catporto_desc_en'));
      $catporto_id = $this->data['catporto'][0]->catporto_id;
      $this->data['portofolio'] = $this->portofolio_model->get_portofolio(array('image_parent_name' => 'portofolio', 'portofolio_pub' => '99', '{PRE}catporto.catporto_id' => $catporto_id,'image_seq' => 0));

      $this->load->view('index', $this->data);
    }
  }

 ?>
