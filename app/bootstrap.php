<?php

error_reporting(9999999);
ini_set('display_errors', 'On');

require __DIR__ . '/../vendor/autoload.php';

$settings = require __DIR__ . '/settings.php';

$app = new \Slim\App($settings);

require __DIR__ . '/dependencies.php';

require __DIR__ . '/middleware.php';

require __DIR__ . '/routes.php';


