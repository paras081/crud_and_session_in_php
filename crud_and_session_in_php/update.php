<?php
	
	require('db_connect.php');
	include('auth.php');
	$id=$_REQUEST['id'];

	$query= "SELECT * FROM new_record WHERE id='".$id."'";
	$result = mysqli_query($conn,$query) or die(mysqli_error());

	$row= mysqli_fetch_assoc($result);


?>

<html>
	<head>
		<title>Update Records</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	<body>
		<div class="form">

		<p><a href="dashboard.php">Dashboard</a> | <a href="view.php">View Record</a> | <a href="logout.php">Logout</a> </p>
		<h1>Update Record</h1>
		<?php
			$status="";
			if(isset($_POST['submit']))
			{

				$id=$_REQUEST['id'];
				$t=time();
				$trn_date=date("Y-m-d",$t);
				$name=$_REQUEST['name'];
				$age=$_REQUEST['age'];
				$submittedby=$_SESSION['username'];

				$update_query="UPDATE new_record SET trn_date='".$trn_date."', name='".$name."', age='".										   $age."', submittedby='".$submittedby."' 

												WHERE id='".$id."'
								";
				mysqli_query($conn,$update_query) or die(mysqli_error());

				$status="Record updated successfully</br></br><a href='view.php'>View Updated Records</a>";
				echo '<p>'.$status.'</p>';
			}else{

		?>
		<form method="post">

			<p><input type="text" name="name" placeholder="Enter name" value="<?php echo $row['name']; ?>" required/></p>
			<p><input type="text" name="age" placeholder="Enter age" value="<?php echo $row['age']; ?>" required/></p>
			<p><input type="submit" name="submit" value="Submit" required/></p>
		</form>

		</div>

	<?php
		}
	?>
	</body>
</html>