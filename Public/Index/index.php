<?php  session_start();
        require("../../setup/datosConexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS -->
        <link rel="stylesheet" href="../../CSS/styles.css">
        
        <title>Document</title>
    </head>
    <body>
        
        <?php 
     if(isset($_SESSION['estado'])){ 
         include("../../includes/headerR.php");
        }else{
        include("../../includes/header-NR.php");

    }

        ?>

        <div class="publicar">
            <a href="../cliente/publicar.php"><button>Publicar</button></a>
        </div>

    <div class="contenido">
    <?php


    include("../../includes/Contenido.php");

    if(isset($_SESSION['valorBuscar'])){
        $_SESSION['valorBuscar']+= 10;
    }
    
    MostrarProductos(10);
    ?>
<?php

//funcion para productos
function MostrarProductos($id){
        $conex = new Conexion();
        $cn = $conex->conexion();
        $idReducido=$id - 10;
        $sqlSelect = "SELECT * FROM producto WHERE aprobada = 1";
        $query = $cn->prepare($sqlSelect);
        $query->execute();
        while($registro = $query->fetch(PDO::FETCH_ASSOC)){
                ?>
                        <div class="bloque-prod">
                                <div class="img">
                                        <img src="../../imagenes/productos/<?php echo$registro['foto']?>" width="200px" height="200px" alt="">
                                </div>
                                <div class="info">
                                        <h4 class="nombre">
                                                <?php echo $registro['Nombre'];?>
                                        </h4>
                                        <p class="infoProd">
                                                Quedan: <?php echo $registro['Disponible'];?>
                                        </p>
                                </div>
                                <div class="precio">
                                        <?php echo $registro['Precio']."RD";?>
                                </div>
                                <div class="btn">
                                    <a href="plantilla-prod.php?id=<?php echo $registro['id']?>">Comprar</a></div>
                        </div>
                <?php
        }
}
?>
    </div>
    
</body>
</html>