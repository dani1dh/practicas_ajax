<?php 
$user = $_POST['User'];
$password = $_POST['Pass'];
require("conexion.php");


$sql=$mysqli->query("SELECT * FROM  usuarios WHERE user = '$user'");
if($f2 =$sql->fetch_array()){


if($user == $f2['user']){
echo '<p class="si">usuario existente<p>';

}

}elseif(empty($user)){
    echo '<p class="si">Llenar todos los datos<p>';
}
else{
    $insert=$mysqli->query("INSERT INTO usuarios( user, password) VALUES ('$user','$password')");
/*echo"<script>location.href='index.php'</script>";*/
echo '<p class="si">usuario registrado<p>';
}

 ?>