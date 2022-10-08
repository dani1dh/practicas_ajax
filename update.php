<?php 

$user = $_POST['User'];
$password = $_POST['Pass'];
$id = $_POST['Id'];

require("conexion.php");

$sql=$mysqli->query("UPDATE usuarios SET user='$user', password='$password' WHERE id_user = $id");

if ($sql) {
  //echo '<script>alert("cambios guardados")</script>';
  echo '<p class="si">cambio guardado<p>';
  //echo"<script>location.href='users.php'</script>";
}else{
    echo '<script>alert("error, intente de nuevo")</script>';
}


?>








