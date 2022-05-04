<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>
    <?php
        require("../../setup/datosConexion.php");
        $id = $_GET['id'];
        $querySelect = "SELECT * FROM  producto where id = $id";
        //
        $conex = new Conexion();
        $cn = $conex->conexion();
        //
        $consulta = $cn->prepare($querySelect);
        $consulta->execute();
        $prod = $consulta->fetch(PDO::FETCH_ASSOC);
    ?>
    <a href="index.php">Volver al inicio</a>
    <section>
        <div class="titulo">     <h2><?php echo $prod['Nombre']?></h2></div>
        <div class="imagen"><img src="../../imagenes/productos/<?php echo $prod['foto']?>" width="200px"alt=""></div>
        <div class="informacion"><p><?php //echo $prod['']?></p></div>
        <div class="precio">     <p><?php echo $prod['Precio']?>RD</p></div>
        <div class="btn"> <a href="#">Contactar con el vendedor</a></div>
    </section>
</body>
</html>