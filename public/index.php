<?php

include "../vendor/autoload.php";

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;

$app = new Application();

$app['debug'] = true;
$app->register(new Silex\Provider\AssetServiceProvider());

$app->get('/', 'MonProjet\Controller\HomeController::main')
	->bind('home');

$app->get('/customers', 'MonProjet\Controller\CustomersController::main')
	->bind('customers');


$app->get('/flickr', 'MonProjet\Controller\FlickrController::main')
	->bind('flickr');

$app->get('/bonjour', 'MonProjet\Controller\BonjourController::main')->bind('bonjour');

$app->get('/hello', 'MonProjet\Controller\HelloController::main')
	->bind('hello');

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app->run();

// //ceci permet de créer une route

// $app->get("/hello", function(){
// 	return"<h1>Hello page hello	 ! </h1>";
// });
// //ceci permet de créer la route http://localhost/developpement/M26-silex/public/index.php/hello

// $app->get("/customers", function(){
// 	return"<h1>Hello customers ! </h1>";
// });

// $app->get("/flickr", function(){
// 	return"<h1>Hello flickr ! </h1>";
// });

// $app->get("/bonjour", function(){
// 	return"<h1>Hello bonjour ! </h1>";
// });


// $app->run();