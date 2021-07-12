<?php
session_start();
include('../conexion/db.php');
$identificador= $_SESSION["idUsuario"];

$val=mysqli_query($conexion,"SELECT * FROM usuarios where id_usuarios='$identificador' ");
$resultado=mysqli_fetch_array($val);

if (isset($_SESSION['expira'])){
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel del Contador</title>
    <link rel="icon" type="image/png" href="../img/favicon.png"/>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
</head>
<body id="perfiles">
<div class="capa"></div>

<header>
	
   </header>


<!--	--------------->

 <main>
 <section class="tcat">
 		<h1>TABLA DE PERFILES</h1>
		<div class="form-1-2">
		<label style="font-size:19px;" for="caja_busqueda">Buscar:</label>
		<input type="text" name="caja_busqueda" class="form-field" id="caja_busqueda">
		</div>

		<div class="caja-edicion">
		<div id="datos">

		</div> 


		<div id="formEditar">

		</div>
		</div>
</section>
</main>

<footer>
        <div id="footer-legal">
            <div class="izq">
                <p></p>
            </div>
            <div class="der">
                <p>creado por <a href="http://infinito-digital.com/" target="_blank">Infinito Digital Marketing</a></p>
            </div>
        </div>
        <hr class="truco">  
</footer>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"buscar.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#datos').html(data);
   }
  });
 }
 $('#caja_busqueda').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});





</script>

</body>
</html>




<?php
}else{
    header('location:../index.php');
}



?>