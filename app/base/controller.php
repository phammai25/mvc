<?php 
use Jenssegers\Blade\Blade;
namespace MVC_POST\App\Base;
class Controller{
		//tao mot bien model, gan bien nay la object cua class model
		public $model;
		public function Model(){
			$this->model = new model();
			/*
				$this->model->fetch(sql);
			*/
		}
		public function render($name,$params){
			$blade = new Blade('views', 'cache');

			echo $blade->make('homepage', ['name' => 'John Doe'])->render();
		}
	}
 ?>