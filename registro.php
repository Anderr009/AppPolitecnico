<?php session_start(); ?>
<html>
	<head>
	<link rel="stylesheet" href="CSS/registro.css">
		<title>Formulario de Registro</title>
	</head>
	<body>


		<form class = "formulario" action="app/registro.php" method="POST">
				
				<h1 class="Create-acount" Crear una cuenta> </h1>
		<div class="container">
		<div class="row">
		<div class="col-md-6">	
				<h3>Registro</h3>
				<div class="iconos">
					<div class="border-iconos">
					<box-icon type='logo' name='instagram'></box-icon>
		</div>
		<!-- <div class="border-iconos">
		<box-icon name='twitter' type='logo' ></box-icon>

		</div> 
		<div class="border-iconos">
		<box-icon name='facebook-circle' type='logo' ></box-icon> -->

		</div>
						
				</div>
		<p class="Acount-free"> Crear cuenta gratis </p>
		  <div class="form-group">
		    <label for="username">Nombre de usuario</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="fullname">Nombre Completo</label>
		    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo">
		  </div>
		  <div class="form-group">
		    <label for="email">Correo Electronico</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="btn btn-success">Registrar</button>
		</form>
		</div>
		</div>
		</div>

		<script src="JS/Scripts/validar/login/valida_registro.js"></script>
	</body>
</html>