<?php
  /**
   *
   */
  class Services extends Frontend_Controller
  {
    function __construct() {
      parent::__construct();

      $this->data['content'] = 'pages/services';
      $this->data['top'] = 'services';
      $this->data['header']['services']['title'] = strtoupper('services');
      $this->data['bottom'] = 'services';
      // $this->data['header']['services']['sampul'] = str_replace('/', '-', $this->uri->uri_string()) . '.png';
      // $this->data['header']['services']['title'][1] = strtoupper($this->uri->segment(2));

    }

    function index() {
      // $this->data['component']['num_array_categ'] = 0;
      $this->data['component']['title'] = 'Our Services';
      $this->load->view('index', $this->data);
    }

    function category($link)
    {
      $arr_where = array('catservices_pub' => '99', 'image_parent_name' => 'catservices', 'catservices_link' => $link);
      $categories = $this->catservices_model->get_category($arr_where);
      $category = $this->catservices_model->olahData($categories, TRUE);

      $this->data['category'] = $category;

      $this->load->view('index', $this->data);
    }

    //coba disable dulu
    // function mechanical() {
    //   $this->data['component']['title'] = 'Mechanical';
    //   $this->data['component']['num_array_categ'] = 1;
    //   $this->load->view('index', $this->data);
    // }
    // function electrical() {
    //   $this->data['component']['title'] = 'Electrical';
    //   $this->data['component']['num_array_categ'] = 2;
    //   $this->load->view('index', $this->data);
    // }
    // function gas() {
    //   $this->data['component']['title'] = 'Gas Installation';
    //   $this->data['component']['num_array_categ'] = 3;
    //   $this->load->view('index', $this->data);
    // }
  }

 ?>
