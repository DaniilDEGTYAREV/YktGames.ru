<?php 
	$con = mysqli_query('127.0.0.1', '9644269628', 'T2ddhbQ5E2', '9644269628');
	$query = mysqli_query($con, "DELETE FROM games WHERE name='" . $_POST['name'] . "'");

?>