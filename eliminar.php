<?php 
require("conexion.php");

$id= $_POST['id_e'];
if (isset($id)) {
	

$sql=$mysqli->query("DELETE FROM usuarios WHERE id_user = '$id'");

if ($sql) {
	echo '<p class="si">usuario eliminado<p>';
}

else{
	echo '<p class="si">usuario no eliminado<p>';
 }


}else{
	echo '<p class="si">ERROR<p>';
}
?>