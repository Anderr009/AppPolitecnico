<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/publicaciones.css">
    <link rel="stylesheet" href="../../CSS/styles.css">
    <style>
        body{
            background: #EEEEEE;
        }
    </style>
    <title>Perfil</title>
</head>
<body>
    <?php session_start();
        require("../../setup/datosConexion.php");
        require("../Administrativo/clases/user.php");
        require("../Administrativo/clases/producto.php");
        //--------
        $user =$_SESSION['usuario'];
        $id = $user['ID'];
        //query
        $sqlSelect1 = "SELECT * FROM publicaciones 
        INNER JOIN usuario ON publicaciones.fkUsuario = usuario.ID 
        INNER JOIN producto on publicaciones.fkProducto = producto.id 
        where usuario.ID = $id AND producto.aprobada = 1";
        //cn
        $conex = new Conexion();
        $cn = $conex->conexion();
        $consulta = $cn->prepare($sqlSelect1);
        $consulta->execute();
        if(isset($_GET['elimP'])){
            $elimP = $_GET['elimP'];
            $sqlDelete = "DELETE FROM PRODUCTO WHERE ID = $elimP";
            $sqlDelete2 ="DELETE FROM publicaciones WHERE $elimP";
            $sentencia1=$cn->prepare($sqlDelete);
            $sentencia2=$cn->prepare($sqlDelete2);
            $sentencia2->execute();
            $sentencia1->execute();
            header("location:?");
           // header("refresh");
        }
    ?>
    <div class="btnVolver">
        <a href="../Index/index.php"><button class="botones-azul">Volver</button></a>
    </div>
    <div class="datos">
        <div class="img">

        </div>
        <div class="info">
        <p>Nombre de usuario: <b><?php echo $user['nombreUsuario'];?></b></p>
        </div>
    </div>
    <div class="bloqueProd">
        <h2>Productos aprobados y publicados</h2>
        <table class="tabla">
            <thead class="cabeza-tabla">
                <tr>
                    <td>Nombre:</td>
                    <td>Precio:</td>
                    <td>Fecha de subida:</td>
                    <td>Disponible:</td>
                    <td>Foto:</td>
                    <td>Eliminar:</td>
                </tr>
            </thead>
            <?php
                while($registro = $consulta->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <tr class="sombreo">
                        <td><?php echo$registro['Nombre']?></td>
                        <td><?php echo$registro['Precio']?></td>
                        <td><?php echo$registro['fechaIngreso']?></td>
                        <td><?php echo$registro['Disponible']?></td>
                        <td><img src="../../imagenes/productos/<?php echo$registro['foto']?>" width="100px" alt=""></td>
                        <td><a href="?elimP=<?php echo $registro['fkProducto']?>"><button class="botones-azul">Eliminar</button></a></td>
                    </tr>
                        <?php
                }
            ?>
        </table>
    </div>
</body>
</html>