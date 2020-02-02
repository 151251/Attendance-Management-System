<DOCTYPE html>
<?php
	// Initialize the session
	session_start();
 
	// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: HtmlStudentRegister.php");
		exit;
	}
	include 'DatabaseStudentDetail.php';
	$obj = new DbDetail; 
	$stu_info = $obj->Detail($_SESSION["id"]);
	$attendance_info = $obj->attendance($_SESSION["id"]);
?>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="mystyle.css">	
	</head>
	
	<header style="background-color:darkblue;">
		<h2 align="center"><font color="white"> Hi <?php echo htmlspecialchars($_SESSION["name"]); ?></b>, Welcome.</font></h2>
		<br>
	</header>
	<body bgcolor="lightyellow">
	
		<div class="navbar">
			<a href="HtmlStudentDetail">Home</a>
			<a href="HtmlStudentUpdate.php">UpdateProfile</a>
			
				<div class="dropdown">
					<button class="dropbtn">Dropdown 
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
						<a href="HtmlCoursesDetail.php">ChooseCourses</a>
						<a href="a">FeeDetail</a>
						<a href="a">Attendence</a>
						<a href="a">MarksObtain</a>
					</div>
				</div>
			<a href="logout.php" >Sign Out</a>
		</div>
		
		<table style="width:100%">
		
			<header style="background-color:darkblue;">
			 <h2 align="center"><font color="white"> Student Detail</font></h2>
			<header>
			<tr>
				<th align="left">Name:</th>
				<td height="50"><?php echo $stu_info['name']; ?> </td>
				<th align="left">Roll No:</th>
				<td height="50"><?php echo $stu_info['id']; ?> </td>
			</tr>
			<tr>
				<th align="left">Semester:</th>
				<td height="50"><?php echo $stu_info['semester']; ?> </td>
				<th align="left">Department Name:</th>
				<td height="50"><?php echo $stu_info['department']; ?></td>
			</tr>
			<tr>
				<th align="left">Email Id:</th>
				<td height="50"><?php echo $stu_info['emailid'];?></td>
				<th align="left">Contact No:</th>
				<td height="50"><?php echo $stu_info['contactno']; ?></td>
			</tr>
			<tr">
				<th align="left">Adress: :</th>
				<td height="50"><?php echo $stu_info['address']; ?></td>
			</tr>
		</table>
		
			<header style="background-color:darkblue;">
				<h2 align="center"><font color="white"> Courses Attendence</font></h2>
			</header>
		<table width="100%">
			<tr>
				<th align="left"><font color="red">Course Name</font></th>
				<th align="left"><font color="red">Lecture Attend</font></th>
				<th align="left"><font color="red">Attendence %</font></th>
			</tr>
			<tr>
				<td height="50"><?php echo 'Mathematic';?></td>
				<td height="50"><?php echo $attendance_info['Mathematic'],"/120";?></td>
				<td height="50"><?php echo "\$attendance_infopercent'];"?></td>
			</tr>
			<tr>
				<td height="50"><?php echo 'Biology';?></td>
				<td height="50"><?php echo $attendance_info['Biology'],"/120";?></td>
				<td height="50"><?php echo "\$attendance_info['percent'];"?></td>
			</tr>
			<tr>
				<td height="50"><?php echo 'English';?></td>
				<td height="50"><?php echo $attendance_info['English'],"/120";?></td>
				<td height="50"><?php echo "\$attendance_info['percent'];"?></td>
			</tr>
			<tr>
				<td height="50"><?php echo 'Hindi';?></td>
				<td height="50"><?php echo $attendance_info['Hindi'],"/120";?></td>
				<td height="50"><?php echo "\$attendance_info['percent'];"?></td>
			</tr>
			<tr>
				<td height="50"><?php echo 'Computer';?></td>
				<td height="50"><?php echo $attendance_info['Computer'],"/120";?></td>
				<td height="50"><?php echo "\$attendance_info['percent'];"?></td>
			</tr>
		</table>
	</body>
</html>  