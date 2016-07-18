<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/head_common.php'; ?>	
</head>
<body>	
	<?php include 'inc/header.php'; ?>
	
	<section class="u-general">
		<!--LISTADO DE PARTIDOS-->
		<article class="u-general-partidos">
			<div class="u-general-partidos-title">
				<h4>Total Vendido</h4>
				<h2>€ 20.060,36</h2>
			</div>

			<!--PARTIDO 1-->
			<div class="u-general-partidos-item">
				<a href="play.php">
					<h3>17:00 - 11Julio2016</h3>
					<!--EQUIPOS-->
					<div class="itemPartido">
						<!--EQUIPO 1-->
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

					<!--PRECIO Y ASIENTOS-->
					<div class="itemPartido">
						<h4>398 Asientos - A</h4>
						<h2>€ 5.064,00</h2>
					</div>
				</a>					
			</div>

			<!--PARTIDO 2-->
			<div class="u-general-partidos-item">
				<a href="play.php">
					<h3>15:00 - 11Julio2016</h3>
					<!--EQUIPOS-->
					<div class="itemPartido">
						<!--EQUIPO 1-->
						<figure>
							<img src="img/indios.jpg" alt="">
							<p>Indios</p>
						</figure>
						<div class="vs">
							<span class="icon-Beisbol_vs"></span>
						</div>
						<!--EQUIPO 2-->
						<figure>
							<img src="img/orioles.jpg" alt="">
							<p>Orioles</p>
						</figure>
					</div>

					<!--PRECIO Y ASIENTOS-->
					<div class="itemPartido">
						<h4>780 Asientos - B</h4>
						<h2>€ 9.287,50</h2>
					</div>
				</a>					
			</div>

			<!--PARTIDO 3-->
			<div class="u-general-partidos-item">
				<a href="play.php">
					<h3>18:00 - 12Julio2016</h3>
					<!--EQUIPOS-->
					<div class="itemPartido">
						<!--EQUIPO 1-->
						<figure>
							<img src="img/toronto.jpg" alt="">
							<p>Toronto</p>
						</figure>
						<div class="vs">
							<span class="icon-Beisbol_vs"></span>
						</div>
						<!--EQUIPO 2-->
						<figure>
							<img src="img/ubs.jpg" alt="">
							<p>UBS</p>
						</figure>
					</div>

					<!--PRECIO Y ASIENTOS-->
					<div class="itemPartido">
						<h4>312 Asientos - C</h4>
						<h2>€ 4.137,22</h2>
					</div>
				</a>					
			</div>

			<!--PARTIDO 4-->
			<div class="u-general-partidos-item">
				<a href="play.php">
					<h3>19:00 - 12Julio2016</h3>
					<!--EQUIPOS-->
					<div class="itemPartido">
						<!--EQUIPO 1-->
						<figure>
							<img src="img/mets.jpg" alt="">
							<p>Mets</p>
						</figure>
						<div class="vs">
							<span class="icon-Beisbol_vs"></span>
						</div>
						<!--EQUIPO 2-->
						<figure>
							<img src="img/miami.jpg" alt="">
							<p>Miami</p>
						</figure>
					</div>

					<!--PRECIO Y ASIENTOS-->
					<div class="itemPartido">
						<h4>157 Asientos - D</h4>
						<h2>€ 1.571,64</h2>
					</div>
				</a>					
			</div>
		</article>

		<!--ACCIONES-->
		<article class="u-general-actions">
			<!--CREAR-->
			<div class="u-general-actions-buttons">
				<!--NUEVO PARTIDO-->
				<div class="item">
					<a href="newPlay.php">
						<figure>
							<span class="icon-Beisbol_pelota"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
						</figure>
						<p>Nuevo Partido</p>
					</a>
				</div>

				<!--NUEVO VENDEDOR-->
				<div class="item">
					<a href="newVendedor.php">
						<figure>
							<span class="icon-Beisbol_newVendedor"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span></span>
						</figure>
						<p>Nuevo Vendedor</p>
					</a>
				</div>
			</div>


			<!--SEPARADOR NOTIFICACIONES-->
			<div class="u-general-actions-titleVendedor notificaciones">
				<figure>
					<span class="icon-Beisbol_home"></span>
				</figure>
				<p>Notificaciones</p>
				<!--BUSCAR-->
				<div class="search">
					<a href="#">
						<span class="icon-Beisbol_search"></span>
					</a>
				</div>
			</div>

			<!--LISTADO DE BOLETOS-->
			<ul class="u-general-actions-tickets">
				<!--TICKET 1-->
				<li>
					<!--DATOS DEL JUEGO-->
					<div class="ticket-juego">
						<!--PARTIDO-->
						<div class="partidoContainer">
							<h2>0F58E01</h2>
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

						<!--FECHA-->
						<div class="partidoContainer">
							<div class="item">
								<h4>17:00 - 11Julio2016</h4>
								<h3>Estadio A</h3>
							</div>							
						</div>
					</div>

					<!--DATOS DE BOLETO-->
					<div class="partidoEspectador">
						<!--DATOS DEL COMPRADOR-->
						<div class="item">
							<h3>@01Comandos</h3>
							<div class="item-date">
								<p>C.I: 5.547.382</p>
								<p>2 Asientos - VIP</p>
								<p>22 - 23</p>
							</div>
						</div>

						<!--TOTAL DEL BOLETO-->
						<div class="item">
							<h2>€ 30,10</h2>
						</div>
					</div>
				</li>
			</ul>
		</article>
	</section>
	

  	<?php include 'inc/footer_common.php'; ?>
</body>
</html>