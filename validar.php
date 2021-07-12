<?php
session_start();
include('conexion/db.php');

$usuario=($_POST["username"]);
$pass=($_POST["password"]);

$_SESSION["expira"]=$usuario;

$val=mysqli_query($conexion,"SELECT * FROM usuarios where usuario='$usuario' and pass='$pass' ");
$resultado=mysqli_fetch_array($val);

if($resultado){
   
  $_SESSION["idUsuario"]=$resultado[id_usuarios];
  
     if($resultado[permisos] == "ad"){
      header("location:pagModulo/dash1.php");
     }
   
     if($resultado[permisos] == "co"){
      header("location:pagModulo/dash2.php");
     }
  
     if($resultado[permisos] == "su"){
      header("location:pagModulo/dash3.php");
     }
  
  
}

else{

  include("index.php");
?>
  <h1>Usuario o Contraseña Incorrectos</h1>
<?php
  
}


?>





