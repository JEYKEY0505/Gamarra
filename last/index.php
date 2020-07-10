
<!DOCTYPE html>
<html>
<head>
	<title>Gammarra Online</title>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="Registro.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header class="header">
	<h1 class="logo"><a class="Segundo" href="esquema.html">GamarraOnline</a> </h1>
</header>
<form class="Suscripcion" method="post">
	<h1 class="H1">Registrate</h1>
<div class="Contenedor">

	
<div class="General">
	<i class="fa fa-user icon"></i>
	<input type="text" placeholder="Usuario" name="name">
</div>


<div class="General">
	<i class="fa fa-envelope icon"></i>
	<input type="datetime" id="email" placeholder="Correo Electronico" name="email">
</div>


<div class="General">
	<i class="fa fa-key icon"></i>
	<input type="password" placeholder="Contraseña" name="register">
</div>


<input type="submit" value="Registrarse" class="button">
<p>Al registrarte aceptas nuestras Condiciones de uso y Politica de privacidad</p>
<p>¿Ya tienes cuenta?<a href="Ingresar.html" class="Link">Iniciar Sesion</a></p>
</div>
</form>
<?php include("registrar.php"); ?>
</body>
</html>