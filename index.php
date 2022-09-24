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
	<?php require("nav.php"); ?>
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
	
<label for="user">Nombre del usuario</label>
       <input type="text" class="form-control"  id="user" autocomplete="off" required><br>
<label for="password">Contraseña:</label>
<input type="text" class="form-control"  id="password" autocomplete="off"  required><br>
     <!--  <input type="text" class="form-control" name="describcion" id="desc">--><br>

<input type="button" class="btn btn-success" value="Registrar usuario" onclick="insertar()">



</form>


	</div>
	 <div class="card-footer text-muted">
      <div id="respuesta" class="col-md-4">   </div>
      </div>
	
</div>
</div>
</div>
</div>

</body>
</html>