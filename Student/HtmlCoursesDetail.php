<DOCTYPE html>
<?php
	// Initialize the session
	session_start();
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: HtmlStudentRegister.php");
		exit;
	}
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		include 'DatabaseStudentCoursesDetail.php';
		$obj= new DbCourse;
		
		$Mathematic= $Biology=$Hindi=$English=$Computer = -1;
		
		if($_POST["Mathematic"] == "Mathematic"){
			$Mathematic = 0;
		}
		if($_POST["Biology"] == "Biology"){
			$Biology = 0;
		}
		if($_POST["Hindi"] == "Hindi"){
			$Hindi = 0;
		}
		if($_POST["English"] == "English"){
			$English = 0;
		}
		if($_POST["Computer"] == "Computer"){
			$Computer = 0;
		}
		
		/*$Mathematic= $_POST["Mathematic"];
		$Biology= $_POST["Biology"];
		$Hindi= $_POST["Hindi"];
		$English= $_POST["English"];
		$Computer= $_POST["Computer"];*/
		
		$obj->Course($Mathematic,$Hindi,$English,$Computer,$Biology,$_SESSION["id"]);
		header("location: HtmlStudentDetail.php");
	}
?>
<html>
	<header style="background-color:darkblue;">
		<h1 align="center"><font color="white">Choose Your Courses</font></h1>
		<br>
	</header>
	<body bgcolor="lightyellow">
		<header>
			<h2 align="left"><font color="black">Course Detail</font></h2>
		<header>
		<div style="width: 100%;">
			<div style="width: 50%; float: left;">
				<form action="" method="post">
				<input type="checkbox" name="Mathematic" value="Mathematic">Mathematic<br>
				<input type="checkbox" name="Biology" value="Biology">Biology<br>
				<input type="checkbox" name="Hindi" value="Hindi"> Hindi<br>
				<input type="checkbox" name="English" value="English"> English<br>
				<input type="checkbox" name="Computer" value="Computer">Computer<br>
				<br>
				<br>
				<input type="submit">
				</form>
			</div>
		</div>
	</body>
</html>