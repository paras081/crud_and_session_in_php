<?php
	
	require('db_connect.php');

	$id=$_REQUEST['id'];
	$delete_query= "DELETE FROM new_record WHERE id=$id";

	mysqli_query($conn,$delete_query) or die(mysqli_error());

	header("Location:view.php");

?>