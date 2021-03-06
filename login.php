<?php session_start(); ?>
<html>

<head>
<link rel="stylesheet" href="CSS/login.css">
	<title>Formulario de Registro</title>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6">

				<h2>Login</h2>

				<form role="form" name="login" action="app/login.php" method="post">
					<div class="form-group">
						<span></span>
						<label for="username">Usuario </label>
						<input type="text" class="form-control" id="username" name="username"
							placeholder="Nombre de usuario">
					</div>
					<div class="form-group">
						<span></span>
						<label for="password">Contrase&ntilde;a </label>
						<input type="password" class="form-control" id="password" name="password"
							placeholder="Contrase&ntilde;a">
						<br>
					</div>
					<div class="form-group ">
						<label for="checkbox" class="margen">Mantener sesion iniciada</label>
						<input type="checkbox" name="mantener_sesion_abierta" value="si" class="checkbox">
					</div>

					<button type="submit" class="btn btn-primary">Acceder</button>
				</form>
				<div class="signup-link">
					No estas registrado? <a href="registro.php"> signup
				</div>
			</div>
		</div>
	</div>
	<script src="JS/Scripts/validar/login/valida_login.js"></script>
</body>

</html>