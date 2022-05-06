<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../CSS/styles.css">
    <link rel="stylesheet" href="../../../CSS/header/estilo.css">
    <link rel="stylesheet" href="../../../CSS/bootstrap/css/bootstrap.css">
</head>
<body>
    <?php
        //  
        require("../../../setup/datosConexion.php");
        require('../clases/empleado.php');
        include("../../../includes/headerAdmin.php");
        //
        
        //  require('../../../setup/datosConexion.php');
        if(isset($_GET['id'])){
            $valorElim = $_GET['id'];
            $valorUs = $_GET['idUs'];
            $valorCor = $_GET['idCor'];
            //eliminar en caso de que presionen el boton de eliminar
            if($valorElim != null){
                EliminarEmpleado($valorElim);
                EliminarUsuario($valorUs);
                EliminarCorreo($valorCor);
                header("location:modEmpleados.php");
            }
        }
        //conexion
        $conex = new Conexion();
        $cn = $conex-> conexion();
        //consulta para ver los empleados
        $sql = "SELECT empleado.ID,empleado.salario,empleado.Nombre,empleado.Apellido,empleado.cedula,
        empleado.HoraEntrada,correo.correo,usuario.nombreUsuario,usuario.Nivel,empleado.fkUsuario,empleado.fkCorreo
        FROM empleado 
        INNER JOIN correo on correo.ID = empleado.fkCorreo
        INNER JOIN usuario on usuario.ID = empleado.fkUsuario;";
        //consulta para contar los empleados
        
        $queryCount = "SELECT COUNT(ID) as Empleados FROM empleado";
        $SQLContador = $cn->prepare($queryCount);
        $SQLContador->execute();
        $contador = $SQLContador->fetch(PDO::FETCH_ASSOC);
    ?>  
    <br>
    <a href="http://localhost/AppPolitecnico/Public/administrativo/Dashboard/Gestion-empleados/gestion.php" class="botones-azul">Volver al menu</a>

    
    <div class="informacion ">
        <h2 class="text-center">Número de empleados: <?php echo $contador['Empleados']?> </h2>
        <br>
        <a href="Buscador/buscador.php"><button class="btn btn-primary">Buscar por filtro</button></a>
        <br>
        <br>
    </div>
    <table class="table table-hover ">
        <thead class="table-dark">

            <tr>
                <td>Nombre completo:</td>
                    <td>Cedula</td>
                    <td>Hora de entrada:</td>
                    <td>Correo:</td>
                    <td>Nombre de usuario:</td>
                    <td>Salario del emepleado:</td>
                    <td colspan="2">Opciones:</td>
                </tr>
        </thead>
            <tbody class="">
                <?php
                //
                $consulta = $cn -> prepare($sql);
                try{
                    $consulta->execute();
                }catch(PDOException $e){
                    $e->getMessage();
                }
                while($resultado = $consulta->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <tr>
                         <td><?php echo $resultado['Nombre'];?></td>
                         <td><?php echo $resultado['cedula'];?></td>
                         <td><?php echo $resultado['HoraEntrada'];?></td>
                         <td><?php echo $resultado['correo'];?></td>
                         <td><?php echo $resultado['nombreUsuario'];?></td>
                         <td><?php echo $resultado['salario'];?></td>
                         <?php echo $resultado['fkCorreo'];?>
                         <td><a href="FormAjustes/formAjustes.php?id=<?php echo$resultado['ID']?>"><button class="btn btn-warning">Ajustes</button></a></td>
                        <td><a href="?id=<?php echo$resultado['ID']?>&idUs=<?php echo$resultado['fkUsuario']?>&idCor=<?php echo$resultado['fkCorreo']?>"><button class="btn btn-danger">Eliminar</button></a></td>
                    </tr>
                
                <?php 
                }
        
                ?>
            </tbody>
        </table>
</body>
</html>