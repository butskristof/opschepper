<?php

require 'vendor/autoload.php';

// Create new Plates instance
$templates = new League\Plates\Engine('views/');

// Get uri and break it to extract possible querystring
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// routing
// first item of array contains file without querystring
switch ($request_uri[0]) {
	// Home page
	case '/':
		// overload -> no break
	case '/home':
		echo $templates->render('home');
		break;
	case '/home2':
		echo $templates->render('home2');
		break;
	default:
		// TODO improve 404
		header('HTTP/1.0 404 Not Found');
		echo $templates->render('404');
		break;
}

?>
