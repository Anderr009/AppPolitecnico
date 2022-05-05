<?php  session_start();
        require("../../setup/datosConexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS -->
        <link rel="stylesheet" href="../../CSS/inicio/incio.css">
        <link rel="stylesheet" href="../../CSS/header/estilo.css">
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

    <section class="welcome">
            <div class="info">
                    <h1>La Capital</h1>
                    <p>Lorem ipsum dolor sit amet.</p>
            </div>
    </section>


    <div class="contenido">
    <?php



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
                        <div class="contenido">
                                <div class="pContenido">
                                        <div class="contenidoInfo">
                                                
                                                <div class="img card-img-top">
                                                        <img src="../../imagenes/productos/<?php echo$registro['foto']?>" width="200px" height="200px" alt="">
                                                </div>
                                                <div class="info card-body">
                                                        <h4 class="nombre card-title">
                                                                <?php echo $registro['Nombre'];?>
                                                        </h4>
                                                        <p class="infoProd card-footer">
                                                                Quedan: <?php echo $registro['Disponible'];?>
                                                        </p>
                                                </div>
                                                <div class="precio">
                                                        <?php echo $registro['Precio']."RD";?>
                                                </div>
                                                <div class="btn">
                                                    <a href="plantilla-prod.php?id=<?php echo $registro['id']?>">Comprar</a></div>
                
                                        </div>

                                </div>
                        </div>
                <?php
        }
}
?>
    </div>
    
>>>>>>> a753b3e63c7e1e7d18ef7afbc2b318aafb7238ba
</body>
</html>