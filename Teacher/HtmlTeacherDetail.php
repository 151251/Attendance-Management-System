<DOCTYPE html>
<?php
	// Initialize the session
	session_start();
 
	// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: HtmlTeacherRegister.php");
		exit;
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="mystyle.css">	
	</head>
	
	<header style="background-color:darkblue;">
	<h1 align="center"><font color="white"> Hi <?php echo htmlspecialchars($_SESSION["name"]); ?></b>, Welcome in Student Attandence.</font></h1>
		<br>
	</header>
	
	<body bgcolor="lightyellow">
	
		<div class="navbar">
			<a href="HtmlTeacherDetail">Home</a>
			<a href="HtmlTeacherProfile.php">Profile</a>
				<div class="dropdown">
					<button class="dropbtn">Courses 
						<i class="fa fa-caret-down"></i>
					</button>
						<div class="dropdown-content">
							<a href="HtmlCourseAttendence.php?course=Mathematic">Mathematic</a>
							<a href="HtmlCourseAttendence.php?course=Biology">Biology</a>
							<a href="HtmlCourseAttendence.php?course=Hindi">Hindi</a>
							<a href="HtmlCourseAttendence.php?course=English">English</a>
							<a href="HtmlCourseAttendence.php?course=Computer">Computer</a>
						</div>
				</div>
			<a href="logout.php" >Sign Out</a>
		</div>
		<table style="width:100%">
			<header style="background-color:darkblue;">
				<h2 align="center"><font color="white"> Student Attendence</font></h2>
			<header>
		</table>
	</body>
</html>
