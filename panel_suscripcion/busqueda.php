<?php 
include('conexion_db.php');

if(isset($_POST['txtBusqueda'])){
	$dato_ingresado = $_POST['txtBusqueda'];
	$consulta = "SELECT * FROM suscriptores WHERE apellido like '%$dato_ingresado%' or nombre like '%$dato_ingresado%' ";
	$respuesta= mysqli_query($conexion,$consulta);

	$resultado_busqueda= mysqli_num_rows($respuesta);
}

?>


<!-- MENU PRINCIPAL-->

<?php include('includes/cabecera.php'); ?>	



<section class="principal mt-3">
	<div class="container">

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



		<!-- RESULTADOS-->

		<?php

		if($resultado_busqueda > 0){?>

			<div class="alert alert-success" role="alert">Resultados = <?php echo $resultado_busqueda ?></div>

		<?php } 


		else{?>

			<div class="alert alert-danger" role="alert">Resultados = <?php echo $resultado_busqueda ?></div>

		<?php } ?>



		<!-- TABLA DE DATOS -->

		<table class="table table-bordered text-center">
			<thead>
				<tr>
					<td>Id</td>
					<td>Apellido</td>
					<td>Nombre</td>							
					<td>Email</td>
					<td>Acciones</td>
				</tr>
			</thead>

			<tbody>						

				<?php 
				if ($resultado_busqueda  > 0) {		

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

	</div>
</section>

<?php include('includes/pie.php'); ?>	









