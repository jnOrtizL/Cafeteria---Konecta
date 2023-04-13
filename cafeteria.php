<?php

include("connection.php");

$connect = connection();

$sql = 'SELECT *  FROM productos';
$query = mysqli_query($connect,$sql);

$row = mysqli_fetch_array($query);


$peg = ",";

$str = implode($peg, $row);

// echo $str;}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CAFETERIA</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <h1>INGRESE EL PRODUCTO</h1>
                <form action="insert.php" method="POST">
                    <input type="number" class="form-control mb-3" name="id" placeholder="ID Producto">
                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre del Producto">
                    <input type="text" class="form-control mb-3" name="Referencia" placeholder="Referncia del Producto">
                    <input type="number" class="form-control mb-3" name="Precio" placeholder="Precio del Producto">
                    <input type="number" class="form-control mb-3" name="Peso" placeholder="Peso del Producto">
                    <input type="text" class="form-control mb-3" name="Categoria" placeholder="Categoria del Producto">
                    <input type="number" class="form-control mb-3" name="Stock" placeholder="Cantidad del Producto">
                    <input type="date" class="form-control mb-3" name="FechaDeCreacion" placeholder="Fecha de creacion">

                    <input type="submit" class="btn btn-primary" value="Enviar">
                </form>
            </div>

            <div class="col-md-7">
                <h1>PRODUCTOS</h1>
                <table class="table table-bordered">
                    <thead class="table-success table-stripped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Referencia</th>
                            <th>Precio</th>
                            <th>Peso</th>
                            <th>Categoria</th>
                            <th>Cantidad</th>
                            <th>Fecha</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>                  
                    </thead>

                    <tbody>
                        <?php
                            $row = mysqli_fetch_array($query);
                            $connect = connection();
                            $sql = 'SELECT *  FROM productos';
                            $query = mysqli_query($connect,$sql);
                            while($row = mysqli_fetch_array($query)){
                            $peg = ",";
                            $str = implode($peg, $row);
                        ?>
                            <tr>
                                <th><?php   echo $row['id']?></th>
                                <th><?php   echo $row['Nombre']?></th>
                                <th><?php   echo $row['Referencia']?></th>
                                <th><?php   echo $row['Precio']?></th>
                                <th><?php   echo $row['Peso']?></th>
                                <th><?php   echo $row['Categoria']?></th>
                                <th><?php   echo $row['Stock']?></th>
                                <th><?php   echo $row['FechaDeCreacion']?></th>
                                <th><a href="update_data.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                                <th><a href="buy_data.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Comprar</a></th>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>