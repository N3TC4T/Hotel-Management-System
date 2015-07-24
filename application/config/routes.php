<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = 'admin_home';
$route['404_override'] = '';

/*admin*/
$route['admin'] = 'user/index';
$route['admin/signup'] = 'user/signup';
$route['admin/create_member'] = 'user/create_member';
$route['admin/login'] = 'user/index';
$route['admin/logout'] = 'user/logout';
$route['admin/login/validate_credentials'] = 'user/validate_credentials';

$route['admin/dashboard'] = 'admin_dashboard/index';


$route['admin/customer'] = 'admin_customer/index';
$route['signup'] = 'member/signup';
$route['admin/customer/search'] = 'admin_customer/search';
$route['admin/customer/verify'] = 'admin_customer/verify';
$route['admin/customer/add'] = 'admin_customer/add';
$route['admin/customer/update'] = 'admin_customer/update';
$route['admin/customer/update/(:any)'] = 'admin_customer/update/$1';
$route['admin/customer/delete/(:any)'] = 'admin_customer/delete/$1';
$route['admin/customer/(:any)'] = 'admin_customer/index/$1'; //$1 = page number

$route['admin/checkin'] = 'admin_checkin/index';
$route['admin/checkin/add'] = 'admin_checkin/add';
$route['admin/checkin/update'] = 'admin_checkin/update';
$route['admin/checkin/update/(:any)'] = 'admin_checkin/update/$1';
$route['admin/checkin/delete/(:any)'] = 'admin_checkin/delete/$1';
$route['admin/checkin/(:any)'] = 'admin_checkin/index/$1'; //$1 = page number

$route['admin/reservation'] = 'admin_reservation/index';
$route['admin/reservation/confirm'] = 'admin_reservation/confirm';
$route['admin/reservation/add'] = 'admin_reservation/add';
$route['admin/reservation/update'] = 'admin_reservation/update';
$route['admin/reservation/update/(:any)'] = 'admin_reservation/update/$1';
$route['admin/reservation/delete/(:any)'] = 'admin_reservation/delete/$1';
$route['admin/reservation/(:any)'] = 'admin_reservation/index/$1'; //$1 = page number

$route['admin/checkout'] = 'admin_checkout/index';
$route['admin/checkout/out/(:any)'] = 'admin_checkout/out';
$route['admin/checkout/(:any)'] = 'admin_checkout/index/$1'; //$1 = page number

$route['admin/room'] = 'admin_room/index';
$route['admin/room/get_by_id'] = 'admin_room/get_by_roomtype';
$route['admin/room/add'] = 'admin_room/add';
$route['admin/room/update'] = 'admin_room/update';
$route['admin/room/update/(:any)'] = 'admin_room/update/$1';
$route['admin/room/delete/(:any)'] = 'admin_room/delete/$1';
$route['admin/room/(:any)'] = 'admin_room/index/$1'; //$1 = page number

$route['admin/roomtype'] = 'admin_roomtype/index';
$route['admin/roomtype/add'] = 'admin_roomtype/add';
$route['admin/roomtype/update'] = 'admin_roomtype/update';
$route['admin/roomtype/update/(:any)'] = 'admin_roomtype/update/$1';
$route['admin/roomtype/delete/(:any)'] = 'admin_roomtype/delete/$1';
$route['admin/roomtype/(:any)'] = 'admin_roomtype/index/$1'; //$1 = page number

$route['admin/report'] = 'admin_report/index';
$route['admin/report/customer'] = 'admin_report/customer_report';
$route['admin/report/checkin'] = 'admin_report/checkin_report';
$route['admin/report/checkout'] = 'admin_report/checkout_report';
$route['admin/report/today-checkin'] = 'admin_report/today_checkin';
$route['admin/report/last-week-checkin'] = 'admin_report/last_week_checkin';
$route['admin/report/today-checkout'] = 'admin_report/today_checkout';
$route['admin/report/last-week-checkout'] = 'admin_report/last_week_checkout';
$route['admin/report/room'] = 'admin_report/room_report';
$route['admin/report/free-room'] = 'admin_report/free_room';
$route['admin/report/Busy-room'] = 'admin_report/busy_room';

$route['member/dashboard'] = 'member_dashboard/index';
$route['member/profile'] = 'member_dashboard/update_profile';
$route['member/search'] = 'member_dashboard/search_rooms';
$route['member/reservation/add'] = 'member_dashboard/add_reserve';
$route['member/reservation/cancel/(:any)'] = 'member_dashboard/cancel_reserve/$1';




/* End of file routes.php */
/* Location: ./application/config/routes.php */
