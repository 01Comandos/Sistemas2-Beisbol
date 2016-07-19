<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/head_common.php'; ?>	
</head>
<body class="bodyLogin pagina">
	
	<!--LOGIN-->
	<section class="loginContainer">
		<figure class="loginContainer-logotipo">
			<img src="img/logotipo-ticket.png" alt="logotipo de ticket winkek">
		</figure>
		
		<!--FORMULARIO DE LOGIN-->
		<form action="" class="loginForm">
			<!--USUARIO-->
			<div class="itemForm input-field">				
				<label for="user">Usuario</label>
				<input id="user" type="text" class="validate">	          	
			</div>

			<!--CONTRASEÑA-->
			<div class="itemForm input-field">
				<label for="password">Contraseña</label>		
				<input id="password" type="password" class="validate">	          	
			</div>

			<!--BOTON INPUT-->
			<div class="itemForm submit">
				<input type="submit" value="Acceder" class="btn-main">
			</div>

			<div class="recoverPassword">
				<p>Recuperar <a href="#" id="recover">mi contraseña</a></p>
			</div>
		</form>

		<!--RECUPERAR PASSWORD-->
		<form action="" class="recoverForm">
			<!--TEXTO TITULO-->
			<div class="recoverPassword">
				<p>Te enviaremos una provisional</p>
			</div>

			<!--USUARIO-->
			<div class="itemForm input-field">				
				<label for="user">Usuario</label>
				<input id="user" type="text" class="validate">	          	
			</div>

			<!--BOTON INPUT-->
			<div class="itemForm submit">
				<input type="submit" value="Enviar" class="btn-main">
			</div>

			<div class="recoverPassword">
				<p><a href="#" id="login">Regresar</a></p>
			</div>			
		</form>


		
	</section>


  	<?php include 'inc/footer_common.php'; ?>
</body>
</html>