<?php require("conexion.php"); 

$id = $_POST['id'];
?>
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
<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="card">
	<div class="card-header">
		Datos de usuarios
	</div>
	<div class="card-body">
		<form >
<?php $select_product = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE id_user = '$id'  ") or die('query failed');
while($proyecto = mysqli_fetch_assoc($select_product)){
	
       ?>
       <input type="hidden"   id="id" value="<?php echo $proyecto['id_user']; ?>" ><br>
<label for="user">Nombre del usuario</label>
       <input type="text" class="form-control"  id="user" value="<?php echo $proyecto['user']; ?>" autocomplete="off" required><br>
<label for="password">Contraseña:</label>
<input type="number" class="form-control"  id="password" value="<?php echo $proyecto['password']; ?>"  autocomplete="off"  required><br>
     <!--  <input type="text" class="form-control" name="describcion" id="desc">--><br>
	<?php } ?>
<input type="button" class="btn btn-success" value="Registrar usuario" onclick="modificar()">
<a onclick="index()" class="btn btn-primary">Volver</a>



</form>


	</div>
	 <div class="card-footer text-muted">
      
      </div>
	
</div>
</div>
</div>
</div>

</body>
</html>