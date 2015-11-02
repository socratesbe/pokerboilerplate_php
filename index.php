<?php

use Symfony\Component\HttpFoundation\JsonResponse;

require_once __DIR__ . '/vendor/autoload.php'; 

$app = new Silex\Application(); 

$app->get('/', function() {
    return new JsonResponse('success!');
});

$app->run(); 
