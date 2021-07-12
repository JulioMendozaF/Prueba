
<?php 

$conexion=mysqli_connect("localhost","infinito_modulo","}~*4^zDUX8VQ");

if (!$conexion){
	
	die ("Error de conexión ".mysqli_error($conexion));
	
	}
	
 mysqli_select_db($conexion,"infinito_modulo") or die ("Error al conectar con la base de datos ".mysqli_error($conexion));



function cerrarconexion(){
	
	mysqli_close($GLOBALS['conexion']);
	
	
	}

?>