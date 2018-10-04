<?php
namespace Controllers;
 use Jenssegers\Blade\Blade;
	class HomeController extends \App\Base\Controller
	{
		
		private $postModel;
        public function __construct()
        {
            $this->postModel = $this->model("ModelPost");
            // print_r($this->postModel->getPost());
        }
 		
        public function view(){
        
        	$data = $this->postModel->getPost();
            $blade = new Blade('Views', 'Cache');

            echo $blade->make('home', ['data' => $data]);
        }
    }
