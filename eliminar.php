<?php 
require("conexion.php");

$id= $_POST['Id'];
if (isset($id)) {
	

$sql=$mysqli->query("DELETE FROM usuarios WHERE id_user = '$id'");

if ($sql) {
	echo "usuario eliminado";
}

else{
	echo "usuario no eliminado";
 }


}else{
	echo "error";
}
?>