<?php
    namespace Model;
    class ModelPost {
        private $table = 'post';
        private $db;

        public function __construct()
        {
            $this->db = new \App\Database();
        }

        public function getPost()
        {
            $sql = "SELECT * FROM $this->table";
            $this->db->query($sql);
            return ($this->db->resultArray());        
            // print_r( $this->db->resultArray());
        }
        
        public function save($data){
            error_log($data['id_user']);
             $sql = "INSERT INTO $this->table(id_user,title,content,`date`) values ('$data[id_user]','$data[title]','$data[content]','$data[date]') ";
            $this->db->query($sql);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
    }
// $m = new PostModel();
// print_r($m->getPost());