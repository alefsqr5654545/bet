<?php
!defined('ENVIRONMENT') ? define('ENVIRONMENT', 'develope') : '';
!defined('DS') ? define('DS', str_replace(array('/', '\\'), array('/', '/'), DIRECTORY_SEPARATOR)) : '';
!defined('FCPATH') ? define('FCPATH', dirname(__FILE__) . DS) : '';
!defined('APPPATH') ? define('APPPATH', FCPATH . 'TkStarApplication' . DS) : '';
!defined('VIEWPATH') ? define('VIEWPATH', APPPATH . 'views' . DS) : '';
!defined('MAIL_SENDER_NAME') ? define('MAIL_SENDER_NAME', 'richbet') : '';
!defined('MAIL_SENDER_SERVER') ? define('MAIL_SENDER_SERVER', '94.130.44.250') : '';
!defined('MAIL_SENDER_USERNAME') ? define('MAIL_SENDER_USERNAME', 'info@richbet.xyz') : '';
!defined('MAIL_SENDER_PASSWORD') ? define('MAIL_SENDER_PASSWORD', '5xJcQFvl') : '';
!defined('VENDOR_DIR') ? define('VENDOR_DIR', FCPATH . 'TkStarVendor' . DS) : '';
!defined('BASE_URL') ? define('BASE_URL', (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on' ? 'https' : 'http') . '://' . $_SERVER['SERVER_NAME']) : '';
!defined('SELF') ? define('SELF' , pathinfo(__FILE__, PATHINFO_BASENAME)) : '';
!defined('BASEPATH') ? define('BASEPATH' , str_replace(array('/', '\\'), array('/', '/'), VENDOR_DIR . 'codeigniter/framework/system') . DS) : '';
!defined('SYSDIR') ? define('SYSDIR', 'system') : '';
!defined('SMS_USERNAME') ? define('SMS_USERNAME', 'kaperco777') : '';
!defined('SMS_PASSWORD') ? define('SMS_PASSWORD', '0000') : '';
!defined('SMS_DEDICATED_NUMBER') ? define('SMS_DEDICATED_NUMBER', '10004552684533') : '';
!defined('API_KEY') ? define('API_KEY', 'kSLGrxDaSXfeMh5sb1xSDviFqRNXXtYjjZrL2fpLd39dHf2ibewuzCbqsJSM') : '';
!defined('TIMEZONE') ? define('TIMEZONE', 'UTC') : '';
!defined('ScriptChrst') ? define('ScriptChrst', 'utf-8') : '';
empty(session_id()) ? session_start() : '';
function_exists('ini_set') ? ini_set('memory_limit', '1024M') : '';
function_exists('ini_set') ? ini_set('display_errors', 'Off') : '';
function_exists('ini_set') ? ini_set('max_execution_time', '0') : '';
function_exists('error_reporting') ? error_reporting(false) : '';
function_exists('date_default_timezone_set') ? date_default_timezone_set(TIMEZONE) : '';
header('Content-type: text/html; charset=utf8');
?>