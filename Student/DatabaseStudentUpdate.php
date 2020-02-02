<?php
	class DbUpdate{
		private $connect;
		public function __construct(){
			include'connect.php';
			$db = new DbConnect; 
			$this->connect = $db->connection();
		}
		public function Update($sem,$dep,$email,$con,$add, $id){
			$sql = "UPDATE register SET semester='$sem',department='$dep',emailid='$email',contactno='$con',address='$add' WHERE id='$id'";
			if($this->connect->query($sql) === TRUE){
				echo "New record created successfully";
			} 		
			else{
				echo "Error: ". $sql ."<br>" .$this->connect->error;
			}
		}
	}
?>