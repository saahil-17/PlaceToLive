<?php
    $dbhost = 'db-databases.chuy0fvfnt0x.us-east-2.rds.amazonaws.com';
    $dbuser = 'root';
    $dbpass ='mysqlroot';
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass);
    if (!$conn){
        echo 'Connect unsuccessfully';
        die("Could not connect: " .mysqli_error());
    }
    echo 'Connect successfully';


    mysqli_select_db($conn,"placetolive");
?>