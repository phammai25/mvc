 <?php

 	require_once'app/config.php';
	//require_once'views/login.php';
	require_once"vendor/autoload.php";

 	 if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller = $_GET['controller'];
		$action = $_GET['action'];
	} else {
		$controller = 'PostController';
		$action = 'show';
	}

	require_once'app/router.php';

	

	