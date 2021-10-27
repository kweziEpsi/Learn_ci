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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'site';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['site/about-info'] = 'site/about';
$route['site/contact-us'] = 'site/contact_info';
$route['site/products/(:any)'] = 'site/product/$1';
$route['site/services/(:num)/(:any)'] = 'site/service/$1/$2';
$route['site/variables'] = 'site/pass_var';
$route['site/register'] = 'site/register';

$route['Item'] = 'item';
$route['item/list'] = 'item/index';
$route['item/list/(:any)'] = 'item/index/$1';
$route['item/create'] = 'item/create';
$route['item/save']['post'] = 'item/store';
$route['item/read-more/(:num)'] = 'item/show/$1';
$route['item/edit/(:num)'] = 'item/edit/$1';
$route['item/update/(:num)']['put'] = 'item/update/$1';
$route['item/delete/(:num)']['delete'] = 'item/delete/$1';

$route['User'] = 'user';
$route['user/signin'] = 'user/signin';
$route['user/signup'] = 'user/signup';
$route['user/register'] ['post'] = 'user/register';
$route['user/login'] ['post'] = 'user/login';

$route['LearnershipType'] = 'learnershiptype';
$route['learnershiptype/list'] = 'learnershiptype/index';
$route['learnershiptype/list/(:any)'] = 'learnershiptype/index/$1';
$route['learnershiptype/create'] = 'learnershiptype/create';
$route['learnershiptype/save']['post'] = 'learnershiptype/store';
$route['learnershiptype/read-more/(:num)'] = 'learnershiptype/show/$1';
$route['learnershiptype/edit/(:num)'] = 'learnershiptype/edit/$1';
$route['learnershiptype/update/(:num)']['put'] = 'learnershiptype/update/$1';
$route['learnershiptype/delete/(:num)']['delete'] = 'learnershiptype/delete/$1';

/*$route['LearnershipSubType'] = 'learnership-sub-type';
$route['learnership-sub-type/list'] = 'learnership-sub-type/index';
$route['learnership-sub-type/create'] = 'learnership-sub-type/create';
$route['learnership-sub-type/save']['post'] = 'learnership-sub-type/store';
$route['learnership-sub-type/read-more/(:num)'] = 'learnership-sub-type/show/$1';
$route['learnership-sub-type/edit/(:num)'] = 'learnership-sub-type/edit/$1';
$route['learnership-sub-type/update/(:num)']['put'] = 'learnership-sub-type/update/$1';
$route['learnership-sub-type/delete/(:num)']['delete'] = 'learnership-sub-type/delete/$1';

$route['UnitStandard'] = 'unit-standard';
$route['unit-standard/list'] = 'unit-standard/index';
$route['unit-standard/create'] = 'unit-standard/create';
$route['unit-standard/save']['post'] = 'unit-standard/store';
$route['unit-standard/read-more/(:num)'] = 'unit-standard/show/$1';
$route['unit-standard/edit/(:num)'] = 'unit-standard/edit/$1';
$route['unit-standard/update/(:num)']['put'] = 'unit-standard/update/$1';
$route['unit-standard/delete/(:num)']['delete'] = 'unit-standard/delete/$1';

$route['Module'] = 'module';
$route['module/list'] = 'module/index';
$route['module/create'] = 'module/create';
$route['module/save']['post'] = 'module/store';
$route['module/read-more/(:num)'] = 'module/show/$1';
$route['module/edit/(:num)'] = 'module/edit/$1';
$route['module/update/(:num)']['put'] = 'module/update/$1';
$route['module/delete/(:num)']['delete'] = 'module/delete/$1';


$route['item/get_id'] = 'item/get_id';
$route['item/get_rec']['post'] = 'item/get_rec';
$route['item/edit_t'] = 'item/edit_t';
$route['item/update_t']['put'] = 'item/update_t';
*/