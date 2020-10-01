<?php
require_once('vendor/autoload.php');

require_once('config/config.php');
require_once('controllers/App.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
//$log->pushHandler(new StreamHandler('log/my.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('log/my.log', LOGGER));

/*
function req(){
   echo 1;
   req();
}

req();
*/

$app = new App();
$app->run();

// add records to the log
$log->warning('Foo');
$log->error('Bar');
$log->debug(memory_get_usage());
$log->debug(memory_get_peak_usage());


