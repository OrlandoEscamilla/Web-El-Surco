<?php 
include_once('procesos/conexion.php');
$id = $_REQUEST['id'];
$sql = "SELECT * FROM entradas WHERE id_entrada = '$id'";
$respuesta = $conexion->query($sql);
$contacto = $respuesta->fetch_assoc();

$sql2 = "SELECT COUNT(*) FROM entradas WHERE categoria_entrada = 'Agricultura'";
$respuesta2 = $conexion->query($sql2);
$contacto2 = $respuesta2->fetch_assoc();

$sql3 = "SELECT COUNT(*) FROM entradas WHERE categoria_entrada = 'Botanica'";
$respuesta3 = $conexion->query($sql3);
$contacto3 = $respuesta3->fetch_assoc();

$sql4 = "SELECT COUNT(*) FROM entradas WHERE categoria_entrada = 'Geología'";
$respuesta4 = $conexion->query($sql4);
$contacto4 = $respuesta4->fetch_assoc();

$sql5 = "SELECT COUNT(*) FROM entradas WHERE categoria_entrada = 'Riego'";
$respuesta5 = $conexion->query($sql5);
$contacto5 = $respuesta5->fetch_assoc();

$sql6 = "SELECT * FROM entradas ORDER BY id_entrada DESC LIMIT 0,1";
$respuesta6 = $conexion->query($sql6);
$contacto6 = $respuesta6->fetch_assoc();

$sql7 = "SELECT * FROM entradas ORDER BY id_entrada DESC LIMIT 1,1";
$respuesta7 = $conexion->query($sql7);
$contacto7 = $respuesta7->fetch_assoc();

$sql8 = "SELECT * FROM entradas ORDER BY id_entrada DESC LIMIT 2,1";
$respuesta8 = $conexion->query($sql8);
$contacto8 = $respuesta8->fetch_assoc();

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>El Surco, Fertilizantes, Agroquímicos y Semillas</title>
	<link rel="icon" type="image/png" href="img/icono.gif"/>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="fonts/fonts.css">
</head>
<body style="overflow-x: hidden;">

<header id="header" style="position: fixed;">
		<div class="headerCenter">
			<a href="index.html">
			<div class="containerLogo">
				<img src="img/logo.png">
			</div>
			</a>
			<nav>
				<ul>
					<a href="productos.html"><li>Productos</li></a>
					<a href="justintime.html"><li>Just In Time</li></a>
					<a href="enlaces.html"><li>Enlaces</li></a>
					<a href="http://soludrip.com/" target="_blank"><li>Soludrip</li></a>
					<a href="blog.php"><li>Blog</li></a>
					<a href="contacto.html"><li>Contacto</li></a>
					<a href="http://messenger.providesupport.com/messenger/0pjnpi32yua9a1hazh9r6hfqd1.html" target="_blank"><li style="position: relative; top: 6px;"><img style="width: 25px;"  src="img/chat-logoo.png"></li></a>
				</ul>
			</nav>
			<div  class="buttonResponsiv">
				<a href="http://messenger.providesupport.com/messenger/0pjnpi32yua9a1hazh9r6hfqd1.html" target="_blank"><img src="img/_Icono-chat.png"></a>
			</div>
			<div id="state" class="buttonResponsiv">
				<img src="img/_Icono-menu.png">
			</div>
		</div>
