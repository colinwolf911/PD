<?php

require_once __DIR__.'/../vendor/autoload.php';

use app\Router;
use app\controllers\productcontroller;

//01 create the router
$router= new Router();

$router->get('/',[productcontroller::class,'index']);
$router->get('/products',[productcontroller::class,'index']);
$router->get('/products/create',[productcontroller::class,'create']);
$router->post('/products/create',[productcontroller::class,'create']);
$router->get('/products/update',[productcontroller::class,'update']);
$router->post('/products/update',[productcontroller::class,'update']);
$router->get('/products/delete',[productcontroller::class,'delete']);
$router->post('/',[productcontroller::class,'index']);


$router->resolve();





?>