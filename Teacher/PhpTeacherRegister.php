<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		include'DatabaseTeacherRegister.php';
		$store= new DbRegister;
		
		//variable declare
		$name= $name_err=""; 
		$id= $id_err="";
		$password= $passwors_err="";
		$C_password= $C_password_err="";
		
		//name
		if(empty(trim($_POST["name"]))){
			$name_err="Please enter a name.";
			echo $name_err;
		} 
		else{
			$name = trim($_POST["name"]);
		}
		//id
		if(empty(trim($_POST["id"]))){
			$id_err="Please enter a id.";
			echo $id_err;
		} 
		else{
			$id = trim($_POST["id"]);
		}
		//password
		if(empty(trim($_POST["password"]))){
			$passwors_err="Please enter a Password.";
			echo $passwors_err;
		}
		else{
			$password = trim($_POST["password"]);
        }
		//conformPassword
		if(empty(trim($_POST["C_password"]))){
			$C_password_err="Please enter a ConformPassword." ;
			echo $C_password_err;
		} 
		else{
			$C_password = trim($_POST["C_password"]);
		}
		//Password verification
		if($password === $C_password){
			if(empty($name_err) && empty($id_err) && empty($password_err) && empty($C_password_err)){
				$store->register($name ,$id, $password);
			}
		}
		else{
			echo"Password Didn't match";
		}
	}
?>