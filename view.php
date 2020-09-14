<?php

	require('db_connect.php');
	include('auth.php');

?>
<html>
	<head>
		<title>CRUD & session in PHP</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	<body>
	
	<p><a href="dashboard.php">Dashboard</a> | <a href="view.php">View Record</a> | <a href="logout.php">Logout</a> </p>
		<h1>View Records</h1>

	<table>
		<thead>
		<tr>
			<th>Sr.No</th>
			<th>Name</th>
			<th>Age</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<thead>
		<tbody>
			<?php
				$count=1;
				$sel_query="SELECT * FROM new_record ORDER BY id DESC";

				$result= mysqli_query($conn,$sel_query);

				while($row=mysqli_fetch_assoc($result)){
			?>

				<tr>
					<td align="center"> <?php echo $count; ?> </td>
					<td align="center"> <?php echo $row['name']; ?> </td>
					<td align="center"> <?php echo $row['age']; ?> </td>
					
					<td align="center"> <a href="update.php?id=<?php echo $row['id']; ?>"  >  Update </a> </td>
					<td align="center"> <a href="delete.php?id=<?php echo $row['id']; ?>"  > Delete </a> </td>

				</tr>

				<?php
					$count++;
					}
				?>
		</tbody>
	</table>


</html>