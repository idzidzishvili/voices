<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['404_override'] = 'error404';
$route['home/add-application'] = 'home/addApplication';


$route['^(ge|en|ru)/services'] = "home/services";
$route['^(ge|en|ru)/about-us'] = "home/aboutus";
$route['^(ge|en|ru)/blogs']    = "home/blogs";
$route['^(ge|en|ru)/blog/(:any)/(:any)'] = "home/blog/$1/$2";
$route['^(ge|en|ru)/contact']  = "home/contact";
$route['^(ge|en|ru)/sendmail']  = "home/sendmail";
$route['^(ge|en|ru)/send_mail']  = "home/send_mail";

$route['^(ge|en|ru)/login']  = "home/login";
$route['^(ge|en|ru)/logout']  = "home/logout";


// example: '/en/about' -> use controller 'about'
$route['^ge/(.+)$'] = "$1";
$route['^en/(.+)$'] = "$1";
$route['^ru/(.+)$'] = "$1";
// '/en' and '/ar' -> use default controller
$route['^(ge|en|ru)$'] = $route['default_controller'];