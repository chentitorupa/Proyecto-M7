
<?php
	function Fn_getConnect()
	{
	    if (!($conexion = new mysqli("localhost", "root", "usbw","prueba")))
	    {
	        echo "Error Conectando la base de Datos";
	        exit();
	    }
	    return $conexion;
	}
	   
?>
