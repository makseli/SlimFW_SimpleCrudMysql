<?php

require '../vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function () {
    	
	$htmlSource = file_get_contents('easy_ui.html');
	
	return $htmlSource;
});

$app->post('/getUserList', function(){
return '{"total":"8","rows":[{"id":"102317","firstname":"123","lastname":"dfdf","phone":"123456789","email":"sobaka@sobaka.com"},{"id":"102318","firstname":"123123","lastname":"5587","phone":"123123123","email":"123@QQ.net"},{"id":"102319","firstname":"q","lastname":"q","phone":"q","email":"q@s.com"},{"id":"102320","firstname":"dfsdf","lastname":"dsfsfdsf","phone":"32323","email":"dfd@dsfds.sd"},{"id":"102326","firstname":"omur","lastname":"ozlu","phone":"02125522211","email":"omur.ozlu@hotmail.com"},{"id":"102327","firstname":"fsd","lastname":"dfvs","phone":"dsfv","email":"dav@sdfas.iy"},{"id":"102328","firstname":"ahmet","lastname":"mehmet","phone":"21222112","email":"test@test.com"},{"id":"102329","firstname":"testing","lastname":"testing","phone":"1","email":"2@test.com"}]}';
});

$app->get('/test', function(){
    return '{status:"True"}';
});

$app->run();
