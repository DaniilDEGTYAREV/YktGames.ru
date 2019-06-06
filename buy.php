<? 
    $con = mysqli_connect('127.0.0.1', '9644269628', 'T2ddhbQ5E2', '9644269628');
    $query2 = mysqli_query($con, "SELECT * FROM games WHERE id='" . $_GET['games_id'] . "'");
    $result2 = $query2->fetch_assoc();
     $query1 = mysqli_query($con, "SELECT * FROM user WHERE id='" . $_GET['id'] . "'");
     $result1 = $query1->fetch_assoc();
    $query = mysqli_query($con, "INSERT INTO zakaz (games_id, user_id) VALUES ('" . $_GET['games_id'] . "', '" . $_GET['id'] . "') ");
   
    header("Location: http://9644269628.myjino.ru/page.php?games_id="  . $result2['id'] . '&id=' . $result1['id']);
?>