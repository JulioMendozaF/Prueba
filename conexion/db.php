<?php
  $servidor = "localhost";
  $usuario = "infinito_modulo";
  $password = "}~*4^zDUX8VQ";
 
  try {
        $conexion = new PDO("mysql:host=$servidor;dbname=nombreDeTuBaseDeDatos", $usuario, $password);      
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión realizada Satisfactoriamente";
      }
 
  catch(PDOException $e)
      {
      echo "La conexión ha fallado: " . $e->getMessage();
      }
 
  $conexion = null;