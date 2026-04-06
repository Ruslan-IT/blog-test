<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

use App\Core\Router;


require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router();



$router->get('/', 'HomeController@index');

$router->get('/category', 'BlogController@redirectToHome');
$router->get('/category/{slug}', 'BlogController@category');
$router->get('/ajax/category-posts', 'HomeController@getAllPostsByCategory');

$router->get('/post/{slug}', 'BlogController@show');


$router->dispatch($_SERVER['REQUEST_URI']);