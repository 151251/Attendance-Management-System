<DOCTYPE html>
<html>
	<body style="background-color:lightyellow;">
		<header style="background-color:darkblue;" >
			<h1 align="center"><font color="white">Teacher login form</font></h1>
		</header>
	<div style="width: 100%;">
		<div style="width: 50%; float: left;">
			<h3>IF YOU ALREADY CREATED, LOGIN YOUR ACCOUNT </h3>
			<form action="PhpTeacherLogin.php" method="post">
				Collage Id:<br>
				<input type="text" name="id">
				<br>
				Password:<br>
				<input type="password" name="password">
				<br>
				<br>
				<input type="submit" value="Login">
			</form>
		</div>
		
		<div style="margin-left: 50%;">	
			<h3> CREATE AN ACCOUNT </h3>
			<form action="PhpTeacherRegister.php" method="post">
				Name:<br>
				<input type="text" name="name">
				<br>
				Collage Id:<br>
				<input type="text" name="id">
				<br>
				Password:<br>
				<input type="password" name="password">
				<br>
				Conform Password:<br>
				<input type="password" name="C_password">
				<br>
				<br>
				<input type="submit">
			</form>
		</div>
	</body>
</html>
