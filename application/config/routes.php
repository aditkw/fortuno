<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 		= 'welcome';
$route['404_override'] 					= '';
$route['translate_uri_dashes'] 	= FALSE;

/* BACK END */
$route['admin'] 										= 'admin/dashboard';

$route['logout'] 										= 'login/action/logout';

/* FRONT END */
$route['contact-us'] 										    = 'contact';
$route['our-firm'] 										      = 'firm';
$route['our-partners'] 										  = 'partners';
$route['our-clients'] 										  = 'clients';
$route['our-service'] 										  = 'service';
$route['benefits-for-our-client'] 			    = 'benefits';
$route['international-association'] 			  = 'international';
$route['our-service'] 										  = 'service';
$route['our-service/(:any)'] 							  = 'service/detail/$1';
$route['news/(:any)'] 							        = 'news/detail/$1';
$route['event/(:any)'] 							        = 'event/detail/$1';
$route['sitemap\.xml'] 					            = 'seo/sitemap';
