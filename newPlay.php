<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/head_common.php'; ?>	
</head>
<body>
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
				<h1>Nuevo Juego</h1>
			</div>

			<!--FORMULARIO-->
			<form action="" class="formPlay">
				<!--ZONA A-->
				<div class="formContainer">
					<!--EQUIPO 1-->
					<div class="itemForm input-field">
						<label>Equipo 1</label>
						<select class="browser-default">
						    <option value="" disabled selected>Elige</option>
						    <option value="1">Orioles</option>
						    <option value="2">Miami</option>
						    <option value="3">Mets</option>
						</select>
					</div>

					<!--EQUIPO 2-->
					<div class="itemForm input-field">
						<label>Equipo 2</label>
						<select class="browser-default">
						    <option value="" disabled selected>Elige</option>
						    <option value="1">Orioles</option>
						    <option value="2">Miami</option>
						    <option value="3">Mets</option>
						</select>
					</div>

					<!--DIA DE JUEGO-->
					<div class="itemForm input-field">				
						<label>Día del Juego</label>
						<input type="date" class="datepicker">
					</div>

					<!--HORA-->
					<div class="itemForm input-field">				
						<label>Hora</label>
						<input type="text" name="timepicker" class="timepicker"/>
					</div>
				</div>

				<!--ZONA B-->
				<div class="formContainer">
					<!--ESTADIUM-->
					<div class="itemForm input-field">
						<label>Estadium</label>
						<select class="browser-default">
						    <option value="" disabled selected>Elige</option>
						    <option value="1">Estadio A</option>
						    <option value="2">Estadio B</option>
						    <option value="3">Estadio C</option>
						    <option value="4">Estadio D</option>
						</select>
					</div>

					<figure>
						<img src="img/estadioA.jpg" alt="">
					</figure>
				</div>

				<!--ZONA C-->
				<div class="formContainer">
					<!--PRECIO 1-->
					<div class="itemForm input-field">				
						<label for="palco">Palco Oficial</label>
						<input id="palco" type="text" class="validate" placeholder="Precio">
					</div>

					<!--PRECIO 2-->
					<div class="itemForm input-field">				
						<label for="vip">VIP</label>
						<input id="vip" type="text" class="validate" placeholder="Precio">
					</div>

					<!--PRECIO 3-->
					<div class="itemForm input-field">				
						<label for="s-abajo">Sillas Abajo</label>
						<input id="s-abajo" type="text" class="validate" placeholder="Precio">
					</div>

					<!--PRECIO 4-->
					<div class="itemForm input-field">				
						<label for="s-arriba">Sillas Arriba</label>
						<input id="s-arriba" type="text" class="validate" placeholder="Precio">
					</div>

					<!--PRECIO 5-->
					<div class="itemForm input-field">				
						<label for="gradas">Gradas</label>
						<input id="gradas" type="text" class="validate" placeholder="Precio">
					</div>
				</div>

				<!--BOTON INPUT-->
				<div class="itemForm submit">
					<input type="submit" value="Crear Partido" class="btn-main">
				</div>
			</form>
		</article>
	</section>

	<?php include 'inc/footer_common.php'; ?>	
</body>
</html>