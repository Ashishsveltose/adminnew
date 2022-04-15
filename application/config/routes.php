<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
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
$route['default_controller'] = 'welcome';

$route['404_override'] = '';
$route['translate_uri_dashes'] = True;

$route['doctor'] = 'Welcome/doctor';
$route['process'] = 'Welcome/process';
$route['welcome'] = 'Welcome/welcome';
$route['blog'] = 'Welcome/blog';
$route['banner'] = 'Welcome/banner';
$route['addbanner'] = 'Welcome/addbanner';
$route['unit'] = 'Welcome/unit';
$route['unitlist'] = 'Welcome/unitlist';
$route['login'] = 'Welcome/login';
$route['tax'] = 'Welcome/tax';
$route['addtax'] = 'Welcome/addtax';
$route['contactus'] = 'Welcome/contactus';
$route['customerlist'] = 'Welcome/customerlist';
$route['customers'] = 'Welcome/customers';
$route['transation'] = 'Welcome/transation';
$route['transationlist'] = 'Welcome/transationlist';
$route['login_view'] = 'Welcome/login_view';
$route['clinician'] = 'Welcome/clinician';
$route['clinicianlist'] = 'Welcome/clinicianlist';
$route['notification'] = 'Welcome/notification';
$route['notificationlist'] = 'Welcome/notificationlist';
$route['category'] = 'Welcome/category';
$route['categorylist'] = 'Welcome/categorylist';
$route['clinicdetails'] = 'Welcome/clinicdetails';
$route['cliniclist'] = 'Welcome/cliniclist';
$route['wallethistory'] = 'Welcome/wallethistory';
$route['request'] = 'Welcome/request';
$route['earning'] = 'Welcome/earning';
$route['store'] = 'Welcome/store';











