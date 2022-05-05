<link rel="stylesheet" href="../../../../CSS/bootstrap/css/bootstrap.css">
<?php  
    
    require("../../../../setup/datosConexion.php");
    require ("../../clases/producto.php");

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
           header("location:ins-imagen.php");
        }
    ?>
    <!-- Volver al dashboard es temporal a lo que se programa un inventario.-->
    <a href="../../Dashboard/dashboard.php">Volver</a>
    <h3 class="d-flex justify-content-center">Insertar Productos</h3>
    <br>
    <div class="container-sm d-flex justify-content-center">
            <form action="" method="POST" id="formulario" class="form-group col-5">
                <br>
                <label for="Name">Nombre del Producto:</label>
                <input type="text" name="nombre" id="" class="form-control">
        
               <!-- <label for="Date">fechaIngreso:</label>
                <input type="text" name="fecha" id="">-->
        
                <label for="Price">Precio:</label>
                <input type="text" name="precio" id="" class="form-control">
        
                <label for="cantidad">CantidadDISP:</label>
                <input type="text" name="cantidad" id="" class="form-control">
        
               <!-- <label for="Descuento">Descuento:</label>
                <input type="text" name="descuento" id="">-->
                <br>
                <input type="submit" value="Enviar" name="Enviar" class="btn btn-outline-success">
        
    </form>
    </div>
</table>
</body>
</html>