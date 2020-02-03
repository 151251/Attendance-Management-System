<?php
class DbDetail{
	private $connect;
	
	public function __construct(){
		include'Connect.php';
		$db = new DbConnect; 
		$this->connect = $db->connection();
	}
	public function Detail($id){
		$sql = "SELECT name,id,courseteach,department,emailid,contactno,address FROM teacher where id='$id'";
		$result = $this->connect->query($sql);
		
		if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			return $row;
		}
		return NULL;
	}
}
?>