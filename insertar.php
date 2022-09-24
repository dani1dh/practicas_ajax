<?php 
$user = $_POST['User'];
$password = $_POST['Pass'];
require("conexion.php");


$sql=$mysqli->query("SELECT * FROM  usuarios WHERE user = '$user'");
if($f2 =$sql->fetch_array()){


if($user == $f2['user']){
echo"Usuario existente";

}

}elseif(empty($user)){
    echo"Llena todos los datos";
}
else{
    $insert=$mysqli->query("INSERT INTO usuarios( user, password) VALUES ('$user','$password')");
/*echo"<script>location.href='index.php'</script>";*/
echo"Usuario registrado";
}

 ?>