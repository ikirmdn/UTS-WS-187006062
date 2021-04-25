<?php

    require_once('config.php');

    $fullname = $_POST['fullname'];
    $level = $_POST['level'];
    $age = $_POST['age'];
    $country = $_POST['country'];
    $statistic = $_POST['statistic'];

    $query = "INSERT INTO menplayers(fullname,level,age,country,statistic)VALUES('$fullname','$level','$age','$country','$statistic')";
    
    $sql    = mysqli_query($db_connect, $query);
    if ($sql){
    echo json_encode ( array('message' => 'Sukses Fren!') );
    }else {
        echo json_encode ( array('message' => 'Kasian Deh Loh Gaada!') );
    }
?>
