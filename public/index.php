<?php

require '../vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function () {
    	
	$htmlSource = file_get_contents('easy_ui.html');
	
	return $htmlSource;
});

$jsonUsersList = '{"total":"8","rows":[{"id":"1","firstname":"123","lastname":"dfdf","phone":"123456789","email":"sobaka@sobaka.com"},{"id":"2","firstname":"123123","lastname":"5587","phone":"123123123","email":"123@QQ.net"},{"id":"3","firstname":"q","lastname":"q","phone":"q","email":"q@s.com"},{"id":"4","firstname":"dfsdf","lastname":"dsfsfdsf","phone":"32323","email":"dfd@dsfds.sd"},{"id":"5","firstname":"omur","lastname":"ozlu","phone":"02125522211","email":"omur.ozlu@hotmail.com"},{"id":"6","firstname":"fsd","lastname":"dfvs","phone":"dsfv","email":"dav@sdfas.iy"},{"id":"7","firstname":"ahmet","lastname":"mehmet","phone":"21222112","email":"test@test.com"},{"id":"8","firstname":"testing","lastname":"testing","phone":"1","email":"2@test.com"}]}';

$app->any('/users/list', function() use($jsonUsersList){
	
	return $jsonUsersList;
});

$app->any('/users/list', function() use($jsonUsersList){
	
	return $jsonUsersList;
});

$app->group('/users/{id:[0-9]+}', function () use ($jsonUsersList) {

    $jsonUserListArr = json_decode($jsonUsersList);

    $this->map(['GET', 'DELETE', 'PATCH', 'PUT'], '', function ($request, $response, $args) {
    
    	if(true)
    		return pp($jsonUserListArr->rows[$args['id']]);
    	else
        	return json_encode($jsonUserListArr->rows[$args['id']]);
        
    })->setName('detail');
    
/*    $this->get('/reset-password', function ($request, $response, $args) {
        // Route for /users/{id:[0-9]+}/reset-password
        // Reset the password for user identified by $args['id']
    })->setName('user-password-reset');*/
});


$app->get('/test', function(){
    return '{status:true}';
});

$app->run();





