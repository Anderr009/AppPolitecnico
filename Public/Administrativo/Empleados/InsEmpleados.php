<link rel="stylesheet" href="../../../CSS/bootstrap/css/bootstrap.css"> 
<link rel="stylesheet" href="../../../CSS/producto.css">
<link rel="stylesheet" href="../../../CSS/styles.css">
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
    <?php
        //include("../../Index/include/sidebar.php");
        include "../../../CSS/css.php";
        require("../clases/empleado.php");
        require("../../../setup/datosConexion.php");
    ?>
    <a href="../Dashboard/Gestion-empleados/gestion.php"><button class="botones-azul">Volver</button></a>
    <!-- El input de texto en direccion es temporal hasta que se introduzca
        el script para la ubicacion, cada input va acompañado con su propio label.-->
        <br>
        <div class="container-sm">
            <br>
            <h3 class="titulo">Insertar Empleado</h3>
            <form action="" method="POST" id="formulario" class="form-group">
                <div class="form-row d-flex">
                    <!--Nombre_empleado-->
                    <div class="nombre form-group col-md-6" >
                        <label for="Name">Nombre del empleado</label>
                        <input type="text" name="Nombre" autocomplete="off" id="" class="form-control">
                    </div>
                    <!--Apellido_empleado-->
                    <div class="apellido form-group col-md-5">
                        <label for="Apellido" class="mx-2">Apellido:</label>
                        <input type="text" name="Apellido" autocomplete="off" id="" class="form-control mx-1">
                    </div>
                    <!--Cedula-->

                </div>
                <div class="form-row d-flex">
                    <div class="cedula form-group col-md-5" id="cedula">
                        <label for="Cedula">Cedula:</label>
                        <input type="text" name="Cedula" autocomplete="off" id="" class="form-control">
                    </div>
                    <!--Salario-->
                    <div class="monto form-group col-md-5" id="monto">
                        <label for="salario" class="mx-2">Salario:</label>
                        <input type="text" name="salario" class="form-control mx-2">
                    </div>
                </div>
                <div class="form-row d-flex">
                    <!--Hora_entrada-->
                    <div class="horaE form-group col-3">
                        <label for="HoraEntrada">Hora de entrada:</label>
                        <input type="time" name="HoraEntrada" autocomplete="off" id="" class="form-control">
                    </div>
                    <!--Hora_salida-->
                    <div class="horaH form-group col-3">
                        <label for="HoraSalida" class="mx-3">Hora salida:</label>
                        <input type="time" name="HoraSalida" autocomplete="off" id="" class="form-control mx-3">
                    </div>

                </div>
                <!--NombreUsuario-->
                <div class="nombreUs" id="nombreUs form-group">
                    <label for="NombreUser">Nombre de usuario:</label>
                    <input type="text" name="user" autocomplete="off" id="" class="form-control">
                </div>
                <!--Contraseña-->
                <div class="form-row d-flex">
                <div class="pass form-group" id="password">
                    <label for="Pass">Contraseña</label>
                    <input type="password" autocomplete="off" name="pass" id="" class="form-control">
                </div>
                <div class="pass2 form-group" id="password2">
                    <label for="Pass" class="mx-2">Repita la contraseña:</label>
                    <input type="password" autocomplete="off" name="pass2" id="" class="form-control mx-2">
                </div>
                </div>
                <!--Correo-->
                <div class="correo form-group" id="correo">
                    <label for="Correo">Correo:</label>
                    <input type="" autocomplete="off" name="correo" id="" class="form-control">
                </div>
                <!--Direcc-->
                <div class="direcc form-group">
                    <label for="Direccion">Direccion:</label>
                    <input type="text" autocomplete="off" name="direccion" placeholder="Direccion:"class="form-control">
                </div>
                <!--telefono-->
                <div class="telefono form-group" id="telefono">
                    <label for="telef">Telefono:</label>
                    <input type="text" name="telef" id="" class="form-control">
                </div>
                <br> 
                <input type="submit" value="Enviar" name="Enviar" class="btn btn-outline-success">
                <br>
                <br>
                <!--Script para validar el formulario-->
               <!-- <script src="../../../JS/scripts/validar/empleado/validarCorreo.js"></script>-->
                <?php
                    if(isset($_POST['Enviar'])){
                        //obtencion de datos
                        //datos para el usuario
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $pass2 = $_POST['pass2'];
                        //datos para el correo
                        $correo = $_POST['correo'];
                        //datos para el empleado
                        $nombre = $_POST['Nombre'];
                        $apellido = $_POST['Apellido'];
                        $cedula = $_POST['Cedula'];
                        $salario = $_POST['salario'];
                        $direccion = $_POST['direccion'];
                        $horaEntrada = $_POST['HoraEntrada'];
                        $horaSalida = $_POST['HoraSalida'];
                        //comprobacion (temporal luego sera reemplazada por js)
                        if($user == "" or $pass == "" or $correo =="" or $nombre =="" or $apellido == ""
                        or $cedula == "" or $horaEntrada =="" or $horaSalida == ""){
                            echo "Introduzca bien los campos";
                        }else{
                            //creacion de objetos
                            //usuario
                            $objUser= new Usuario($user,$pass);
                            //correo
                            $objCorreo = new Correo($correo,$pass);
                            $objCorreo->insertarCorreo();
                            $objUser->insertar(1);
                            //empleado
                            $empleado = new Empleado($nombre,$apellido,$cedula,$salario,$direccion,$horaEntrada,$horaSalida,$objUser,$objCorreo);
                            try{
                                if($empleado->InsertarEmpleado() != false){
                                //header("location:../Dashboard/dashboard.php");
                            
                                }
                            }catch(PDOException $e){
                                echo $e->getMessage();
                            }
                        }
                        //insertar prod
        
                        //header('location:scripts/insertar.php');
                    }
                ?>
            </form>

        </div>
</body>
</html>