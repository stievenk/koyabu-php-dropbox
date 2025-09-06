# koyabu-php-dropbox

[![Latest Stable Version](http://poser.pugx.org/koyabu/dropbox/v)](https://packagist.org/packages/koyabu/dropbox) [![Total Downloads](http://poser.pugx.org/koyabu/dropbox/downloads)](https://packagist.org/packages/koyabu/dropbox) [![Latest Unstable Version](http://poser.pugx.org/koyabu/dropbox/v/unstable)](https://packagist.org/packages/koyabu/dropbox) [![License](http://poser.pugx.org/koyabu/dropbox/license)](https://packagist.org/packages/koyabu/dropbox) [![PHP Version Require](http://poser.pugx.org/koyabu/dropbox/require/php)](https://packagist.org/packages/koyabu/dropbox)
<br>

PHP Library Dropbox REST API<br>
```
composer require koyabu/dropbox
```

## How to use
```
<?php
require 'vendor/autoload.php';

use Koyabu\Dropbox\Init as DBX;
$config['dropbox']['app_key'] = 'your-app-key';
$config['dropbox']['app_secret'] = 'your-app-secret';
$config['dropbox']['refresh_token'] = 'refresh-token';
$config['dropbox']['access_token'] = 'access-token';
$config['dropbox']['home_dir'] = '/';

// Initialize Dropbox
$DBX = new DBX();
$code = $_REQUEST['code'] ? $_REQUEST['code'] : $argv[1];

// to get access-token and refresh-token
echo $DBX->getAccessToken($code);
?>
```