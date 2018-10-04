<?php 
namespace Controllers;

 use Jenssegers\Blade\Blade;
	class LoginController extends \App\Base\Controller
	{
		private $userModel;
 		public function __construct()
        {
            $this->userModel = $this->model("ModelUser");
           
        }
		public function check(){
			if(isset($_SESSION['name'])){
				header("Location:http://localhost/TT%20PHP/MVC_POST/index.php?url=home/view");
			}
			else{		
				if(isset($_POST['user_login'])){
					$_SESSION['name'] = $_POST['name'];
	    			$_SESSION['password'] = $_POST['password'];

					if($this->userModel->login($_SESSION['name'],$_SESSION['password']))
					{	
						if(isset($_SESSION['name'])){
						 	header("Location:http://localhost/TT%20PHP/MVC_POST/index.php?url=home/view");
						}

					}
				}
					else{
						$blade = new Blade('Views', 'Cache');

	            		echo $blade->make('user_login', ['data' => '']);
					}
				
			}
		}
	}
?>