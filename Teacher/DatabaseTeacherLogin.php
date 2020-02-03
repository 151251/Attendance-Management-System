<?php
class DbLogin{
	private $connect;
	
	public function __construct(){
		include'Connect.php';
		$db = new DbConnect; 
		$this->connect = $db->connection();
	}
	
	public function Login($id,$password){
		$sql = "SELECT id,name,password FROM teacher where id='$id'";
		$result = $this->connect->query($sql);
		
		if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			
			if(password_verify($password, $row["password"])){
			//if($password === $row["password"]){
				session_start();
				// Store data in session variables
				$_SESSION["loggedin"] = true;
				$_SESSION["course"] = "";
				$_SESSION["id"] = $row["id"];
				$_SESSION["name"] = $row["name"];
				// Redirect user to welcome page
				header("location: HtmlTeacherDetail.php");
			} 
			else{
				echo "The password you entered was not valid.";
			}
        }
		else{
            echo"No account found with that username.";
		}
	}
}
?>