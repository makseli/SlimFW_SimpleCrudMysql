<?php

//echo 'geldi';

require '../vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function () {
    return 'aaa';// $res->withStatus(400)->write('Bad Request');
});

$app->run();
