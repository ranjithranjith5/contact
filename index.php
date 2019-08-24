
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
			<p>Email</p>
			<input type="text" placeholder="Enter Email" name="name">
			<p>Password</p>
			<input type="password" placeholder="Enter Password" name="password">
			<input type="submit" name="save" value="submit">
			<a href="#"> Forget Password</a> 
		</form>
	</div>
	</body>
</html>