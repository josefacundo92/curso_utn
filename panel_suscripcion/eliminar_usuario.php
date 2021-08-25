<?php 

include('conexion_db.php');


if(isset($_GET['id'])){
	$id= $_GET['id'];
	$consulta="DELETE FROM suscriptores WHERE id = '$id'";
	$respuesta= mysqli_query($conexion,$consulta);

	header("location:index.php");	
}

else{
	echo "error";
}

