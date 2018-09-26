
		
		<?php 
			include_once('procesos/conexion.php');

			$nombre = $_GET['q'];
			$sql = "SELECT * FROM entradas WHERE titulo_entrada LIKE '%$nombre%'";
			$respuesta = $conexion->query($sql);

			$contador = 0;
			while ($contacto = $respuesta->fetch_assoc()) { ?>

			<?php  
			if ($contador == 0){?>
				<br><br>
				<section class="containerBlog">
			<?php } ?>

			<article>
				<div class="containerImgentry">
					<img src="<?php echo 'img/blog/'.$contacto['img_entrada']; ?>">
				</div>
				<?php $titulo = $contacto['titulo_entrada'];  //"Hola mundo"
					  $longitud_titulo = mb_strlen($titulo); //10
					  $longitud_nombre = mb_strlen($nombre); //4
					  $posicion = stripos($titulo , $nombre); //5
					  $part_one = substr($titulo,0, $posicion);
					  $part_two = $posicion + $longitud_nombre;
					  $part_three = substr($titulo, $part_two, $longitud_titulo);
					  $nombre = "<span style='background-color:red; color:yellow;'>".$nombre."</span>";

					  $nuevo_titulo = $part_one.$nombre.$part_three;
					  $nombre = $_GET['q'];
					  $part_one = "";
					  $part_two = "";
					  $part_three = ""; 

				?>
				<h3><?php echo $nuevo_titulo; ?></h3>


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
	
