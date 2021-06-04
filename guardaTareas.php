<?php
	require_once("conexion.php");

	date_default_timezone_set('America/Mexico_City');
    $time = time();

	if( isset($_POST['titulo']) && $_POST['titulo'] != "" ){
		$titulo = $_POST['titulo'];
	}

	if( isset($_POST['tarea']) && $_POST['tarea'] != "" ){
		$tarea = $_POST['tarea'];
	}

	if( isset($_POST['numTarea']) && $_POST['numTarea'] != "" ){
		$numTarea = $_POST['numTarea'];
	}

	if( isset($_POST['accion']) && $_POST['accion'] == "actualizar" ){
		actualizaTarea();
	}	

	if( isset($_POST['accion']) && $_POST['accion'] == "crear" ){
		crearTarea();
	}

	function crearTarea(){
		echo "entre a crearTarea()"."\n";
		//$Cn = Fn_getConnect();
		//$sql = "INSERT INTO tareas(Nombre_Tarea, Tarea, Fecha, Persona_ID) VALUES ('".$titulo."', '".$tarea."', '".date("Y-m-d H:i:s", $time)."', 1)";
		//$sql = "UPDATE tareas SET Nombre_Tarea = '".$titulo."', SET Tarea = '".$tarea."', SET Fecha = '".date("Y-m-d H:i:s", $time)."' WHERE Tarea_ID = ".$numTarea ;	
		$sql="call Pa_TareasAdd('".$titulo."', '".$tarea."', '".date("Y-m-d H:i:s", getdate())."', 1)";
		echo $sql;
		//$Cn -> query($sql);
		//$Cn -> close();
	}

	

	echo "exito";
?>