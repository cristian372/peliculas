$(document).ready(function(){
	carga();
});

function carga(){
	var tablaDatos = $("#datos");

	var route = "http://localhost/prueba/public/generos";
	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.genero+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' data-toggle='modal' href='#myModal' class='btn btn-primary'>Editar</button><button value="+value.id+" OnClick='Eliminar(this);' class='btn btn-danger'>Eliminar</button></td></tr>");
		});
	});
}

function Eliminar(btn){
	var route = "http://localhost/prueba/public/genero/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			carga();
			$("#msj-success").fadeIn();
		}
	});
}

function Mostrar(btn){
	console.log(btn.value);
	var route = "http://localhost/prueba/public/genero/"+btn.value+"/edit";

	$.get(route, function(res){
		$('#genre').val(res.genero);
		$('#id').val(res.id);
	});
}


$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato = $("#genre").val();
	var route = "http://localhost/prueba/public/genero/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {genero: dato},
		success: function(){
			carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});