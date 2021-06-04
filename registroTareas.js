$(document).ready(function(){
	console.log("trabajando");

	
});

function deleteCard(e) {  
	$(e).parent().parent().fadeOut( "slow");
}

function done(tarea){
	//$("#tarea1").css( "text-decoration", "line-through" );	
	$("#"+tarea).attr( "style", "text-decoration: line-through;" );	
}

function updateCard(numero){
	$("#titulo").val( $("#tituloTarea"+numero).text() );	
	$("#tarea").val( $("#tarea"+numero).text() );
	$("#numTarea").val(numero);
	$("#btnEnviar").val("ACTUALIZAR");
	$("#btnEnviar").attr("onclick", "actualizarTarea()");
}

function Buscar(){
 console.log( $("#search").val() );
}

/*function actualizarTarea(){
	console.log($("#formulario").serialize()+"&accion='actualizar'");
	$.ajax({
		url: 'guardaTareas.php',
		type: 'POST',
		data: $("#formulario").serialize()+"&accion='actualizar'",
		beforeSend: function(){
			//validacion
		},
		success: function(response){
			console.log(response);
		},
		error: function(){
			console.log("algo salio mal...");
		}
	});
}
*/
function enviarTarea(){
	//console.log($("#formulario").serialize()+"&accion=crear");
	$.ajax({
		url: 'guardaTareas.php',
		type: 'POST',
		data: $("#formulario").serialize()+"&accion=crear",		
		success: function(response){
			console.log(response);
		},
		error: function(){
			console.log("algo salio mal...");
		}
	});
}


