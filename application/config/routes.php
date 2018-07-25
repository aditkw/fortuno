<!-- DROP TABLE fortu_about; DROP TABLE fortu_banner; DROP TABLE fortu_catporto; DROP TABLE fortu_catservices; DROP TABLE fortu_contact; DROP TABLE fortu_image; DROP TABLE fortu_portofolio; DROP TABLE fortu_seo; DROP TABLE fortu_services; DROP TABLE fortu_site; DROP TABLE fortu_text; DROP TABLE fortu_user; -->
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

// NEW FRONT END
$route['services']                            = 'services';
$route['services/(:any)']                     = 'services/category/$1';
// $route['services/mechanical']                 = 'services/mechanical';
// $route['services/electrical']                 = 'services/electrical';
// $route['services/gas-installation']           = 'services/gas';
$route['portfolio']                           = 'portfolio';
$route['portfolio/(:any)']                    = 'portfolio/workArea/$1';
$route['search(\/(?:services|portfolio)\/[0-9]+/.+)']  = 'search';
