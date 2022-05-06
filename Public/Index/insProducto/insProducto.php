<?php  
    require("../../../setup/datosConexion.php");
    require("../../Administrativo/clases/producto.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar producto</title>
 <link rel="stylesheet" href="../../../CSS/insProducto.css">
 <link rel="stylesheet" href="../../../CSS/styles.css">
</head> 
<body>
    
    

    <?php
        if(isset($_POST['Enviar'])){
            $nombre =$_POST['nombre'];
            $precio = $_POST['precio'];
          //  $fecha = $_POST['fecha'];
            $disponibles = $_POST['cantidad'];
            $producto = new Producto($nombre,$disponibles,$precio);
            // $descuento = $_POST[''];
            session_start();
            $_SESSION['productoTemp'] = $producto;
            header("location:insImagen.php");
        }

    ?>

    <!-- Volver al dashboard es temporal a lo que se programa un inventario.-->
    <a href="../index.php"><button class="botones-azul">Volver</button></a>
    <form action="" method="POST">
        <h2 class="titulo">Publicar</h2>
        <hr>
        <div class="cont">
            <label for="Name" class="field">Nombre del Producto</label>
            <!-- <label for="Date">fechaIngreso:</label>-->
            <input type="text" name="fecha" id="">
        </div>
<div class="cont">
    <label for="Price">Precio:</label>
    <input type="text" name="precio" id="">
</div>
<div class="cont">
    <label for="cantidad">CantidadDISP:</label>
    <input type="text" name="cantidad" id="">   
    </div>

       <label for="Descuento">Descuento:</label>
        <input type="text" name="descuento" id="">
<br>
        <button name="Enviar" class="botones-azul">Enviar</button>

    </form>
</table>
</body>
</html>