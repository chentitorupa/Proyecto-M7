<?php
	require_once("conexion.php");	
	$Cn = Fn_getConnect();
	$sql = "SELECT * FROM tareas WHERE Persona_ID = 1";	
	$registros = $Cn -> query($sql);					
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="registroTareas.js"></script>
	<title>Tareas</title>
</head>
<body>
	<main>
		<section class="glass">
			<div class="dashboard">
				<form id="formulario">										
					<div class="user">
						<img class="foto" src="images/imgPerfil1.jpg">
						<h3>Juan Ventura</h3>
					</div>	
					<input type="hidden" id="numTarea" name="numTarea" value="">
					<div class="links">
						<div class="titulo">
							<h2>Título de la tarea</h2><br>
							<input id="titulo" name="titulo" type="text" name="">
						</div>
					</div>
					<div class="links">
						<div class="cuerpo">
							<h2>Cuerpo de la tarea</h2><br>
							<textarea id="tarea" name="tarea"></textarea>
						</div>
					</div>
					<div class="links">
						<div >
							<input class="btnEnviar" id="btnEnviar" type="button" value="GUARDAR" onclick="enviarTarea()">
						</div>					
					</div>
				</form>
			</div>			

			<div class="tareas">
				<h1>Tareas Pedientes</h1>
				<div class="status">					
					<i class="fas fa-search iconoInput"></i>
					<input type="text" id="search" name="search" placeholder="Buscar..." onkeyup="Buscar()">
				</div>
				<div class="cards">
					<?php							
				      	while ($row = $registros -> fetch_array()){				   
						    echo "<div class='card'>";					
						    	echo "<div class='card-info'>";
									echo "<h2 id='tituloTarea".$row['Tarea_ID']."'>".$row['Nombre_Tarea']."</h2>";
									echo "<p id='tarea".$row['Tarea_ID']."'>".$row['Tarea']."</p>";
								echo "</div>";			
								echo "<div class='cardBtnDone'>";
									echo"<button id='btnDone' class='btnCard' onclick='done(\"tarea".$row['Tarea_ID']."\")'><i class='fas fa-check-circle'></i></button>";
								echo "</div>";
								echo "<div class='cardBtnUpdate'>";
									echo "<button id='btnUpdate' class='btnCard' onclick='updateCard(\"".$row['Tarea_ID']."\")'><i class='fas fa-pen'></i></button>";
								echo "</div>";
								echo "<div class='cardBtnDelete'>";
									echo "<button id='btnDelete' class='btnCard' onclick='deleteCard(this)'><i class='fas fa-trash-alt'></i></button>";
								echo "</div>";					
							echo "</div>";			                         
				      	}

				      	$Cn -> close();
				    ?>
								
				</div>
			</div>
		</section>
	</main>

</body>
</html>

