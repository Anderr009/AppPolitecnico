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
    <a href="../index.php">Volver</a>
    <form action="" method="POST">
        <label for="Name">Nombre del Producto</label>
        <input type="text" name="nombre" id="">

       <!-- <label for="Date">fechaIngreso:</label>
        <input type="text" name="fecha" id="">-->

        <label for="Price">Precio:</label>
        <input type="text" name="precio" id="">

        <label for="cantidad">CantidadDISP:</label>
        <input type="text" name="cantidad" id="">

       <!-- <label for="Descuento">Descuento:</label>
        <input type="text" name="descuento" id="">-->

        <input type="submit" value="Enviar" name="Enviar">

    </form>
</table>
</body>
</html>