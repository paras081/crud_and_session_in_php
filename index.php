<?php
	include("auth.php");
?>
<html>
	<head>
		<title>Welcome to home page</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	<body>
		<div class="form">
			<p>Welcome <?php echo $_SESSION['username'];  ?> </p>
			<p>This is secure area.</p>
			<p><a href="dashboard.php">Dashboard</a></p>
			<p><a href="logout.php">Logout</a></p>
		</div>
	</body>
</html>
