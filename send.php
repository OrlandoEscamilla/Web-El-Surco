<?php 

if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['message']) && !empty($_POST['message']) ){

$recaptcha = $_POST['g-recaptcha-response'];

if($recaptcha != ''){
	$secret = "6Ld8SU8UAAAAAFXA-bjR8JMYUbiZ_ZnGO3QdR7_c";
	$ip = $_SERVER['REMOTE_ADDR'];
	$var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
	$array = json_decode($var , true);
	if($array['success']){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$headers = "De: ".$email;
		$to = "ventas@elsurco.com";
		$subject = "Contacto desde la web";

		$msj = "Nombre: ".$name."\r\nCorreo: ".$email."\r\nMensaje: ".$message;
		mail($to, utf8_decode($subject), utf8_decode($msj), $headers);

		if(mail)
				{ 
				echo '<script type="text/javascript" >
     			alert("Correo enviado con exito");
           		 window.location="contacto.html";
         		 </script>';  
		}
		else{
				echo "El mail no ha sido enviado correctamente, intente más tarde"; 
			}
	}
	else{
		echo '<script type="text/javascript">
     		alert("array no success");
            window.location="contacto.html";
          </script>';
	}
}

	else{
			echo '<script type="text/javascript">
     		alert("verifique el llenado del recaptcha");
            window.location="contacto.html";
          </script>';
	}

}
else{
			echo '<script type="text/javascript">
     		alert("verifique el llenado de todos los campos.");
            window.location="contacto.html";
          </script>';
	}


?>