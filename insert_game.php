<?php 
	$con = mysqli_connect('127.0.0.1', '9644269628','T2ddhbQ5E2', '9644269628');
	$query = mysqli_query($con, "INSERT INTO games (name, price, opis, img) VALUES ('" . $_POST['name'] . "', '" . $_POST['price'] . "', '" . $_POST['opis'] . "', 'imggames/" . $_FILES['img']['name'] . "')");
		move_uploaded_file($_FILES['img']['tmp_name'], 'imggames/' . $_FILES['img']['name']);
		header("Location: http://9644269628.myjino.ru/index.php");
	

?>