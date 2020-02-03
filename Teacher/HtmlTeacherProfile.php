<DOCTYPE html>
<?php
	// Initialize the session
	session_start();
 
	// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: HtmlTeacherRegister.php");
		exit;
	}
	include 'DatabaseTeacherDetail.php';
	$obj = new DbDetail; 
	$teacher_info = $obj->Detail($_SESSION["id"]);
?>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="mystyle.css">	
	</head>
	
	<header style="background-color:darkblue;">
	<h1 align="center"><font color="white"> Hi <?php echo htmlspecialchars($_SESSION["name"]); ?></b>, Welcome.</font></h1>
		<br>
	</header
	<body bgcolor="lightyellow">
	
		<table style="width:100%">
			<header style="background-color:darkblue;">
			 <h2 align="center"><font color="white"> Teacher Detail</font></h2>
			<header>
			<tr>
				<th align="left">Name:</th>
				<td height="50"><?php echo $teacher_info['name']; ?> </td>
				<th align="left">collage id:</th>
				<td height="50"><?php echo $teacher_info['id']; ?> </td>
			</tr>
			<tr>
				<th align="left">Courses Teach:</th>
					<td height="50"><?php echo $teacher_info['courseteach']; ?> </td>
				<th align="left">Department Name:</th>
					<td height="50"><?php echo $teacher_info['department']; ?></td>
			</tr>
			<tr>
				<th align="left">Email Id:</th>
				<td height="50"><?php echo $teacher_info['emailid'];?></td>
				<th align="left">Contact No:</th>
				<td height="50"><?php echo $teacher_info['contactno']; ?></td>
			</tr>
			<tr">
				<th align="left">Adress: :</th>
				<td height="50"><?php echo $teacher_info['address']; ?></td>
			</tr>
		</table>
	</body>
</html>