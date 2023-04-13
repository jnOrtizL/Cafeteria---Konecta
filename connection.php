<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $bd = "cafeteria";

    $connect = mysqli_connect($host,$user,$pass, $bd) or die ("cannot connect");

    // $select = mysqli_select_db($connect, $bd);
    // echo $connect;
    return $connect;
}
?>