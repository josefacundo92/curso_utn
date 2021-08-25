<?php 
session_start();
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion == ""){
	header("Location:login.php");
}

?>


<?php
include('conexion_db.php'); 
$consulta= "SELECT* FROM suscriptores";
$respuesta= mysqli_query($conexion,$consulta);						
$num_usuarios= mysqli_num_rows($respuesta);	
?>

<!-- MENU PRINCIPAL-->

<?php include('includes/cabecera.php'); ?>	




<section class="principal mt-3">
	<div class="container">

		<!-- BUSCADOR -->

		<div class="row justify-content-between my-3">
			
			<div class="col-md-6">
				<h3><strong>Usuarios registrados</strong></h3>
			</div>

			<div class="col-md-6 d-flex justify-content-end">

				<div class="cont_elementos d-flex">				
					<form action="busqueda.php" method="POST" class="d-flex">
						<input class="form-control campo_busqueda" name="txtBusqueda" placeholder="Ingrese su búsqueda" type="search" autocomplete="off" required>		
					</form>
					<a href="agregar_usuario.php" class="btn btn-success"><i class="fas fa-user-plus"></i></a>

				</div>

			</div>	

		</div>

		<!-- TABLA DE DATOS -->


		<table class="table table-bordered text-center">
			<thead>
				<tr>
					<td><strong>Id</strong></td>
					<td><strong>Apellido</strong></td>
					<td><strong>Nombre</strong></td>							
					<td><strong>Email</strong></td>
					<td><strong>Acciones</strong></td>
				</tr>
			</thead>

			<tbody>						

				<?php 
				if ($num_usuarios > 0) {		

					foreach($respuesta as $dato){?>

						<tr>
							<td><?php echo $dato['id']; ?></td> 
							<td><?php echo $dato['apellido']; ?></td>
							<td><?php echo $dato['nombre']; ?></td>
							<td><?php echo $dato['email']; ?></td>									
							<td>
								<a href="editar_usuario.php?id=<?php echo $dato['id']?>" class="btn btn-primary"><i class="fas fa-user-edit"></i></a>
								<a href="eliminar_usuario.php?id=<?php echo $dato['id']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>

					<?php } 		

				} ?>

			</tbody>				

		</table>



		<!-- RESULTADOS-->

		<?php

		if($num_usuarios > 0){?>

			<div class="alert alert-primary" role="alert">Total = <?php echo $num_usuarios ?></div>

		<?php } 


		else{?>

			<div class="alert alert-primary" role="alert">Total = <?php echo $num_usuarios ?></div>

		<?php } ?>

	</div>

</section>


<?php include('includes/pie.php'); ?>	