<?php
	// Initialize the session
	session_start();
 
	// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: HtmlStudentRegister.php");
		exit;
	}
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		include 'DatabaseStudentUpdate.php';
		$obj = new DbUpdate;
		
		$sem=$dep=$email=$con=$add="";
		$sem = $_POST["sem"];
        $dep = $_POST["dep"];
		$email =$_POST["email"];
        $con = $_POST["con"];
		$add = $_POST["add"];

		$obj->Update($sem,$dep ,$email, $con, $add, $_SESSION["id"]);
		header("location: HtmlStudentDetail.php");
	}
?>
<DOCTYPE html>
<html>
	<header style="background-color:darkblue;">
		<h2 align="center"><font color="white"> Update Your Profile</font></h2>
		<br>
	</header>
	<body style="background-color:lightYellow;">
		<div style="width: 100%;">
			<div style="width: 100%; float:left;">
				<body bgcolor="lightyellow">
				<form action="HtmlStudentUpdate.php" method="post">
					semester:<br>
					<input type="text" name="sem" required><br>
					department:<br> 
					<input type="text" name="dep"required><br>
					email id:<br>
					<input type="text" name="email" required><br>
					contact no:<br> 
					<input type="text" name="con" required><br>
					Address<br>
					<input type="text" name="add" required><br>
					<br>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</body>
</html>