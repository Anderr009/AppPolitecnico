<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../CSS/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../../CSS/styles.css">
    <title>Publicaciones pendientes</title>
</head>
<body>
    <?php
        require("../clases/producto.php");
        require("../../../setup/datosConexion.php");

        //conexion 
        $conex = new Conexion();
        $cn = $conex->conexion();
        //
        $sqlSelect = "SELECT * FROM producto WHERE aprobada = 0";
        $consulta = $cn->prepare($sqlSelect);
        $consulta->execute();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $idP = $_GET['idP'];
            if ($id == 1) {
                $query = "UPDATE producto SET aprobada = 1 WHERE id = $idP";

            }else{
                $query = "DELETE FROM producto WHERE id = $idP";
            }
            $sentencia = $cn->prepare($query);
            $sentencia->execute();
            header("location:?");
            header("Refresh");
        }
    ?>

<br>
<a href="http://localhost/AppPolitecnico/Public/administrativo/publicaciones/dashboard.php" class="botones-azul">Volver al menu</a>
<h2 class="text-center">Publicaciones Pendientes</h2>
<br>
<br>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <td>Nombre del producto:</td>
                <td>fechIngreso</td>
                <td>Precio:</td>
                <td>Foto:</td>
            </tr>
        </thead>
        <?php
        while($registro = $consulta->fetch(PDO::FETCH_ASSOC)){
            ?>
                <tr>
                    <td><?php echo$registro['Nombre'];?></td>
                    <td><?php echo$registro['fechaIngreso'];?></td>
                    <td><?php echo$registro['Precio'];?></td>
                    <td><img src="../../../imagenes/productos/$registro['foto'];?>" width="100px" alt=""></td>
                    <td><a href="?id=<?php echo 1;?>&idP=<?php echo$registro['id']?>">Aprobar</a></td>
                    <td><a href="?id=<?php echo 0;?>&idP=<?php echo$registro['id']?>">Declinar</a></td>
                </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>