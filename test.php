<?php
require 'vendor/autoload.php';

use Koyabu\Dropbox\Init as DBX;

$config['dropbox']['app_key'] = ''; //require
$config['dropbox']['app_secret'] = ''; //require

$DBX = new DBX();
$DBX->loadConfig();
$code = $_REQUEST['code'] ? $_REQUEST['code'] : $argv[1];
echo $DBX->getAccessToken($code);
?>