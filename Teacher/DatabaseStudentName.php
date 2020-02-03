<?php
class DbStudentName{
	private $connect;
	
	public function __construct(){
		include'Connect.php';
		$db = new DbConnect; 
		$this->connect = $db->connection();
	}
	public function Name($course){
		$sql = "SELECT id, $course FROM Course WHERE $course >= 0";
		$result = $this->connect->query($sql);
		
		$a=array();
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				array_push($a,array('id'=>$row["id"], 'atten'=>$row[$course]));
			}
		}
		return $a;
	}
	
	public function AttenUpdate($id, $course){
		
			
		$sql = "SELECT $course FROM Course where id='$id'";
		$result = $this->connect->query($sql);
		
		if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			
			$updattend=$row[$course] + 1;
			$sql = "UPDATE Course SET $course='$updattend' WHERE id=$id";
			if($this->connect->query($sql) === TRUE){
				echo "New record updateded successfully";
			} 		
		}
	}
	
	
}
?>