<?php session_start(); ?>
<html>
	<head>
		<link rel="stylesheet" href="CSS/styles.css">
		<title>Formulario de Registro</title>
	</head>
	<body>
		<?php     
			 if(isset($_SESSION['estado'])){ 
				 include("includes/headerR.php");
				}else{
					include("includes/header-NR.php");
					
				}
				?>
				<h2>Login</h2>

		<form role="form" name="login" action="app/login.php" method="post" class="">
		  <div class="">
		    <label for="username">Nombre de usuario o email</label>
		    <input type="text" class="" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="" id="password" name="password" placeholder="Contrase&ntilde;a">
			<br>
			Mantener sesion iniciada<input type="checkbox" name="mantener_sesion_abierta" value="si"><br>
		  </div>

		  <button type="submit">Acceder</button>
		</form>
		</div>
	</div>
</div>
		<script src="JS/Scripts/validar/login/valida_login.js"></script>
	</body>
</html>