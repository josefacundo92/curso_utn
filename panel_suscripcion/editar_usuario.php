<?php 
session_start();
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion == ""){
	 header("Location:login.php");
}
?>


<?php 
include('conexion_db.php');

if(isset($_GET['id'])){
	$id= $_GET['id'];
	$consulta = "SELECT * FROM suscriptores WHERE id ='$id'";
	$respuesta = mysqli_query($conexion,$consulta);
	$datos= mysqli_fetch_assoc($respuesta);
	
}
?>

<?php include('includes/cabecera.php'); ?>	


	<div class="container mt-4">
		<div class="row">
			<div class="col-lg-4 col-md-10 mx-auto">
				<div class="card">
					<h3 class="text-center my-3">Editar datos</h3>
					<div class="card-body">
						<form action="actualizar_datos.php" method="POST">

							<div class="grupo__formulario pb-3">								
								<input type="hidden" name="id" value="<?php echo $datos['id'] ?>" class="form-control">	
							</div>	

							<div class="grupo_formulario pb-3">
								<label for="apellido">Apellido:</label>
								<input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $datos['apellido'] ?>"  placeholder="Ingrese un apellido" required>	
							</div>

							<div class="grupo_formulario pb-3">
								<label for="nombre">Nombre:</label>
								<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $datos['nombre'] ?>" placeholder="Ingrese un nombre" required>	
							</div>

							<div class="grupo_formulario pb-3">
								<label for="correo">Email:</label>
								<input type="email" name="correo" id="correo" class="form-control" value="<?php echo $datos['email'] ?>"  placeholder="Ingrese un email" required>	
							</div>
							

							<div class="grupo_formulario">
								<button type="submit" name="btn_agregar" class="btn_formulario">Actualizar</button>
							</div>

						</form>
					</div>					
				</div>
			</div>
		</div>
	</div>



<?php include('includes/pie.php'); ?>	