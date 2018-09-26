<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>El Surco, Fertilizantes, Agroquímicos y Semillas</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="fonts/fonts.css">



<style type="text/css">
	.containerBuscar{
		width: 400px;
		height: auto;
		margin: 0 auto;
		margin-top: 20px;
		text-align: center;
	}

	.containerBuscar button{
		height: 30px;
		width: 80px;	
		background-color: #fea219;
		border: none;
		border-radius:3px;
		cursor:pointer;
	}

	.containerBuscar #campo{
		height: 30px;
		width: 250px;
	}

</style>
</head>
<body style="overflow-x: hidden;">


<script>
function showUser(str) {

    if (str == ""){
        alert("Porfavor llene el campo de busqueda");
       
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                var valor = document.getElementById("campo").value;
                document.getElementById("resultado").innerHTML = "Resultados para: "+valor;
            }
        };
        xmlhttp.open("GET","buscar.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>




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
			<a href="blog.html">Blog</a>
			<a href="contacto.html">Contacto</a>
			
		</div>


	<div id="imageChange3" class="backgrounds parallax-window2" data-parallax="scroll" data-image-src="img/Foto-Blog.png">
	</div>



	<section class="review">
		<div class="reviewCenter">
			<h1>Noticias</h1>
			<div>
			<p class="reviewText">Conoce sobre las noticias más importantes de nuestra empresa y sector agricola.</p>
			</div>
		</div>
	</section>











	<div class="containerBuscar">
		<input id="campo" type="text" name="search" placeholder="Buscar entrada...">
		<button type="button" onclick="showUser(campo.value)">Buscar</button>
		<p id="resultado" style=" margin-top:15px; font-style: oblique;"></p>
	</div>

	<div id="txtHint">
	<section id="containerSlider" style="height: auto; padding-top: 50px; ">
		
		<?php 
			include_once('procesos/conexion.php');
			$categoria = $_GET['cat'];

			$sql = "SELECT * FROM entradas WHERE categoria_entrada = '$categoria'";
			$respuesta = $conexion->query($sql);

			$contador = 0;
			while ($contacto = $respuesta->fetch_assoc()) { ?>

			<?php  
			if ($contador == 0) { ?>
				<section class="containerBlog">
			<?php } ?>

			<article>
				<div class="containerImgentry">
					<img src="<?php echo 'img/blog/'.$contacto['img_entrada']; ?>">
				</div>
				<h3><?php echo $contacto['titulo_entrada']; ?></h3>

				<p><?php echo $contacto['fecha_entrada']; ?></p>
				<a href="articulo.php?id=<?php echo $contacto['id_entrada']; ?>"><button>Leer más</button></a>
			</article>

			<?php 
			$contador = $contador + 1;
			?>

			<?php 
			if ($contador == 2) { ?>
			</section>	
			<?php 
				$contador = 0;
				} 
			?>
		
			<?php 
				}
 			?>


		 
	</section>	

	</div>
		
			



		
	</section>


	<section class="containerAttention wow slideInUp">
		<div class="divAttention">
			<div class="divleftone">
				<img src="img/audifonosicon.png">
			</div>
			<div class="divlefttwo">
				<h2>Atención en Linea</h2>
			</div>

			<a href="http://messenger.providesupport.com/messenger/0pjnpi32yua9a1hazh9r6hfqd1.html" target="_blank">
			<button class="buttonRight">
				<p>¿Tienes alguna pregunta? estamos para atenderte</p>
			</button></a>
		</div>
	</section>


	<footer id="footer">
		<article id="articleSix">
				<div id="informationLeft">
				<div class="containerSocialNetwork">
					<div>
						<a target="_blank" href="https://www.facebook.com/El.Surco.Fertilizantes/?ref=br_rs"><img src="img/f.png"></a>
					</div>
					<div>
						<a target="_blank" href="https://www.instagram.com/elsurcomx/"><img src="img/t.png"></a>
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
	
	<script src="js/wow.min.js"></script>
	<script src="js/scroll.js"></script>  
	<script>
              new WOW().init();
    </script>

    <script type="text/javascript">
    	$(document).ready(function(){
    
    var valor = 1;
    $("#state").click(function(){ 
			if(valor == 1){
				$('.menuResponsiv').css('transform', 'translateX(0%)');
				valor = 2;
			}	
			else{
				$('.menuResponsiv').css('transform', 'translateX(100%)');
				valor = 1;
			}       
    });
});

    </script>
</body>
</html>