<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

$container = new \Illuminate\Container\Container();
$dispatcher = new \Illuminate\Events\Dispatcher($container);
$router = new \Illuminate\Routing\Router($dispatcher, $container);

function view($view, array $data = [])
{
    global $blade;

    return $blade->make($view, $data)->render();
}

function router()
{
    global $router;

    return $router;
}

$router->get('/', \App\Controller\HomeController::class)->name('home');
$router->get('/blog', \App\Controller\BlogController::class)->name('blog');
$router->get('/services', \App\Controller\ServicesController::class)->name('services');
$router->get('/team', \App\Controller\TeamController::class)->name('team');
$router->get('/contact-us', \App\Controller\ContactController::class)->name('contacts');




$request = \Illuminate\Http\Request::createFromGlobals();

$response = $router->dispatch($request);
echo $response->getContent();