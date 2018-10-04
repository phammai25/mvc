<?php
    namespace Model;
    class ModelUser
    {
        private $table = 'user';
        private $db;

        public function __construct()
        {
            $this->db = new \App\Database();
        }

        public function register($data)
        {
            $sql = "INSERT INTO $this->table(name,sdt,password,email,linkfb) values ('$data[name]','$data[sdt]','$data[password]','$data[email]','$data[linkfb]') ";
            $this->db->query($sql);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function getUser($name)
        {

            $sql = "SELECT id_user FROM $this->table WHERE name = '$name'";
            $this->db->query($sql);
            $ret = $this->db->resultArray($sql);
            return $ret[0]['id_user'];
        }

        public function login($name,$password)
        {
            $password = md5($password);
            

            $sql = "SELECT * FROM $this->table WHERE name = '$name' AND password = '$password' ";
            // echo $sql;
            $this->db->query($sql);
     

            if ($this->db->countRow() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }
?> 