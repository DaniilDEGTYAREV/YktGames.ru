<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="card mb-3" style="max-width: 540px;">    
        <div class="row no-gutters">    
        <? 
            $con = mysqli_connect('127.0.0.1', '9644269628', 'T2ddhbQ5E2', '9644269628');
            $query = mysqli_query($con, "SELECT * FROM user WHERE id='" . $_GET['id'] . "'");
            $query1 = mysqli_query($con, "SELECT * FROM games WHERE id='" . $_GET['games_id'] . "'");
            for($i = 0; $i < $query1->num_rows; $i++){
                $result = $query->fetch_assoc(); ?>
                <div class="col-md-4">
                      <? echo '<img class="img" src=' .$result1['img'] .'>'; ?>
                </div>
                <div class="col-md-8">    
                    <div class="card-body">  
                        <div style="display: flex;"> 
                          <h5 class="card-title"> <? echo 'Вы купили игру ' .  $result1['name']; ?> </h5>
                             <? $result1 = $query1->fetch_assoc(); ?>
                            <h5 style="margin-left: 10px;" class="card-title"> <? echo $result1['name']; ?> </h5>
                       
                       
                        </div>
                        <h6 class="card-subtitle mb-2 text-muted"> <? echo $result1['price']; ?> </h6>
                    </div>
                </div>
            <? } ?>    
            
            <? echo '<a class="btn btn-primary" href="http://9644269628.myjino.ru/index.php?id=' . $result['id'] . '" style="margin-left: 199px;">Главная</a>'; ?>
            
        </div>
    </div>
</body>
</html>
