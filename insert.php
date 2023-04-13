<?php

include("connection.php");

$connect = connection();

$id = $_POST['id'];
$nombre = $_POST['Nombre'];
$referencia = $_POST['Referencia'];
$precio = $_POST['Precio'];
$peso = $_POST['Peso'];
$categoria = $_POST['Categoria'];
$stock = $_POST['Stock'];
$fecha = $_POST['FechaDeCreacion'];

$sql = "INSERT INTO productos VALUES('$id','$nombre','$referencia','$precio','$peso','$categoria','$stock','$fecha')";
$query = mysqli_query($connect,$sql);

if ($query) {
    Header("Location: cafeteria.php");
}else {
    
}

?>