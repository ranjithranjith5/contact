
<html>
	<head>
		<title> Login Form </title>
		<link rel="stylesheet" href="style.css">
	

	</head>
	<body>
	<div class="loginBox">
		<img src="user.jpg"class="user"> 
		<h2>Log In Here</h2>
		<form action="process.php" method="post">
			<p>name</p>
			<input type="text" placeholder="Enter name" name="name">
			<p>email</p>
			<input type="text" placeholder="Enter email" name="name">
			<p>password</p>
			<input type="text" placeholder="Enter password" name="password">
			<p>re-enterpassword</p>
			<input type="text" placeholder="Enter password" name="password">
			<select name="gender" multiple>
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="other">Other</option>
			</select>
			<p>Birthday</p>
			<input type="date" name="bday">
			<input type="submit" name="save" value="submit">
			<a href="#"> Forget Password</a> 
		</form>
	</div>
	</body>
</html>