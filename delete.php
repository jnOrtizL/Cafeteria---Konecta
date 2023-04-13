<?php

include("connection.php");

$connect = connection();

$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id='$id'";
$query = mysqli_query($connect,$sql);

if ($query) {
    Header("Location: cafeteria.php");
}
?>