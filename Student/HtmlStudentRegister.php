<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		include'DatabaseStudentRegister.php';
		$store= new DbRegister;
		//variable declare
		$name=$id=$password=$C_password="";
		
		$name =$_POST["name"];
		$id = $_POST["id"];
		$password =$_POST["password"];
        $C_password =$_POST["ConformPassword"];
		
		//Password verification
		if($password === $C_password){
			$store->register($name ,$id, $password);
		}
		else{
			echo"Password Didn't match";
		}
	}
?>
<DOCTYPE html>
<html>
	<body style="background-color:lightblue;">
	
		<header style="background-color:darkblue;" >
			<h1 align="center"><font color="white">Student login form</font></h1>
		</header>
		
		<div style="width: 100%;">
	
			<div style="width: 50%; float:Right;">
				<h3>IF YOU ALREADY CREATED, LOGIN YOUR ACCOUNT </h3>
				<form action="PhpStudentLogin.php" method="post">
					Collage Id:<br>
					<input type="text" name="id"required>
					<br>
					Password:<br>
					<input type="password" name="password"required>
					<br>
					<br>
					<input type="submit" value="Login"required>
				</form>
			</div>
			
			<div style="width: 50%; float:Right;">	
				<h3> CREATE AN ACCOUNT </h3>
				<form action="HtmlStudentRegister.php" method="post">
					Name:<br>
					<input type="text" name="name"required>
					<br>
					Collage Id:<br>
					<input type="text" name="id"required>
					<br>
					Password:<br>
					<input type="password" name="password"required>
					<br>
					Conform Password:<br>
					<input type="password" name="ConformPassword"required>
					<br>
					<br>
					<input type="submit">
				</form>
			</div>
		</div>
	</body>
</html>
