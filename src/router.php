<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app->get('/html/{name}', function(Request $request, Response $response, $args){ 
    $this->logger->info("Slim-App / router");
    return $this->renderer->render($response, 'index.phtml', $args);
  });

  $app->get('/hello[/[{name}]]', function(Request $request, Response $response){ 
      $nome = $request->getAttribute('name') ?? 'word';
      $response->getBody()->write("Hello, {$nome}");
      return $response;
    });
  