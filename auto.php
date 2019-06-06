<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST" action="proverka.php">
		<input placeholder="Номер" name="nom">
		<input type="password" placeholder="Пароль" name="pass">
		<button>Войти</button>
		<?php 
			$_GET['eror'];
			echo $_GET['eror'];
		?>
		<a href="http://9644269628.myjino.ru/index.php">Главная</a>
	</form>
</body>
</html>