<?php
	class DbRegister{
		private $connect;
		public function __construct(){
			include'connect.php';
			$db = new DbConnect; 
			$this->connect = $db->connection();
		}
		public function register($name,$id,$password){
			
			$sql = "SELECT id FROM register where id='$id'";
			$result = $this->connect->query($sql);
			
			if($result->num_rows > 0){
				echo "This id is already taken.";
			}
			else{
				$hashed_pass = password_hash($password, PASSWORD_DEFAULT);
				//$hashed_pass = $Password;
				
				$sql = "INSERT INTO Register (name,id,password) VALUES ('$name','$id','$hashed_pass')";
				
				if($this->connect->query($sql) === TRUE){
					echo "New record created successfully";
				} 		
				else{
					echo "Error: ". $sql ."<br>" .$this->connect->error;
				}
			}
		}
	}
?>