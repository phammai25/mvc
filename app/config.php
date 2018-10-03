<?php
//namespace DB;
	class Database {
		public static  $db;
		private static  $host = 'localhost';
		private static  $dbname = 'mvc_post';
		private static  $username = 'root';
		private static  $password = '';

		public static  function connect()
		{
			if(!isset(self::$db)) {
				try {
				
					self::$db = new \PDO("mysql:host=". self::$host .";dbname=" . self::$dbname . ";charset=utf8" ,self::$username,self::$password);
					self::$db->exec('set names utf-8');
       				self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        			
        			self::$db->setAttribute(\PDO::ATTR_EMULATE_PREPARES,false);

        			//$stmt = self::$db->prepare('SELECT * from post');
// //Thiết lập kiểu dữ liệu trả về
// $stmt->setFetchMode(PDO::FETCH_ASSOC);
// $stmt->execute();
// $resultSet = $stmt->fetchAll();
// Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
// $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
// foreach ($resultSet as $row) {
// echo $row['id_post'] . '\n';
// echo $row['id_user'] . '\n';
// echo $row['title'] . '\n';
// echo $row['content'] . '\n';
// echo $row['date'] . '\n';

// }
				}
				catch(PDOException $e){
        			echo $e->getMessage();
				}
				return self::$db;
			
		}
	}
	// public function getDb() {
 //       if (self::db instanceof PDO) {
 //            return self::db;
 //       }
 // }
}

	
?> 