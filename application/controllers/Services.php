<?php
  /**
   *
   */
  class Services extends Frontend_Controller
  {
    function __construct() {
      parent::__construct();

      // duplikasi kategori
      $category = array();
      $categories = $this->catservices_model->get_by(array('catservices_pub' => '99'));

      foreach ($categories as $cat) {
        $services = $this->services_model->get_by(array('catservices_id' => $cat->catservices_id, 'services_pub' => '99'));
        $serpis = array();
        foreach ($services as $service) {
          $serpis[] = (object)array(
            'services_name' => $service->services_name,
            'services_link' => $service->services_link,
            'services_desc' => $service->services_desc
          );
        }

        $category[] = (object)array(
          'catservice_name' => $cat->catservices_name,
          'catservice_desc' => $cat->catservices_desc,
          'catservice_icon' => $cat->catservices_icon,
          'services' => $serpis
          );

        unset($serpis);
      }

      $this->data['category'] = $category;
      // end duplikasi kategori

      $this->data['content'] = 'pages/services';
      $this->data['top'] = 'services';
      $this->data['header']['services']['sampul'] = str_replace('/', '-', $this->uri->uri_string()) . '.png';
      $this->data['header']['services']['title'][0] = strtoupper('services');
      $this->data['header']['services']['title'][1] = strtoupper($this->uri->segment(2));
      $this->data['bottom'] = 'services';

    }
    function index() {
      $this->data['component']['num_array_categ'] = 0;
      $this->data['component']['title'] = 'Our Services';
      $this->load->view('index', $this->data);
    }
    function mechanical() {
      $this->data['component']['title'] = 'Mechanical';
      $this->data['component']['num_array_categ'] = 1;
      $this->load->view('index', $this->data);
    }
    function electrical() {
      $this->data['component']['title'] = 'Electrical';
      $this->data['component']['num_array_categ'] = 2;
      $this->load->view('index', $this->data);
    }
    function gas() {
      $this->data['component']['title'] = 'Gas Installation';
      $this->data['component']['num_array_categ'] = 3;
      $this->load->view('index', $this->data);
    }
  }

 ?>
