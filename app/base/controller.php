<?php 
    namespace App\Base;
    class Controller{
        // load Model
        public function model($model){
            $linkModel = "Model\\". $model;
            return ( new $linkModel());
        // print_r (new $linkModel());

        }

        // load view
        // public function view($view, $data =[]){
        
        //     if(file_exists("Views\\" . $view . ".php")){
        //         require_once "Views\\" . $view . ".php";
        //     }else{
        //         die ("view not exits");
        //     }
        // }
    }
?>
