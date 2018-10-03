<?php
	require_once('model/model_post.php');
	class Post{
		public function show(){
			 $listPost = PostModel::get_all();
			//  var_dump($listPost);
			// echo"dffd";
		}
	}
?>