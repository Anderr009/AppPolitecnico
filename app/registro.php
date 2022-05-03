<?php

require("../setup/conexion2.php");
require("../setup/datosConexion.php");
//require("../Public/Administrativo/clases/correo.php");
//require("../Public/Administrativo/clases/user.php");
require("../Public/Administrativo/clases/cliente.php");

$usuario = $_POST['username'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$user = new  usuario($usuario,$password);
$user->insertar(4);
$correo = new Correo($email,$password);
$correo->insertarCorreo();
$cliente = new Cliente($fullname,$user,$correo);
$cliente->Insertar();
//$sql = "INSERT INTO `ulogin` (`id`, `usuario`, `fullname`, `email`, `contraseña`) VALUES (NULL, '$usuario', '$fullname', '$email', '$password');";

//$envio = mysqli_query($conexion, $sql);

if($envio){
	header("location:../Public/Index/index.php");
}else{
	header("location:../registro.php");

}
?>