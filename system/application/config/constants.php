<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/*
|--------------------------------------------------------------------------
| Microsite Variables
|--------------------------------------------------------------------------
|
| Meta and marketing data for usage within controllers and views
|
*/

$meta_data['promotion_name'] = 'Winter Escapes';
$meta_data['workorder'] = 'TMB4096';
$meta_data['workorder_full'] = 'tmb4096_winter_escapes';
$meta_data['data_source_name'] = 'winter_escapes';
$meta_data['data_source_extension'] = '.xml';
$meta_data['author_initials'] = 'SL';
$meta_data['asset_prefix'] = '';
$meta_data['headline'] = 'Winter Escapes!';
$meta_data['subheadline'] = 'Plan Now to Getaway!';
$meta_data['terms'] = 'Tours operated by Travel Impressions, Ltd. Advertised rates are per person and based on double occupancy. All airline taxes and fees including government imposed taxes and fee are included including September 11th Security Fee. Prices are based on lowest airfare at time of publication, and can fluctuate daily. Airline baggage fees apply and will be charged by the airline. Blackout, weekend, holiday and peak season surcharges apply. All public charter flights sold through Travel Impressions on Aeromexico PC#13-108 are operated by Atkinson & Mullen Travel II, LLC. All public charter flights sold through Travel Impressions on Frontier Airlines PC#12-095 and Alaska Airlines PC#12-131/PC#13-081 are operated by AVW II, LLC. All public charter flights sold through Travel Impressions on Aeromexico PC#14-102/PC#14-114/PC#14-131, Alaska Airlines PC#14-095, Frontier Airlines PC#14-063/PC#14-064/PC#14-085, Icelandair PC#14-122 and Xtra Airways PC#14-120 are operated by Apple Vacations, LLC. Rates and promotions are accurate at time of publication and are subject to changes, exceptions, cancellation charges and restrictions. All advertised savings are reflected in rates. Rates are subject to change based on currency fluctuations. Not responsible for errors or omissions in the publication of this information. Additional higher priced packages available. Valid for new bookings only.';
$meta_data['publish_date'] = '10.15.2014';

// define constant, serialize array
define ("META_DATA", serialize($meta_data));

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ', 							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 					'ab');
define('FOPEN_READ_WRITE_CREATE', 				'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 			'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');




/* End of file constants.php */
/* Location: ./system/application/config/constants.php */