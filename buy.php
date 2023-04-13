<?php

include("connection.php");

$connect = connection();

$id = $_POST['id'];
$stock = $_POST['Stock'];

$sql = "UPDATE productos SET Stock='$stock' WHERE id='$id'";
$query = mysqli_query($connect,$sql);

if ($query) {
    Header("Location: cafeteria.php");
}
?>