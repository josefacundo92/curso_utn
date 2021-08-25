<?php 
session_start();
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion == ""){
	 header("Location:login.php");
}
?>

<?php

include('conexion_db.php');

if(isset($_POST['btn_agregar'])){	
	$apellido= $_POST['apellido'];
	$nombre= $_POST['nombre'];
	$correo= $_POST['correo'];
	

	//creación y ejecución consulta
	$consulta= "INSERT INTO suscriptores (apellido,nombre,email) VALUES('$apellido','$nombre','$correo')";
	$respuesta= mysqli_query($conexion,$consulta);

	header("location:index.php");	
	
}


?>


<?php include('includes/cabecera.php'); ?>	


<div class="container mt-4">
	<div class="row">

		<div class="col-lg-4 col-md-10 mx-auto">		


			<div class="card">
				<h3 class="text-center my-3">Registrar usuario</h3>
				<div class="card-body">
					<form action="agregar_usuario.php" method="POST">							

						<div class="grupo_formulario pb-3">
							<label for="apellido">Apellido:</label>
							<input type="text" name="apellido" id="apellido" class="formulario_input" placeholder="Ingrese un apellido" autocomplete="off" required>	
						</div>

						<div class="grupo_formulario pb-3">
							<label for="nombre">Nombre:</label>
							<input type="text" name="nombre" id="nombre" class="formulario_input" placeholder="Ingrese un nombre" autocomplete="off" required>	
						</div>

						<div class="grupo_formulario pb-3">
							<label for="correo">Email:</label>
							<input type="email" name="correo" id="correo" class="formulario_input" placeholder="Ingrese un email" autocomplete="off" required>	
						</div>


						<div class="grupo_formulario">
							<button type="submit" name="btn_agregar" class="btn_formulario">Añadir</button>
						</div>

					</form>
				</div>					
			</div>
		</div>

	</div>
</div>



<?php include('includes/pie.php'); ?>	