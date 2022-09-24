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
		$('#respuesta').html(res);
	})
}