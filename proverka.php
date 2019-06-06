<?php 
	$con = mysqli_connect('127.0.0.1', '9644269628', 'T2ddhbQ5E2', '9644269628');
	$query = mysqli_query($con, "SELECT * FROM user WHERE nom='" . $_POST['nom'] . "' AND pass='" . $_POST['pass'] . "' ");
	$result = $query->fetch_assoc();
	if($query->num_rows== 0){
		header("Location: http://9644269628.myjino.ru/auto.php?eror='Ошибка'");

	} else {
		header("Location: http://9644269628.myjino.ru/index.php?id=" . $result['id']);
	};

?>