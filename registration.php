
<html>
	<head>
		<title>CRUD & session in PHP</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	<body>
	<?php

		require('db_connect.php'); 
		// if this file executed succuessfully than only further php script runs successfully else gives error in db_connect.php file
 
		if(isset($_POST['username'])){

			$username = stripcslashes($_POST['username']);
			// mysqli_real_escape_string($conn,$username)
			$email = $_POST['email'];
			$password =  stripcslashes($_POST['password']);
			$t=time();
			$trn_date=date("Y-m-d",$t);

			$query = "INSERT INTO users (username,password,email,trn_date)
								   VALUES ('$username','$password','$email','$trn_date')
					  ";

			$result=mysqli_query($conn,$query);
			if($result){
				echo '<div>
							<h3>You are Registered successfully</h3></br>
							click here to <a  href="login.php">Login</a>
					  </div>
				';
			}
		}else{

	?>

			<div class="form">
				<h1>Register Here</h1>
				<form method="post">
						<input type="text" name="username" placeholder="Username" required/></br>
						<input type="email" name="email" placeholder="Email-Id" required/></br>
						<input type="password" name="password" placeholder="Password" required/></br>
						<input type="submit" name="submit" Value="Login"/></br>
				</form>
			</div>

		<?php
			}
		?>
	</body>
</html>