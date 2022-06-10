<?php

error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
ini_set("display_errors",1);

require_once '../vendor/autoload.php';

use App\helpers\EasyPDO;
use App\helpers\Func;
use App\Middlewares\AuthAdmin;
use Buki\Router\Router;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

 $router = new Router(APP_ROTAS);
 
 $router->get('/', 'Main@index');



 #Caso haja paginas não encontradas
 $router->notFound(function(Request $request, Response $response) {
      $response->setContent('<center><h1>Página não encontrada</h1></center>');
      return $response;
 });

 $router->run();
 