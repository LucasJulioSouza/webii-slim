<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
require __DIR__ . '/../vendor/autoload.php';
use Slim\Factory\AppFactory;



$app = AppFactory::create();

require "../app/routes/message.php";

$app->addBodyParsingMiddleware();

$app->addRoutingMiddleware();

// Executa Aplicação

$app->run();

?>