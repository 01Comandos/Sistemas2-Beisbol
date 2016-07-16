<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/head_common.php'; ?>	
</head>
<body>	
	<?php include 'inc/header.php'; ?>

	<section class="loginContainer">
		<figure class="loginContainer-logotipo">
			<img src="img/logotipo-ticket.png" alt="logotipo de ticket winkek">
		</figure>
		
		<!--FORMULARIO DE LOGIN-->
		<form action="" class="loginForm">
			<!--CONTRASEÑA-->
			<div class="itemForm input-field">
				<label for="password">Contraseña Actual</label>		
				<input id="password" type="password" class="validate">         	
			</div>

			<!--CONTRASEÑA-->
			<div class="itemForm input-field">
				<label for="password">Nueva Contraseña</label>		
				<input id="password" type="password" class="validate">         	
			</div>

			<!--CONTRASEÑA-->
			<div class="itemForm input-field">
				<label for="password">Confirmar nueva Contraseña</label>		
				<input id="password" type="password" class="validate">         	
			</div>

			<!--BOTON INPUT-->
			<div class="itemForm submit">
				<input type="submit" value="¡Cambiar!" class="btn-main">
			</div>
		</form>	
	</section>
	

  	<?php include 'inc/footer_common.php'; ?>
</body>
</html>