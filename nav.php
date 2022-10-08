

 <style type="text/css">
   .btn{
    margin: 2px 10px;
   }
 </style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Usuario: <?php echo $user_name ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
<input type="button" class="btn btn-info" value="Usuarios" onclick="users()">

<input type="button" class=" btn btn-success" value="Registrar" onclick="index()">

<input type="button" class=" btn btn-danger" value="Cerrar" onclick="user()">


           

      </div>
    </div>
  </div>
</nav><br>