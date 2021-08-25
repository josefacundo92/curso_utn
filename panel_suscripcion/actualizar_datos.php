<?php 

include('conexion_db.php');
$id= $_POST['id'];
$apellido= $_POST['apellido'];
$nombre= $_POST['nombre'];
$correo= $_POST['correo'];

$consulta = "UPDATE suscriptores SET apellido = '$apellido', nombre='$nombre',email='$correo' WHERE id='$id' ";
$respuesta = mysqli_query($conexion,$consulta);



if($respuesta){	
	header("location:index.php");
}

else{
	echo "error";
}

