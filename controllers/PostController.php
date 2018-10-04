<?php 
namespace Controllers;
    use Jenssegers\Blade\Blade;

    class PostController extends \App\Base\Controller{

        private $postModel;
        public function __construct()
        {
            $this->postModel = $this->model("ModelPost");
            // print_r($this->postModel->getPost());
        }

        public function index()
        {
            // print_r($this->postModel->getPost());

            $data = $this->postModel->getPost();
            $blade = new Blade('Views', 'Cache');

            echo $blade->make('login', ['data' => $data]);
            //$this->view('login',$data);
        }

        // public function about()
        // {
        //     $this->view('Post/about');
        // }

        public function add($id)
        {
            echo "<br>" . $id;
        }

        // public function getPost()
        // {
        //     // $post_M = new \Models\PostModel();
        //     $post_M = $this->model("ModelPost");
        //     $data = $post_M->getPost();
        //     if($data){
        //         // require_once 'Views/PostView.php';
        //         // $post_V = new \Views\PostView();
        //         $post_V = $this->view("PostView",$data);

                // $post_V->showAllPost($data);
        //     }
        // }

    }


?>