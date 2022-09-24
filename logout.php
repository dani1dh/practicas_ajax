<?php 
session_start();
header('location:login.php');
unset($user_id);
session_destroy();





 ?>