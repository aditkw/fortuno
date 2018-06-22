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
      $this->data['header']['services']['sampul'] = str_replace('/', '-', $this->uri->uri_string()) . '.png';
      $this->data['header']['services']['title'][0] = strtoupper('services');
      $this->data['header']['services']['title'][1] = strtoupper($this->uri->segment(2));
      $this->data['bottom'] = 'services';

      $this->load->model('data_dummy');
      $this->data['component'] = $this->data_dummy->get_data();
      $this->data['component']['uri'] = $this->uri->uri_string();
      // print_r($this->data['component']);
      // print_r($this->data_dummy->get_data());
    }
    function index() {
      $this->data['component']['title'] = 'Our Services';
      $this->load->view('index', $this->data);
    }
    function mechanical() {
      $this->data['component']['title'] = 'Mechanical';
      $this->load->view('index', $this->data);
    }
    function electrical() {
      $this->data['component']['title'] = 'Electrical';
      $this->load->view('index', $this->data);
    }
    function gas() {
      $this->data['component']['title'] = 'Gas Installation';
      $this->load->view('index', $this->data);
    }
  }

 ?>
