<?php
	define('DB_SERVERNAME' , 'localhost');
	define('DB_USERNAME' , 'root');
	define('DB_PASSWORD' , '');
	define('DB_NAME' , 'AttendenceManagement');
	
	class DbConnect{
	
		private $connect; 

		public function connection(){
		
			$this->connect = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
			// Check connection
			if($this->connect->connect_error){
				die("Connection failed: " . $this->connect->connect_error);
				return null;
			}
			return $this->connect;
		}
	}
?>