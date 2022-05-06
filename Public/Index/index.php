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
            <div class="contenedor">
                    <div class="logo">
                            <img src="../../imagenes/capitalLogo.png" width="300px" alt="">
                    </div>
                    <div class="info">
                            <h1>La capital</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, impedit laborum. Fugit aspernatur deserunt corporis laboriosam vero inventore harum minus ab consequuntur architecto dolorem voluptas ipsa, nesciunt officiis id placeat..</p>
                    </div>
            </div>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave" >
                        <path fill="red"  fill-opacity="1" d="M0,320L40,309.3C80,299,160,277,240,250.7C320,224,400,192,480,160C560,128,640,96,720,74.7C800,53,880,43,960,69.3C1040,96,1120,160,1200,170.7C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
                </svg>-->
    </section>

        <section class="productos">
                <div class="inf">
                        <h2>Productos disponibles</h2>
                </div>
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
                                      
                                <div class="producto">
                                        <div class="img card-img-top">
                                                <img src="../../imagenes/productos/<?php echo$registro['foto']?>" width="150px" height="200px" alt="">
                                        </div>
                                        <div class="contenedorProd">
                                                <div class="infoProd">
                                                        <h4 class="tituloProd">
                                                                <?php echo $registro['Nombre'];?>
                                                        </h4>
                                                        <p class="infoProd card-footer">
                                                                Quedan: <?php echo $registro['Disponible'];?>
                                                        </p>
                                                        <p><?php echo $registro['Precio']."RD";?></p>
                                                </p>
                                                        </h4>
                                                </div>
                                                <div class="btn">
                                                                <a href="plantilla-prod.php?id=<?php echo $registro['id']?>">Comprar</a>
                                                        </div>
                                        </div>
                
                                </div>
            
                                <?php
                        }
                }
                ?>
                </div>
</section>

</body>
</html>