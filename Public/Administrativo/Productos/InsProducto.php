<?php  
    
    require_once "../../../setup/datosConexion.php";
    require_once "metodosCrud.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insProducto</title>
</head>
<body>
    <!-- El input de texto en direccion es temporal hasta que se introduzca
        el script para la ubicacion, cada input va acompañado con su propio label.-->
    <form action="" method="POST">
        <label for="Name">Nombre del Producto</label>
        <input type="text" name="nombre" id="">

        <label for="Date">fechaIngreso:</label>
        <input type="text" name="fecha" id="">

        <label for="Price">Precio:</label>
        <input type="text" name="precio" id="">

        <label for="cantidad">CantidadDISP:</label>
        <input type="text" name="cantidad" id="">

        <label for="Descuento">Descuento:</label>
        <input type="text" name="descuento" id="">

        <input type="submit" value="Enviar" name="Enviar">

    </form>
    <br>
</table>
</body>
</html>