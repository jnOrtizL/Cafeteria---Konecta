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

$sql = "UPDATE productos SET Nombre='$nombre',Referencia='$referencia',Precio='$precio',Peso='$peso',Categoria='$categoria',Stock='$stock',FechaDeCreacion='$fecha' WHERE id='$id'";
$query = mysqli_query($connect,$sql);

if ($query) {
    Header("Location: cafeteria.php");
}
?>