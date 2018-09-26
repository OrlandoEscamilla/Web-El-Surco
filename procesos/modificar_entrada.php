<?php 
@session_start();
if(isset($_SESSION['email_user']) and  isset($_SESSION['pass_user'])){
	$email = $_SESSION['correo_user'];
	$contrasena = $_SESSION['pass_user'];

	include("conexion.php");
	$id = $_REQUEST['id'];
	$sql = "SELECT * FROM entradas WHERE id_entrada = '$id'";
	$respuesta = $conexion->query($sql);
	$contacto = $respuesta->fetch_assoc();
}
else{
header("Location: admin.html");	
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CMS El Surco</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../fonts/fonts.css">
	<script src="../ckeditor/ckeditor.js"></script>
	<script src="../ckfinder/ckfinder.js"></script>
</head>
<body>


	<header id="header" style="background-color:#007c57; height: 59px;">
		<div class="headerCenter">
			<a href="index.html">
			<div class="containerLogo">
				<img src="../img/logo.png">
			</div>
			</a>
			<nav>
				<ul>
					<a href="../panel.php"><li>Entradas</li></a>
					<a href="../nueva_entrada.php"><li>Nueva Entrada</li></a>
					<a href="../cerrar_sesion.php"><li>Cerrar Sesión</li></a>
				</ul>
			</nav>
		</div>
	</header>
	<div class="containerTittlepanel">
		<h2>Modificar Entrada</h2>
	</div>

<section id="inicio">

	<div id="containerNuevaentrada">
		<form  action="actualizar.php" method="post" enctype="multipart/form-data">
			
			<input type="hidden" name="id" value="<?php echo $contacto['id_entrada']; ?>"></input>
			<input type="text" name="titulo" placeholder="Introduce el título aquí..." value="<?php echo $contacto['titulo_entrada']; ?>" required>
			<textarea id="editor1" name="descripcion" placeholder="Descripción entrada..."><?php echo $contacto['descripcion_entrada']; ?></textarea> 
			<br>  
			<select name="categoria" required>
			  <option selected value="<?php echo $contacto['categoria_entrada']; ?>"><?php echo $contacto['categoria_entrada']; ?></option>
			  <option value="Agricultura">Agricultura</option>
			  <option value="Botanica">Botanica</option>
			  <option value="Geología">Geologia</option>
			  <option value="Riego">Riego</option>
			</select>
			<input id="date" type="date" name="fecha" placeholder="fecha" value="<?php echo $contacto['fecha_entrada']; ?>" required>
			<input id="file" type="file" name="img" placeholder="Imagen de la entrada" value="<?php echo $contacto['img_entrada']; ?>" required>
			<br>
			<input id="buttonNuevaentrada" type="submit" value="Actualizar"></input>
		</form>		
	</div>
</section>

<script type="text/javascript">
	window.onload = function(){
		editor = CKEDITOR.replace("editor1")
		CKFinder.setupCKEditor(editor,'http://localhost/elsurco/ckfinder')
	}
	
</script>
	

</body>
</html>