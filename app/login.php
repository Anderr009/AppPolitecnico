<?php

require("../setup/datosConexion.php");
require("../Public/Administrativo/clases/user.php");

$conexion = new Conexion();
$conex = $conexion->conexion();
$usuario = $_POST['username'];
$cont = $_POST['password'];

/*$sentenciaSQL="SELECT id FROM usuario WHERE nombreUsuario = '$usuario' and contraseña = '$cont';";
$queryy = $conex->prepare($sentenciaSQL);
$queryy->execute();
$busca = $queryy->fetch(PDO::FETCH_ASSOC);
*/
// if (isset($_POST["mantener_sesion_abierta"])) {
//         setcookie("COOKIE_INDEFINED_SESSION", TRUE, time()+31622400);
// 		setcookie("COOKIE_DATA_INDEFINED_SESSION[username]", $usuario, time()+31622400);
//         setcookie("COOKIE_DATA_INDEFINED_SESSION[password]", $cont, time()+31622400);
// 		echo "Sesión abierta indefinidamente.<br/>";
// } else {
// 	setcookie("COOKIE_CLOSE_NAVEGADOR", TRUE, 0) . "<br/>";
// 	echo "Sesión abierta hasta que cierre el navegador.<br/>";
// }


// if (isset($_COOKIE['COOKIE_INDEFINED_SESSION'])) {
// 	if ($_COOKIE['COOKIE_INDEFINED_SESSION']) {
// 		$nombre_user = $_COOKIE['COOKIE_DATA_INDEFINED_SESSION']['nombre'];
// 		$password_user = $_COOKIE['COOKIE_DATA_INDEFINED_SESSION']['password'];
// 		//AQUI HACES LA QUERY PARA BUSCAR EN TU BD UN USUARIO Y SU PASSWORD CON LAS VARIABLES ANTERIORES
// 		header("Location: home.php"); //envias al usuario a home.php si se lo encontro en la BD!
// 	}
// }


	
$query = $conex->prepare("SELECT * FROM usuario WHERE nombreUsuario = '$usuario' and
						contraseña = '$cont'");
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);


if($usuario = $result['nombreUsuario'] || $cont = $result['contraseña']){
	session_start();
	$_SESSION['iniciado'] = $result['ID'];
	$_SESSION['usuario'] = $result;
	$_SESSION['nivel'] = $result['Nivel'];
	$_SESSION['estado'] = true;
	
	header("location:../Public/Index/scripts/validar-nivel.php");
	}else{
	header("location:../login.php");
}

#$username = $_GET['usuario'];
#$contraseña = $_GET['contraseña'];

?>