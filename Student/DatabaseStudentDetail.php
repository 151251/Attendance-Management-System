<?php
class DbDetail{
	private $connect;
	
	public function __construct(){
		include'Connect.php';
		$db = new DbConnect; 
		$this->connect = $db->connection();
	}
	
	public function Detail($id){
		$sql = "SELECT name,id,semester,department,emailid,contactno,address FROM register where id='$id'";
		$result = $this->connect->query($sql);
		
		if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			return $row;
		}
		return NULL;
	}
	public function attendance($id){
		$sql="select Mathematic,Biology,Hindi,English,Computer from course where id='$id'";
		$result = $this->connect->query($sql);
		if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			return $row;
		}
		return NULL;
	}
}
?>