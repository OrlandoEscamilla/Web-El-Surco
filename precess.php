<?php 

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
}
else{
	 echo '<script type="text/javascript" >
     		alert("verifique el llenado de todos los campos.");
            window.location="admin.html";
          </script>';
}

if($email == 'ventas@elsurco.com' && $password == 'adminelsurco2017'){
   	session_start();

   	$_SESSION['email_user'] = $email;
	$_SESSION['pass_user'] = $password;
    header("Location: panel.php"); 
}
else{
	 echo '<script type="text/javascript" >
     		alert("Acceso denegado, sus datos son erroneos.");
            window.location="admin.html";
          </script>';
}
 ?>