<?php
	session_start();
	// Check if the user is already logged in, if yes then redirect him to welcome page
	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
		header("location: HtmlTeacherDetail.php");
		exit;
	}
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		include 'DatabaseTeacherLogin.php';
		$obj= new DbLogin;
		
		$id= $password="";
		$id= $_POST["id"];
		$password= $_POST["password"];
		$obj->Login($id,$password);
	}
?>