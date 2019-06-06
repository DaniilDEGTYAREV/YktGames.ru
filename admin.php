<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<? $con = mysqli_connect('127.0.0.1', '9644269628', 'T2ddhbQ5E2', '9644269628'); ?>
	<form method="POST" action="insert_game.php" enctype="multipart/form-data">
		<input type="" placeholder="Название" name="name">
		<input type="" placeholder="Цена" name="price">
		<input type="file" name="img">
		<input type="" placeholder="Описание" name="opis">
		<button type="submit">Добавить игру</button>
		
	</form>
	

</body>
</html>