<?php

/**
 *
 */
class Lang extends Frontend_Controller
{
  public function choose($param)
  {
    if ($param == NULL)
      redirect(site_url());

    (!empty($_GET['link'])) ? $link = hash_link_decode($_GET['link']) : $link = site_url();

    switch ($param) {
      case 'en':
        $array_sess['lang'] = 'english';
        break;

      case 'in':
        $array_sess['lang'] = 'indonesia';
        break;

      default:
        redirect(site_url());
        break;
    }
    $this->session->set_userdata($array_sess);
    redirect($link);
  }
}
