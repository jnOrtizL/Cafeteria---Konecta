<?php

include("connection.php");

$connect = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id='$id'";
$query = mysqli_query($connect,$sql);

$row = mysqli_fetch_array($query);

// echo $row;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Actualizar</title>
</head>
<body>
    <div class="container mt-5">
        <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">

                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre del Producto" value="<?php echo $row['Nombre'] ?>">
                <input type="text" class="form-control mb-3" name="Referencia" placeholder="Referencia del Producto" value="<?php echo $row['Referencia'] ?>">
                <input type="number" class="form-control mb-3" name="Precio" placeholder="Precio del Producto" value="<?php echo $row['Precio'] ?>">
                <input type="number" class="form-control mb-3" name="Peso" placeholder="Peso del Producto" value="<?php echo $row['Peso'] ?>">
                <input type="text" class="form-control mb-3" name="Categoria" placeholder="Categoria del Producto" value="<?php echo $row['Categoria'] ?>">
                <input type="number" class="form-control mb-3" name="Stock" placeholder="Cantidad del Producto" value="<?php echo $row['Stock'] ?>">
                <input type="date" class="form-control mb-3" name="FechaDeCreacion" placeholder="Fecha de creacion" value="<?php echo $row['FechaDeCreacion'] ?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
    </div>
</body>
</html>