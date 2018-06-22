<?php
$this->load->view('component/top', isset($top) ? $top : 0);
// sampul_services untuk sampul dinamis di page services
$this->load->view('component/header', isset($header) ? $header : 0);
$this->load->view($content, isset($component) ? $component : 0);
$this->load->view('component/footer');
$this->load->view('component/bottom', isset($bottom) ? $bottom : 0);
