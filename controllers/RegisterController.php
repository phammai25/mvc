<?php
require"../model/model_user.php";

//namespace MVC_POST\controllers;
// use MVC\Model\model_user;

class RegisterController 
 {
	function postDangKi()
 	{
 		
			if (isset($_POST['login'])) {
				
				$u = new User();
				$u->themuser($_POST['name'],$_POST['sdt'],md5($_POST['password']),$_POST['email'],$_POST['linkfb']);
				header("Location:user_login.php");
			}
		
		
	}

}

?>