</header>

		<div class="menuResponsiv">
			<a href="productos.html">Productos</a>
			<a href="justintime.html">Just In Time</a>
			<a href="enlaces.html">Enlaces</a>
			<a href="http://soludrip.com/" target="_blank">Soludrip</a>
			<a href="blog.php">Blog</a>
			<a href="contacto.html">Contacto</a>	
	</div>



		<div class="containeImgmain">
			<img src="<?php echo 'img/blog/'.$contacto['img_entrada'];?>">
		</div>
		<div class="reviewCenterarticle">
			<h2><?php echo $contacto['titulo_entrada']; ?></h2>
		</div>


	<section id="containerSlider" style="max-width:1000px; margin:0 auto; height:auto; padding-top:50px; padding-bottom: 50px;">
		<section class="sectionArticle">
			

			<p>	
				<?php echo $contacto['descripcion_entrada']; ?>
			</p>

		</section>
		<aside>
			<h2>Categorias</h2>
			<a href="categorias.php?cat=Agricultura"><div><p>Agricultura<span>(<?php echo $contacto2['COUNT(*)']; ?>)</span></p></div></a>
			<a href="categorias.php?cat=Botanica"><div><p>Botanica<span>(<?php echo $contacto3['COUNT(*)']; ?>)</span></p></div></a>
			<a href="categorias.php?cat=Geología"><div><p>Geología<span>(<?php echo $contacto4['COUNT(*)']; ?>)</span></p></div></a>
			<a href="categorias.php?cat=Riego"><div><p>Riego<span>(<?php echo $contacto5['COUNT(*)']; ?>)</span></p></div></a>
			<div class="receint">
				<p>Mas Recientes</p>	
			</div>

		<div class="containerRecent">			
				<a href="articulo.php?id=<?php echo $contacto6['id_entrada'];?>"><div id="entrada1">
					 <div class="contaienerImg">
					 	<img src="<?php echo 'img/blog/'.$contacto6['img_entrada'];?>">
					 	<div class="titulo">
					 		<h1><?php echo $contacto6['titulo_entrada']; ?></h1>
					 	</div>
					 </div>
				</div></a>

				<a href="articulo.php?id=<?php echo $contacto7['id_entrada'];?>"><div id="entrada2">
						<div class="contaienerImg">
					 	<img src="<?php echo 'img/blog/'.$contacto7['img_entrada'];?>">
					 	<div class="titulo">
					 		<h1><?php echo $contacto7['titulo_entrada']; ?></h1>
					 	</div>
					 </div>				
					
				</div></a>

				<a href="articulo.php?id=<?php echo $contacto8['id_entrada'];?>"><div id="entrada3">
						<div class="contaienerImg">
					 	<img src="<?php echo 'img/blog/'.$contacto8['img_entrada'];?>">
					 	<div class="titulo">
					 		<h1><?php echo $contacto8['titulo_entrada']; ?></h1>
					 	</div>
					 </div>
					
				</div></a>
			</div>

		</aside>

		
	</section>


	<footer id="footer">
		<article id="articleSix">
				<div id="informationLeft">
				<div class="containerSocialNetwork">
					<div>
						<a target="_blank" href="https://www.facebook.com/El.Surco.Fertilizantes/?ref=br_rs"><img src="img/f.png"></a>
					</div>
					<div>
						<a target="_blank" href="https://twitter.com/elsurco_"><img src="img/t.png"></a>
					</div>
					<div>
						<a target="_blank" href="https://www.instagram.com/elsurcomx/"><img src="img/i.png"></a>
					</div>
				</div>
				<p class="copyhidden">COPYRIGHT2017</p>
				<a style="text-decoration:none;" href="mailto:ventas@elsurco.com"><p>ventas@elsurco.com</p></a>
				<p>LADA:01 800 849 3463/TEL. +52(833)226-1052</p>
				<P>Carretera Tampico Mante No. 2103-A Col. Del Bosque</P>
				<p>Tampico, Tamp. 89318 México.</p>
						
				</div>
				<div id="informationRight">
					<div id="containerViterra">
						<img src="img/Viterra_Logo.png">
					</div>
					<div id="allRightreserver">
						<p>Viterra y Asociados S.A. de C.V.</p>
						<p>Todos los Derechos Reservados.</p>
					</div>	
				</div>
		</article>
	</footer>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/events.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/scroll.js"></script>  
	<script>
              new WOW().init();
    </script>

     <script type="text/javascript">
    			$(document).ready(function(){		
				function cargar(change){
						
						if(change == 1){
						   $("#entrada1").fadeIn(500);
							$("#entrada2").hide();
							$("#entrada3").hide();
						
							change = 2;
							setTimeout(function() { cargar(change);} , 5500);
					}
						else if(change == 2){
							 $("#entrada1").hide();
							 $("#entrada2").fadeIn(500);
							 $("#entrada3").hide();
							change = 3;
							setTimeout(function() { cargar(change);} , 5500);
					}
						else if(change == 3){
							 $("#entrada1").hide();
							 $("#entrada2").hide();
							 $("#entrada3").fadeIn(500);
							change = 1;
							setTimeout(function() { cargar(change);} , 5500);
					}
				}
				window.onload = cargar(1);
				});
	</script>



</body>
</html>