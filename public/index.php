<?php
require __DIR__ . '/../vendor/autoload.php';

use Psr\Http\Message\ResponseInterface;
use Slim\Factory\AppFactory;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;

$psr17Factory = new Psr17Factory();
AppFactory::setResponseFactory($psr17Factory);

$creator = new ServerRequestCreator(
    $psr17Factory,
    $psr17Factory,
    $psr17Factory,
    $psr17Factory
);

$request = $creator->fromGlobals();

$app = AppFactory::create();

$app->get('/', function ($request, $response, $args): ResponseInterface { 
    $response->getBody()->write("<h1>Hello, world!</h1>");
    return $response;
});

$app->run();
