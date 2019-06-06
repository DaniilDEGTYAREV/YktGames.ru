<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
        	<? 
        		$con = mysqli_connect('127.0.0.1', '9644269628', 'T2ddhbQ5E2', '9644269628');
        		$query = mysqli_query($con, "SELECT * FROM games WHERE id='" . $_GET['games_id'] . "'");
        		$result = $query->fetch_assoc();
        		$query1 = mysqli_query($con, "SELECT * FROM user WHERE id='" . $_GET['id'] . "'");
        		$result1 = $query1->fetch_assoc(); ?>
        	    <div class="col-md-4">
                      <?php echo '<img class="card-img" src=' . $result['img'] . '>'; ?>
                </div>	
                <div class="col-md-8">
                    <div class="card-body"> 
                	    <p  class="card-title"> <? echo $result1['name'] ?> </p>
                	
                	    <h5 class="card-title"><?php echo $result['name']; ?></h5> 
                	    <p class="card-text"> <?php echo $result['opis']; ?>	</p>
                    	
                    	
                		<h6 class="card-subtitle mb-2 text-muted"> <?php echo $result['price']; ?> </h6>
                	    <?
                            if($_GET['id'] == null){
                                echo 'Вы не вошли в аккаунт';
                                header("Refresh: 2; URL= http://9644269628.myjino.ru/auto.php"); 
                                exit; 
                            } else {
                                 echo '<a href="http://9644269628.myjino.ru/buy.php?games_id=' . $result['id'] . '&id=' . $result1['id'] . '" class="btn btn-primary">Купить</a>';
                            }
                        ?>  
                	   
                	 
                    </div>
            	</div>
        </div>
    </div>
</body>
</html>