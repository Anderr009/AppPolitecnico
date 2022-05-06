<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../CSS/styles.css">
    <link rel="stylesheet" href="../../../../CSS/bootstrap/css/bootstrap.css">
    <title>Ajustes</title>
</head>
<body>
        <a href="http://localhost/AppPolitecnico/Public/administrativo/Empleados/modEmpleados.php"><button class="botones-azul">Volver</button></a>
        <h2 class="text-center">Ajustes Empleado</h2>
        <br>
    <?php
        //importando datos
        require("../../../../setup/datosConexion.php");     
        require("../../clases/empleado.php");
        
        //ajustes
        $id = $_GET['id'];
        $empleadoModif = GenerarEmpleado($id);
        //start session
        session_start();
        //añadiendo variables
        $_SESSION['ObjetoEmpleado'] = $empleadoModif;
        //obj
        $empleado = $_SESSION['ObjetoEmpleado'];
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Id del empleado:</th>
                <th>Modificando datos de:</th>
                <th>Modificar:</th>
            </tr>
        </thead>
            <tr>
                <td><?php echo $empleado->GetId()?></p></td>
                <td><?php echo $empleado->GetNombreC()?></td>
                <td>
                    <div class="btn">
                        <a href="modificar-niveluser/modNivelUser.php"><button class="btn btn-success">Nivel Usuario</button></a>
                        <a href="Modificar-empleado/modDatos.php"><button class="btn btn-warning">Datos Empleado</button></a>
                        <a href="Modificar-correo/modCorreo.php"><button class="btn btn-primary">Correo</button></a>
                    </div>
                </td>
            </tr>
    </table> 
    </table>
</body>
</html>