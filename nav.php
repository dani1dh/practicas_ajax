<?php 
session_start();
 $user_id =  $_SESSION['id_user'];
$user_name = $_SESSION['user'];

if(!isset($user_id)){
   header('location:login.php');
};


 ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo $user_name ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="users.php">Usuarios</a>
         <a class="nav-link" aria-current="page" href="index.php">Registrar usuarios</a>
        <a class="nav-link" href="logout.php?logout=<?php echo $user_id;  ?>">Salir</a>
       

       
      </div>
    </div>
  </div>
</nav><br>