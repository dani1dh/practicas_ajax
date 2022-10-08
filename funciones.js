function login() {
	var user = document.getElementById('user').value;
	var password = document.getElementById('password').value;

	var datos = "User="+user+"&Pass="+password;
	$.ajax({
		url: 'validar.php', //Hacia donde van a enviar los valores
		type: 'POST', // Remplaza el method
		data: datos, // Nombre de la variable donde se estan resiviendo los datos.
	})

	.done(function(res){ //cuando se resive datos envia una respuest
		$('#respuesta').html(res);
	})
}

function users() {
	

	$.ajax({
		url: 'users.php', //Hacia donde van a enviar los valores
		
	})

	.done(function(res){ //cuando se resive datos envia una respuest
		$('#respuesta1').html(res);
	})
}

function index() {
	

	$.ajax({
		url: 'altas.php', //Hacia donde van a enviar los valores
		
	})

	.done(function(res){ //cuando se resive datos envia una respuest
		$('#respuesta1').html(res);
	})
}

function insertar() {
	var user = document.getElementById('user').value;
	var password = document.getElementById('password').value;

	var datos = "User="+user+"&Pass="+password;
	$.ajax({
		url: 'insertar.php', //Hacia donde van a enviar los valores
		type: 'POST', // Remplaza el method
		data: datos, // Nombre de la variable donde se estan resiviendo los datos.
	})

	.done(function(res){ //cuando se resive datos envia una respuest
		$('#respuesta1').html(res);
	})
}

function eliminar(id_e) {
 var id_us = {"id_e" : id_e,}

	$.ajax ({
		url: 'eliminar.php',
		type: 'POST',
		data : id_us,
		
	})

	.done(function(res){
		$('#respuesta1').html(res);
	})
}

function modificar() {
	var id = document.getElementById('id').value;
	var user = document.getElementById('user').value;
	var password = document.getElementById('password').value;

	var datos = "User="+user+"&Pass="+password+"&Id="+id;
	$.ajax({
		url: 'update.php', //Hacia donde van a enviar los valores
		type: 'POST', // Remplaza el method
		data: datos, // Nombre de la variable donde se estan resiviendo los datos.
	})
.done(function(res){ //cuando se resive datos envia una respuest
		$('#respuesta1').html(res);
	})
	
}

function mod(id){
    var id_user = {"id" : id,}

	$.ajax ({
		url: 'modificar.php',
		type: 'POST',
		data : id_user,
		
	})

	.done(function(res){
		$('#respuesta1').html(res);
	})

}


function user() {
	

	$.ajax({
		url: 'logout.php', //Hacia donde van a enviar los valores
		
	})

	.done(function(res){ //cuando se resive datos envia una respuest
		$('#respuesta1').html(res);
	})
}


