<?php require("conexion.php"); ?>
<!DOCTYPE html>	
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="funciones.js"></script>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	<title>Usuarios</title>
</head>
<body>
	
<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
			<div class="col-md-10">
			<div class="table-responsive">
<table class="table ">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre de usuario</th>
			<th>Contraseña:</th>
			<th>Eliminar</th>
			<th>Modificar</th>
		</tr>
	</thead>
	<tbody class="table-group-divider">

     <?php 

$select_product = mysqli_query($mysqli, "SELECT * FROM usuarios ") or die('query failed');
while($proyecto = mysqli_fetch_assoc($select_product)){
	
      ?>

		<tr>
			<td><?php echo $proyecto['id_user']; ?></td>
			<td><?php echo $proyecto['user']; ?></td>
			<td><?php echo $proyecto['password']; ?></td>
	        <td><a class="btn btn-danger " onclick="eliminar(<?php echo $proyecto['id_user'];?>)">Eliminar</a></td>
                 <td><a class="btn btn-primary " onclick="mod(<?php echo $proyecto['id_user'];?>)">Modificar</a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>

</div>
		</div>


	</div>
	<div class="col-md-1"></div>
</div>
</body>
</html>