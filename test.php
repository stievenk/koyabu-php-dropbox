<?php
require 'vendor/autoload.php';

use Koyabu\Dropbox\Init as DBX;

$config['dropbox']['app_key'] = '';
$config['dropbox']['app_secret'] = '';
$config['dropbox']['refresh_token'] = '';
$config['dropbox']['access_token'] = '';
$config['dropbox']['home_dir'] = '/';

$DBX = new DBX();

echo $DBX->getAccessToken();
?>