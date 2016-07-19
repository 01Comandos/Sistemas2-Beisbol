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
				<h1>Nuevo Boleto</h1>
			</div>

			<!--FORMULARIO-->
			<form action="">
				<!--DATOS BOLETO-->
				<div class="formContainer">
					<!--DATOS DEL JUEVO-->
					<div class="itemPlay">
						<h3>17:00 - 11Julio2016
							<br>Estadio A
						</h3>
						<div class="partidoContainer">
							<figure>
								<img src="img/miami.jpg" alt="">
								<p>Miami</p>
							</figure>
							<div class="vs">
								<span class="icon-Beisbol_vs"></span>
							</div>
							<!--EQUIPO 2-->
							<figure>
								<img src="img/yankees.jpg" alt="">
								<p>Yankees</p>
							</figure>
						</div>
					</div>

					<!--DATOS COMPRADOR-->
					<div class="itemCliente">
						<!--DNI-->
						<div class="itemForm input-field">				
							<label for="dni">DNI</label>
							<input id="dni" type="text" class="validate">	          	
						</div>

						<!--USUARIO-->
						<div class="itemForm input-field">				
							<label for="user">Nombre</label>
							<input id="user" type="text" class="validate" placeholder="Nombre del cliente">	          	
						</div>

						<!--TIPO BOLETO-->
						<div class="itemForm input-field">
							<label>Tipo de Boleto</label>
							<select class="browser-default">
							    <option value="" disabled selected>Elige</option>
							    <option value="1">VIP</option>
							    <option value="2">General</option>
							    <option value="3">Gradas</option>
							</select>
							<span>20/100</span>
						</div>

						<!--CANTIDAD-->
						<div class="itemForm input-field">				
							<label for="cantidad">Cantidad</label>
							<input id="cantidad" type="text" class="validate">	          	
						</div>

						<!--TOTAL-->
						<div class="itemForm total">
							<figure>
								<span class="icon-Beisbol_money"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span></span>
							</figure>
							<p>€ 51,74</p>
						</div>
					</div>
				</div>

				<!--DATOS PERSONALES-->
				<div class="formContainer">
					<!--NACIMIENTO Y TELEFONO-->
					<div class="item">
						<!--FECHA DE NACIMIENTO-->
						<div class="itemForm input-field">				
							<label for="user">Fecha de Nacimiento</label>
							<input type="date" class="datepicker">	          	
						</div>

						<!--TELEFONO-->
						<div class="itemForm input-field">				
							<label for="phone">Teléfono</label>
							<input id="phone" type="tel" class="validate" placeholder="Número de Teléfono">	          	
						</div>
					</div>

					<!--DIRECCION-->
					<div class="item">
						<div class="itemForm input-field">				
							<label for="textarea1">Dirección</label>
							<textarea id="textarea1" class="materialize-textarea" placeholder="Dirección de Habitación"></textarea>
						</div>
					</div>						
				</div>

				<!--BOTON INPUT-->
				<div class="itemForm submit">
					<input type="submit" value="Vender Boleto" class="btn-main">
				</div>
			</form>
		</article>
	</section>

	<?php include 'inc/footer_common.php'; ?>	
</body>
</html>