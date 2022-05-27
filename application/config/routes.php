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
// .........................admin panel........................
$route['default_controller'] = 'welcome';
$route['index'] = 'welcome/index';
$route['user'] = 'welcome/user';
$route['view_user'] = 'welcome/view_user';
$route['insert_user'] = 'welcome/insert_user';
$route['vendor_reseller'] = 'welcome/vendor_reseller';
$route['insert_vendor_reseller'] = 'welcome/insert_vendor_reseller';
$route['view_vendor_reseller'] = 'welcome/view_vendor_reseller';
$route['coupon'] = 'welcome/coupon';
$route['insert_coupon'] = 'welcome/insert_coupon';
$route['view_coupon'] = 'welcome/view_coupon';
$route['invoice'] = 'welcome/invoice';
$route['order'] = 'welcome/order';
$route['offer'] = 'welcome/offer';
$route['insert_offer'] = 'welcome/insert_offer';
$route['view_offer'] = 'welcome/view_offer';
$route['category'] = 'welcome/category';
$route['view_sub_category'] = 'welcome/view_sub_category';
$route['insert_category'] = 'welcome/insert_category';
$route['login'] = 'welcome/login';
$route['slider'] = 'welcome/slider';
$route['adminlogin'] = 'welcome/login';

// .....................vendor panel....................
$route['default_controller'] = 'Vendor/login';
$route['vendor_login'] = 'Vendor/login';
$route['vendor_index'] = 'Vendor/index';
$route['vendor_order'] = 'Vendor/order';
$route['vendor_invoice'] = 'Vendor/invoice';
$route['vendor_user'] = 'Vendor/user';
$route['vendor_setting'] = 'Vendor/setting';
$route['vendor_add_product'] = 'Vendor/add_product';
$route['vendor_category_view'] = 'Vendor/category_view';
$route['vendor_sub_category'] = 'Vendor/sub_category';
$route['vendor_list_product'] = 'Vendor/list_product';
$route['vendor_return'] = 'Vendor/return';
$route['vendor_report'] = 'Vendor/report';
$route['vendor_vendorlogin'] = 'Vendor/vendorlogin';
$route['vendor_discount'] = 'Vendor/discount';
$route['vendor_insert_register'] = 'Vendor/insert_register';
$route['sessionex'] = 'Session_Controller';



//.......................frontend.............................
$route['default_controller'] = 'Customer/login';
$route['customer_index'] = 'Customer/index';
$route['vendor_customerlogin'] = 'Customer/customerlogin';
$route['customer_product'] = 'Customer/product';
$route['customer_offer'] = 'Customer/offer';
$route['customer_discount'] = 'Customer/discount';
$route['customer_order'] = 'Customer/order';
$route['category/(:any)'] = 'Customer/product/$1';
$route['sub_category/(:any)'] = 'Customer/sub_product/$1';
$route['customer_product_view/(:any)'] = 'Customer/product_view/$1';
$route['customer_about_us'] = 'Customer/about_us';
$route['customer_cart'] = 'Customer/cart';
$route['customer_feedback'] = 'Customer/feedback';
$route['customer_contact_us'] = 'Customer/contact_us';
$route['customer_policy'] = 'Customer/policy';
$route['customer_terms'] = 'Customer/terms';
$route['customer_checkout'] = 'Customer/checkout';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
