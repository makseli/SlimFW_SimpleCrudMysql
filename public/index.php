<?php

require '../vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function () {
    return 'ui ye hosgeldiniz';// $res->withStatus(400)->write('Bad Request');
});

$app->get('/test', function(){
    return '{status:"True"}';
});

$app->run();
