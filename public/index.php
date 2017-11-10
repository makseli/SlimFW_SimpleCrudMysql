<?php

require '../vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function () {
    	
	return file_get_contents('easy_ui.html');
	
});

$app->group('/v1', function () use ($app) {

	$app->group('/users', function () use ($app) {

		$app->any('/list', function(){
			$jsonUsersList =  file_get_contents('users.json');
			return $jsonUsersList;
		});
	
		$app->any('/set/{id:[0-9]+}', function ($request, $response, $args) {
			
			if( (int) $args['id'] == 0 )
				return '{status:true,message:"Yeni Kayıt geldi", obejct: ['.json_encode($request->getParsedBody()).']}';
			else
				return '{status:true,message:"Eski ['.$args['id'].' ] Kayıt geldi", obejct: ['.json_encode($request->getParsedBody()).']}';
			
		});
		
		$app->get('/detail/{id:[0-9]+}', function ($request, $response, $args) {
			
			$jsonUsersList =  file_get_contents('users.json');
			
			$jsonUserListArr = json_decode($jsonUsersList);
			
			return json_encode($jsonUserListArr->rows[($args['id'] - 1)]);
			
		});
		
	});
});


$app->get('/test', function(){
    return '{status:true}';
});

$app->run();





