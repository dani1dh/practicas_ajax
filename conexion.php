<?php

//
$mysqli =new mysqli("localhost","root","","login");


if($mysqli->connect_errno)
{
	echo"algo salio mal con la base de datos:(
	".$mysqli-> connect_errno.")".$mysqli ->
	connect_errno;
}
?>