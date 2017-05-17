<?php
		$regex = "/(?=(\w))^.{5}/";
		$conn=mysqli_connect("localhost","root","","users");
		echo "<!DOCTYPE html>
				<html>
					<head>
						<title>Prácticas</title>
						<link rel='stylesheet' type='text/css' href='../styles/practicas.css'/>
						<meta charset='UTF-8'/>
					</head>
					<body>
					<h1>Sign In:</h1>
						<form method='POST'>
							<label>User:</label>
							<input type='text' name='user' />
							<label>Password:</label>
							<input type='password' name='password'/>
							<input type='submit'/>
						</form>";
		$x = 0;
		if(isset($_POST['password'])&&preg_match($regex,$_POST['password'])=="1")
		{
			$password = mysqli_real_escape_string($conn,$_POST['password']);
			$query = 'SELECT * FROM USER WHERE password LIKE "'.$password.'"';
			if(isset($query))
				$res=mysqli_query($conn,$query);
				$pass=mysqli_fetch_assoc($res);
			if(isset($pass))
				$x++;
			else
				echo"<h4>Incorrect Password.</h4>";
		}
		else
			echo"<h4>Your password must not contain special characters, and must have a minimum length of 5 characters and a maximum of 15 characters.</h4>";
		if(isset($_POST['user'])&&preg_match($regex,$_POST['user'])=="1")
		{
			$user = mysqli_real_escape_string($conn,$_POST['user']);
			$query = 'SELECT * FROM USER WHERE user_name LIKE "'.$user.'"';
			if(isset($query))
				$res=mysqli_query($conn,$query);
				$user=mysqli_fetch_assoc($res);
			if(isset($user))
				$x++;
			else
				echo"<h4>The user does not exist.</h4>";
		}
		else
			echo"<h4>Your username must not contain special characters, and must have a minimum length of 5 characters and a maximum of 10 characters.</h4>";
		if($x==2)
			echo"<div class='bottomright'><a href='choose.php'><img class='imagen' src='../images/home.png' alt='Home'>Home</a></div>";
		echo "		</body>
				</html>";
?>
