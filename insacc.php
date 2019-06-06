<?php 
	$con = mysqli_connect('127.0.0.1', '9644269628', 'T2ddhbQ5E2', '9644269628');
	$query = mysqli_query($con, "INSERT INTO user (name, email, pass, nom) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['pass'] . "', '" . $_POST['nom'] . "')");
	
	header("Location: http://9644269628.myjino.ru/auto.php");
?>