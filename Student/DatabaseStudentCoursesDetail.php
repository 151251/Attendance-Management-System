<?php
	class DbCourse{
		private $connect;
		public function __construct(){
			include'connect.php';
			$db = new DbConnect; 
			$this->connect = $db->connection();
		}
		public function Course($Mathematic,$Hindi,$English,$Computer,$Biology,$id){
			$sql = "INSERT INTO Course (Mathematic,Hindi,English,Computer,Biology,id) VALUES ('$Mathematic','$Hindi','$English','$Computer','$Biology','$id')";
			if($this->connect->query($sql) === TRUE){
				echo "New record created successfully";
			} 		
			else{
				echo "Error: ". $sql ."<br>" .$this->connect->error;
			}
		}
		
	}
?>