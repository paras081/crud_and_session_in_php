
<html>
	<head>
		<title>CRUD & session in PHP</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	<body>
	

	<?php
		require('db_connect.php');
		session_start();
		if(isset($_POST['submit']))
		{
			$username = stripcslashes($_POST['username']);
			// mysqli_real_escape_string($conn,$username)
			$password =  stripcslashes($_POST['password']);
			
			$query = "SELECT * FROM users WHERE username= '$username' and password = '$password'";

			$result= mysqli_query($conn,$query);
			$rows= mysqli_num_rows($result);

			if($rows == 1){
				$_SESSION['username']= $username;
				header("Location: index.php");
			}else{
				echo '<div>
							<h3>Invalid username or Password</h3></br>
							click here to <a  href="login.php">Login</a>
					  </div>
				';
			}


		}else{

	?>
			<div class="form">
				<h1>Login Here</h1>
				<form method="post">
						<input type="text" name="username" placeholder="Username" required/></br>
						<input type="password" name="password" placeholder="Password" required/></br>
						<input type="submit" name="submit" Value="Login"/></br>
				</form>
				<p>Not Registered yet?<a href="registration.php">Register Here</a></p>
			</div>

			<?php
			}	
			?>
	</body>
</html>