<?php
namespace Controllers; 
 use Jenssegers\Blade\Blade;
class RegisterController extends \App\Base\Controller
 {
 	private $userModel;
 	public function __construct()
        {
            $this->userModel = $this->model("ModelUser");
            // print_r($this->postModel->getPost());
        }
	function postDangKi()
 	{

 		if (isset($_POST['register'])) {

			$name = $_POST['name'];
		    $sdt = $_POST['sdt'];
		    $password = md5($_POST['password']);
		    $email = $_POST['email'];
		    $linkfb = $_POST['linkfb'];
		     
		  
			$arr = [
			      
		         'name'=>$name,
		         'sdt'=> $sdt,
		         'password'=>$password,
		         'email'=>$email,
		         'linkfb'=>$linkfb,
		         //'img'=>$img,
		];
			$this->userModel->register($arr);
			header("Location:http://localhost/TT%20PHP/MVC_POST/index.php");
		}	
		else{
 
			$blade = new Blade('Views', 'Cache');

            echo $blade->make('register', ['data' => '']);
		}
	}

}
	

?>