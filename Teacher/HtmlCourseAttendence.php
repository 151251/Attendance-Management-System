<?php
	// Initialize the session
	session_start();
 
	// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: HtmlTeacherRegister.php");
		exit;
	}
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
	//if($_SESSION["course"] == ""){
		$_SESSION["course"] = $_GET["course"];	
	}
	$course = $_SESSION["course"];
	
	include 'DatabaseStudentName.php';
	$obj = new DbStudentName; 
	$stu_id = $obj->Name($course);
	
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id1=$stu_id[0]['id'];
		$id2=$stu_id[1]['id'];
		$id3=$stu_id[2]['id'];
		$id4=$stu_id[3]['id'];
		$id5=$stu_id[4]['id'];
		
		$attend1= $attend2=$attend3=$attend4=$attend5="0";
		
		$attend1= $_POST["attend1"];
		/*$attend2= $_POST["attend2"];
		$attend3= $_POST["attend3"];
		$attend4= $_POST["attend4"];
		$attend5= $_POST["attend5"];*/
		
		
		if($attend1=="1"){
			$obj->AttenUpdate($id1,$course);
		}
		if($attend2=="1"){
			$obj->AttenUpdate($id2,$course);
		}
		if($attend3=="1"){
			$obj->AttenUpdate($id3,$course);
		}
		if($attend4=="1"){
			$obj->AttenUpdate($id4,$course);
		}
		if($attend5=="1"){
			$obj->AttenUpdate($id5,$course);
		}
		//$_SESSION["course"] = "";
		header("location: HtmlTeacherDetail.php");
	}
?>
<DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="mystyle.css">	
	</head>
	
	<header style="background-color:darkblue;">
	<h1 align="center"><font color="white"><?php echo $course ?> Student Attendence </font></h1>
		<br>
	</header
	<body bgcolor="lightyellow">
		<table style="width:100%">
			<tr>
				<th align="left"><font color="Red">Total Attendence</font></th>
				<th align="left"><font color="Red">Roll No of Student</font></th>
			<tr>
		</table>
		<div style="width: 100%;">
			<div style="width: 50%; float:right;">
				<form action="HtmlCourseAttendence.php" method="post">
					<input type="checkbox" name="attend1" value="1"><?php echo$stu_id[0]['id'];?><br>
					<input type="checkbox" name="attend2" value="1"><?php echo $stu_id[1]['id'];?><br>
					<input type="checkbox" name="attend3" value="1"><?php echo $stu_id[2]['id'];?><br>
					<input type="checkbox" name="attend4" value="1"><?php echo $stu_id[3]['id'];?><br>
					<input type="checkbox" name="attend5" value="1"><?php echo $stu_id[4]['id'];?><br>
					<br>
					<br>
					<input type="submit">
				</form>
			</div>
			
			<div style="width: 50%; float:right;">
				<table action="HtmlCourseAttendence.php" method="post">
					<tr>
						<td><?php echo $stu_id[0]['atten'],"/120";?></td>
					</tr>
					<tr>
						<td><?php echo $stu_id[1]['atten'],"/120";?></td>
					</tr>
					<tr>
						<td><?php echo $stu_id[2]['atten'],"/120";?></td>
					</tr>
					<tr>
						<td><?php echo $stu_id[3]['atten'],"/120";?></td>
					</tr>
					<tr>
						<td><?php echo $stu_id[4]['atten'],"/120";?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>