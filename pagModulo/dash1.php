<?php
session_start();
include('../conexion/db.php');
$identificador= $_SESSION["idUsuario"];

$val=mysqli_query($conexion,"SELECT * FROM usuarios where id_usuarios='$identificador' ");
$resultado=mysqli_fetch_array($val);

if (isset($_SESSION['expira'])){

    echo $resultado[usuario];
    echo "pagina del administrador";

}else{
    header('location:../index.php');
}




?>