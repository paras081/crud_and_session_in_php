<?php
	require('db_connect.php');
	include('auth.php');
?>
<html>
	<head>
		<title>Dashboard - Secured Area</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>

	<body>
		<div class="form">
		<p>Welcome to Dashbaord <?php echo $_SESSION['username'];  ?> </p>
			<p>This is secure area.</p>
			<p><a href="index.php">Home</a></p>
			<p><a href="insert.php">Insert New Employee Record</a></p>
			<p><a href="view.php">View Records</a></p>
			<p><a href="logout.php">Logout</a></p>
		</div>
	</body>
</html>