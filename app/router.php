<?php
	require_once('controllers/'.$controller.'.php');
	require_once'base/model.php';
	// die($controller);

	switch ($controller) {
		case 'PostController':
			$controller = new Post();
			break;

		case 'homeCOntroller':
			$controller = new Post();
			break;
		
		case 'RegisterController':
			$controller = new RegisterController();
			break;
	}
	$controller->{$action}();
?>