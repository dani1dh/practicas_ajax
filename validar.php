<?php 
session_start();
$user = $_POST['User'];
$password = $_POST['Pass'];

require("conexion.php");

$sql=$mysqli->query("SELECT * FROM  usuarios WHERE user = '$user'");
if($f2 =$sql->fetch_array()){
 $_SESSION['id_user'] = $f2['id_user'];
$_SESSION['user'] = $f2['user'];
    if($password == $f2['password'] && $user == $f2['user']){


echo"<script>location.href='index.php'</script>";



}

elseif ($password != $f2['password']) {
echo "CONTRASEÑA INCORRETO";
}
}elseif(empty($user) || empty($password)){
    echo"Llena todos los datos";
}

else{
    echo "CORREO  INCORRECTO";
}

?>








