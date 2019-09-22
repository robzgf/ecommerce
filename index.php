<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
 

$app = new Slim();

$app->config('debug', true);

require_once("functions.php");

require_once("site.php");

require_once("login.php");

require_once("cart.php");

require_once("payment.php");

require_once("admin.php");

require_once("admin-users.php");

require_once("admin-orders.php");

require_once("admin-categories.php");

require_once("admin-products.php");

$app->run();

 ?>