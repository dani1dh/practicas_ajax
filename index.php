<?php 
session_start();
 $user_id =  $_SESSION['id_user'];
$user_name = $_SESSION['user'];

if(!isset($user_id)){
   header('location:login.php');
};


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
	<style type="text/css">
		.si{
			font-size: 30px;
			text-align: center;
			font-weight: bload;
			text-transform: uppercase;
			color: #ffbf00;

		}
	</style>
</head>
<body>
	<?php require("nav.php"); ?>
	<div class="container">
		<div class="row">
	<div class="col-md-12" id="respuesta1"></div>
</div>

	</div>





</body>
</html>