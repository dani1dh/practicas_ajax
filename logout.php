<?php 
require("conexion.php");
session_start();
$id_user =  $_SESSION['id_user'];
//$id_user = $_POST['log'];

unset($id_user);
session_destroy();

echo"<script>location.href='login.php'</script>";



 ?>