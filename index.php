<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>YktGames.ru</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<? 
		$con = mysqli_connect('127.0.0.1', '9644269628', 'T2ddhbQ5E2', '9644269628');
		$query1 = mysqli_query($con, "SELECT * FROM user WHERE id='" . $_GET['id'] . "'");
		$result1 = $query1->fetch_assoc();
		if($_GET['id'] == true){
		    echo  '<a href="http://9644269628.myjino.ru/page.php?id=' . $result1['name']  . '">'; ?> <? echo $result1['name']; ?> </a>
		<? 
	    	} else{
	    	    echo $result1['name'];
	    	}
		?>
	

		<p class="p_sky">YktGames.ru</p>
		<div class="sky">
			<a class="a_sky" href="http://9644269628.myjino.ru/reg.php">Регистрация</a>
			<a class="a_sky" href="http://9644269628.myjino.ru/auto.php">Войти</a>
		</div>
		<div class="lead_photo" class="img-fluid"></div>
    	
    	    <div class="card">
    			<div class="row"> 
    			<? 
    				
    				$query = mysqli_query($con, "SELECT * FROM games");
    				for($i = 0; $i < $query->num_rows; $i++){
    					$result = $query->fetch_assoc(); ?>
    					   	
            					    <div class="col-3">
            					        <p class="card-title"> <? echo $result['name']; ?> </p>
            						      <? echo '<img class="img-thumbnail" src=' .$result['img'] .'>' ?> 
            						
            					    	<p> <? echo $result['opis'] ?> </p> 
            					 	
            						    <p class="card-text"> <? echo $result['price'] ?> </p> 
            						    <? echo '<a href="tovar.php?games_id=' . $result['id'] . '&id=' . $result1['id'] . '" class="btn btn-primary">Подробнее</a>'; ?> 
            					    </div>
            	    	<? } ?>				   
            	</div>		
        </div>
    					
    			
    	    
    	 </div>
				<div class="but_block">
			<p class="p_but_block">Developer - Daniil Degtyarev</p>
			<a href="https://vk.com/degdd" class="a_but_block"> Developer VK</a>
			<a href="https://www.facebook.com/profile.php?id=100029631091015" class="a_but_block">Developer FaceBook</a>
		</div>
</body>
</html>