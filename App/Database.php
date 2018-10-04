<?php 
    namespace App;
    class Database
    {
        private $host = 'localhost';
        private $dbname = 'mvc_post';
        private $username = 'root';
        private $password = '';

        private $conn = '';
        private $stmt;

        public function __construct(){
            try {
                $this->conn = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8", $this->username, $this->password);
                $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                die($e->getMessage());
            }

            return ($this->conn);
        }

        public function query($sql)
        {
            $this->stmt = $this->conn->prepare($sql);
        }

        public function execute()
        {
            return $this->stmt->execute();
        }

        // return Array
        public function resultArray()
        {
            $this->execute();
            $this->stmt->setFetchMode(\PDO::FETCH_ASSOC);
            $data = $this->stmt->fetchAll();
            return $data;
        }

        // return single
        // public function resultSingle()
        // {
        //     $this->execute();

        //     $this->stmt->setFetchMode(\PDO::FETCH_ASSOC);
        //     $data = $this->stmt->fetchAll();

        //     return $data;
        // }

        public function countRow()
        {
            $this->execute();
            return $this->stmt->rowCount();
        }

        // public function getALl()
        // {
        //     if (!empty($this->table)) {
        //         $data = [];
        //         $sql = "SELECT * FROM $this->table ";

        //         $stmt = $this->conn->prepare($sql);
        //         $stmt->execute();

        //         $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        //         $data = $stmt->fetchAll();

        //         return $data;
        //         // print_r($data);
        //     }
        // }
    }
// $db = new DB();
// print_r($db::conn);
?>