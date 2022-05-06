<link rel="stylesheet" href="../../../../CSS/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../../../../CSS/producto.css">
<link rel="stylesheet" href="../../../../CSS/styles.css">

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
    <a href="http://localhost/AppPolitecnico/Public/administrativo/Dashboard/inventario/dashboard.php" class="botones-azul">Volver</a>
    <div class="container-sm">
        <br>
        <h3 class="titulo">Insertar Productos</h3>
            <form action="" method="POST" id="formulario" class="form-group">
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
                <input type="submit" value="Enviar" name="Enviar" class="btn btn-outline-primary">
                <br>
                <br>
        
    </form>
    </div>
</table>
</body>
</html>