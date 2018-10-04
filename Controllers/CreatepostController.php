<?php 
namespace Controllers;

 use Jenssegers\Blade\Blade;
	class CreatepostController extends \App\Base\Controller
	{
		private $postModel;
		private $userModel;

        public function __construct()
        {
            $this->postModel = $this->model("ModelPost");
            $this->userModel = $this->model("ModelUser");
            // print_r($this->postModel->getPost());
        }

 		function create(){
        	
        	if(isset($_POST['save']))
	        	{
	        		$id_user = $this->userModel->getUser($_SESSION['name']);
	        		$title = $_POST['title'];
	        		$content = $_POST['content'];
	        		$date = date('Y-m-d H:i:s');
	        	$arr = [
	        		'id_user'=>$id_user,
	        		'title' => $title,
	        		'content'=>$content,
	        		'date'=>$date,
	        	];
	        	$this->postModel->save($arr);
	        	header("Location:http://localhost/TT%20PHP/MVC_POST/index.php?url=home/view");
	        }
	        else{
	        	$blade = new Blade('Views', 'Cache');

            echo $blade->make('createpost', ['data' => '']);
	        }
	    }
    }