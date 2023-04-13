<?php

include("connection.php");

$connect = connection();

$id = $_GET['id'];
// $nombre = $_GET['Nombre'];
// $stock = $_GET['Stock'];

$sql = "SELECT * FROM productos WHERE id='$id'";
$query = mysqli_query($connect,$sql);


$row = mysqli_fetch_array($query);

echo $row;
// if ($query) {
//     Header("Location: cafeteria.php");
// }
// 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Comprar</title>
</head>
<body>
    <div class="container mt-5">
        <form action="buy.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                <p>Producto</p>
                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre del Producto" value="<?php echo $row['Nombre'] ?>">
                <p>Cantidad disponible:</p><h5 style="display: inline-flex; color: green" value="<?php echo $row['Stock'] ?>"><?php echo $row['Stock'] ?></h5>
                <p>Cantidad a comprar</p>
                <input type="number" class="form-control mb-3" name="StockBuy" placeholder="Cantidad a Producto" value="<?php echo $row['Stock'] ?>">
                <?php 
                
                ?>
                <input type="submit" class="btn btn-primary btn-block" value="Comprar">
        </form>
    </div>
</body>
</html>