<?php
session_start();
ini_set('display_errors', 'On');

require __DIR__ .'/../vendor/autoload.php';
require __DIR__ .'/../config.php';

use PHPExcel;
use PHPExcel_IOFactory;
$app = new \Slim\App([ "settings" => [
    "displayErrorDetails" => true,
    "config" => $config
  ]
]);

$app->add(function ($req, $res, $next) {
  $response = $next($req, $res);
  return $response
          ->withHeader('Access-Control-Allow-Origin', '*')
          ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Iron, Man, Thor, Authorization, BundleId')
          ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});


$container = $app->getContainer();

include __DIR__ .'/../app/_utils/index.php';

include __DIR__ .'/../app/_dbconnections/index.php';

include __DIR__ .'/../app/_smtp/index.php';

include __DIR__ .'/../app/routes/index.php';
