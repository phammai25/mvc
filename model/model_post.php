<?php
	require_once("app/config.php");
 	require_once("app/base/model.php");

 	class PostModel extends Model{
 		public function get_all(){
			return parent::get_all_from('post');

		}
 	}
?>