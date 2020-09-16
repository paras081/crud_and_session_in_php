<?php
	
	require('db_connect.php');
	include('auth.php');

	$status="";

	if(isset($_POST['submit']))
	{
		$t=time();
		$trn_date=date("Y-m-d",$t);
		$name=$_POST['name'];
		$age=$_POST['age'];
		$submittedby=$_SESSION['username'];

		$ins_query= "INSERT INTO new_record  (trn_date,name,age,submittedby)
						       	  VALUES ('$trn_date', '$name','$age','$submittedby')
  
				";

		if(mysqli_query($conn,$ins_query))
		{
			$status = 'New Record Inserted Successfully </br><a href="view.php">View Inserted Records</a>';
		}else{
			die(mysqli_connect_error());
		}

	}


?>
<html>
		<head>
		<title>CRUD & session in PHP</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	<body>
	<div class="form">

		<p><a href="dashboard.php">Dashboard</a> | <a href="view.php">View Record</a> | <a href="logout.php">Logout</a> </p>
		<h1>Insert New Record</h1>
		<form method="post">

			<p><input type="text" name="name" palceholder="Enter name" required/></p>
			<p><input type="text" name="age" palceholder="Enter age" required/></p>
			<p><input type="submit" name="submit" value="Submit" required/></p>
		</form>

		<p> <?php echo $status; ?></p>
	</div>

	</body>

</html>