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
$route['404_override'] = 'welcome/error404';
$route['translate_uri_dashes'] = FALSE;
// $route['index'] ='welcome/index';

//Blog routers from database
require_once( BASEPATH .'database/DB.php');
$db =& DB();
$query = $db->get( 'blogdata' );
$slugs_data = $query->result();
// $slugs_data= $this->db->get("blogdata")->result_array();
foreach($slugs_data as $slugs_data){
    $slug_with_hyphens = str_replace(' ', '-', $slugs_data->slugs);
    $route[$slug_with_hyphens]="welcome/readmore/blogview/".$slugs_data->id;
}

//Header Routers
// Trading
$route['account-type']="welcome/account_type";
$route['blog']="welcome/blog";
$route['deposit-withdrawal']="welcome/deposit_withdrawal";
$route['safety-of-funds']="welcome/safety_of_funds";
$route['forex']="welcome/forex";
$route['commodities']="welcome/commodities";
$route['indices']="welcome/indices";
$route['stocks']="welcome/stocks";
$route['cryptocurrencies']="welcome/cryptocurrencies";
$route['trading-conditions']="welcome/trading_conditions";
$route['mt5']="welcome/mt5";
$route['ctrader']="welcome/ctrader";
$route['copytrading']="welcome/copytrading";
$route['revolutionize-your-trading-experience'] = "welcome/revolutionize_your_trading_experience";

// Tools
$route['trading-calculator']="welcome/trading_calculator";
$route['trading-signals']="welcome/trading_signals";
$route['autochartist']="welcome/autochartist";
$route['videos']="welcome/videos";
$route['webinars']="welcome/webinars";
$route['seminars']="welcome/seminars";
$route['nxgmarketsaffiliates']="welcome/nxgmarketsaffiliates";
$route['nxgmarkets-ibs']="welcome/nxgmarkets_ibs";
$route['advantages']="welcome/advantages";
$route['marketing-tools']="welcome/marketing_tools";
$route['commission-structure']="welcome/commission_structure";
$route['apple-month-ib-contest-2']="welcome/refer_and_earn";
$route['annual-interest']="welcome/refer_and_shop";
$route['about']="welcome/about";
$route['careers']="welcome/careers";
$route['contact-us']="welcome/contact_us";
$route['why-trade-forex']="welcome/why_trade_forex";
$route['regulations-licenses']="welcome/regulations_licenses";
$route['blog-detail']="welcome/blog_detail";
$route['career-details']="welcome/careerdetails";
$route['privacy-policy']="welcome/privacy_policy";
$route['aml-policy']="welcome/aml_policy";
$route['refund-policy']="welcome/refund_policy";
$route['kyc-policy']="welcome/kyc_policy";
$route['risk-disclosure']="welcome/risk_disclosure";
$route['']="welcome/";
$route['']="welcome/";
$route['festival-fair-ib-contest']="welcome/festival_fair_ib_contest";
$route['christmas-ib-contest'] = "welcome/christmas_ib_contest";
$route['black-friday'] = "welcome/black_friday";

// $route['admin/report/uploadreport/(:any)']="admin/report/uploadreport/$1";

// // Admin Routes
$route['admin']="admin/index";
$route['admin/blog/view']="admin/blog/view";
// $route['admin/paneluser/view']="admin/paneluser/view";