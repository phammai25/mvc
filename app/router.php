<?php
namespace App;
    class Router
    {
        protected $controllerName = 'PostController';
        protected $actionName = 'index';
        protected $params = [];

        function __construct()
        {
            $url = $this->getUrl();


            if(file_exists("Controllers/" . ucwords($url[0]) . "Controller.php")){
                $this->controllerName = ucwords($url[0]). "Controller";
                unset($url[0]);
            }
           
            
            $link_C = "Controllers\\" . $this->controllerName ;
            $this->controllerName = new $link_C();

            if(isset($url[1])){
                if(method_exists($this->controllerName,$url[1])){
                    $this->actionName = $url[1];
                    unset($url[1]);
                }
            }

            if($url){
                $this->params = array_values($url);
            }else{
                $this->params = [];
            }

            call_user_func_array([$this->controllerName,$this->actionName],$this->params);
        }


        public function getUrl()
        {
            if (isset($_GET['url'])) {
                $url = $_GET['url'];
                $url = rtrim($url,'/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }

        }
}
?>