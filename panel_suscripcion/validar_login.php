<?php  

include("conexion_db.php");

if(isset($_POST['btn_ingresar'])){
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$consulta= "SELECT * FROM login WHERE usuario= '$usuario' AND clave_usuario= '$clave'";
	$respuesta = mysqli_query($conexion,$consulta);

	$validacion = mysqli_num_rows($respuesta);   

	
	

	if($validacion == 0){

		echo'<script type="text/javascript"> 

		alert("El usuario o contraseña son incorrectos"); window.location="login.php";

		</script>';	
	}

	else{

		session_start();	

		$_SESSION['usuario'] = $usuario;
		
		header("Location:index.php");

	}

}


