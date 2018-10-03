<?php 

 require_once("../app/config.php");
 //require_once("../app/base/model.php");

//namespace MVC\Model;

//use \DB;
 //use Connect;
class User  {
 	
 // 	public function insertUser(){
	// 		return parent::themuser('user');

	// 	}
	// }
 	function themuser($name,$sdt,$password,$email,$linkfb) {
		$arr = [
		      
		         'name'=>$name,
		         'sdt'=> $sdt,
		         'password'=>$password,
		         'email'=>$email,
		         'linkfb'=>$linkfb,
		         //'img'=>$img,
	];
	
	
	   try{


                $con = new PDO("mysql:host=localhost;dbname=mvc_post","root" ,"");
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $con->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

                $regi = $con->prepare("INSERT INTO user(name,sdt,password,email,linkfb)
                        VALUES(:name,:sdt,:password, :email, :linkfb)");
                $regi->execute($arr);
                    
            }catch(Exception $e){
                echo $e->getMessage();
            }
	   
	}
}
	
	// function getUser($name,$password){
	// 	try{
 //                $con = new PDO("mysql:host=localhost;dbname=mvc_post","root" ,"");
 //                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //                $con->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

 //                $login = $con->prepare("SELECT name,password FROM user");
 //                $login->execute();
 //                $count = $login->fetchColumn();
               
                    
 //            }catch(Exception $e){
 //                echo $e->getMessage();
 //            }
	// }


?>