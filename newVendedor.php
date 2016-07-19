<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/head_common.php'; ?>	
</head>
<body class="pagina">
	<?php include 'inc/header.php'; ?>

	<section class="u-ticket">
		<!--REGRESAR-->
		<article class="u-ticket-return">
			<a href="index.php" class="enlace">
				<span class="icon-Beisbol_left"></span>
				<p>Regresar</p>
			</a>
		</article>

		<!--FORUMARLIO NUEVO BOLETO-->
		<article class="u-ticket-container">
			<!--TITULO-->
			<div class="u-ticket-container-title">
				<h1>Nuevo Vendedor</h1>
			</div>

			<!--FORMULARIO-->
			<form action="" class="formPlay newVendedor">
				<!--upload imagen-->
				<div class="photoContainer">
					<ul class="photoList">
			      		<li>
			              <span class="icon-Beisbol_upload"></span>
			              <input type="file" class="file" name="logo" onchange='LimitAttach(this,1)'>
			            </li>
			      	</ul>
				</div>
				<!--ZONA A-->
				<div class="formContainer">
					<!--NOMBRE-->
					<div class="itemForm input-field">				
						<label for="name">Nombres</label>
						<input id="name" type="text" class="validate" placeholder="Nombres del Vendedor">
					</div>

					<!--APELLIDO-->
					<div class="itemForm input-field">				
						<label for="ape">Apellidos</label>
						<input id="ape" type="text" class="validate" placeholder="Apellidos del Vendedor">
					</div>

					<!--FECHA DE NACIMIENTO-->
					<div class="itemForm input-field">				
						<label>Fecha de Nacimiento</label>
						<input type="date" class="datepicker">
					</div>

					<!--DOCUMENTO DE IDENTIDAD-->
					<div class="itemForm input-field">				
						<label for="dni">Documento de Identidad</label>
						<input id="dni" type="text" class="validate" placeholder="Documento de Identidad">
					</div>
				</div>

				<!--ZONA B-->
				<div class="formContainer">
					<!--CORREO ELECTRONICO-->
					<div class="itemForm input-field">				
						<label for="email">Correo Electrónico</label>
						<input id="email" type="email" class="validate" placeholder="Correo Electrónico">
					</div>

					<!--CORREO ELECTRONICO 2-->
					<div class="itemForm input-field">				
						<label for="email-2">Confirmar Correo Electrónico</label>
						<input id="email-2" type="email" class="validate" placeholder="Confirmar Correo Electrónico">
					</div>

					<!--TELEFONO MOVIL-->
					<div class="itemForm input-field">				
						<label for="cel">Teléfono Móvil</label>
						<input id="cel" type="tel" class="validate" placeholder="Teléfono Móvil">
					</div>

					<!--TELEFONO HOGAR-->
					<div class="itemForm input-field">				
						<label for="cel-2">Teléfono Hogar</label>
						<input id="cel-2" type="tel" class="validate" placeholder="Teléfono Hogar">
					</div>
				</div>

				<!--BOTON INPUT-->
				<div class="itemForm submit">
					<input type="submit" value="Guardar" class="btn-main">
				</div>
			</form>
		</article>
	</section>

	<?php include 'inc/footer_common.php'; ?>	
</body>
</html>