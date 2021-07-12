<?php
session_start();
include('../conexion/db.php');
$identificador= $_SESSION["idUsuario"];

if(isset($_SESSION['expira'])){

     // Subida de archivos en servidor PDF/XML
     $registros=mysqli_query($conexion,"SELECT id_usuarios from usuarios where id_usuarios='$identificador'");



                if(mysqli_num_rows($registros)==1){
                            // zona subida al servidro
                            //upload pdf

                            if($_FILES['pdf']['name']!=""){
                                                
                                $ext=explode(".",$_FILES['pdf']['name']);
                                $extension=end($ext);
                                
                                $permitidos= array("pdf");
                                $limite_kb= 5120;
                                if(in_array($extension,$permitidos) && $_FILES['pdf']['size'] <= $limite_kb *1024){
                                    
                                    $ruta= "facts/".$_FILES['pdf']['name'];
                                    move_uploaded_file($_FILES['pdf']['tmp_name'],$ruta);

                                    
                                
                                }else {
                                
                                    echo "Ocurrio un Error al Intentar Subir la factura PDF, verificar que el Peso sea Menor a 5MB";
                                    exit();	
                                
                                }
                            
                            }


                            //upload xml
                            if($_FILES['xml']['name']!=""){
                                                
                                $ext=explode(".",$_FILES['xml']['name']);
                                $extension=end($ext);
                                
                                $permitidos= array("xml");
                                $limite_kb= 5120;
                                if(in_array($extension,$permitidos) && $_FILES['xml']['size'] <= $limite_kb *1024){
                                    
                                    $ruta= "facts/".$_FILES['xml']['name'];
                                    move_uploaded_file($_FILES['xml']['tmp_name'],$ruta);

                                    
                                
                                }else {
                                
                                    echo "Ocurrio un Error al Intentar Subir la factura XML, verificar que el Peso sea Menor a 5MB";
                                    exit();	
                                
                                }
                            
                            }



                                                // Seccion subida PDF en BD

                                                $registros2=mysqli_query($conexion,"SELECT id_usuarios from usuarios where id_usuarios='$identificador'");

                                                //seccion subida PDF en BD  
                                               
                                                $fila=mysqli_fetch_array($registros2);
                                                if($_FILES['pdf']['name']!=""){
                                                    
                                                        
                                                    $dividir=explode(".",$_FILES['pdf']['name']);
                                                    $nombre=$dividir[0];


                                                    mysqli_query($conexion,"INSERT INTO fact (folio,tipo,id_usuarios,stats) values ('$nombre','1','$fila[id_usuarios]','Espera')");
                                                    
                                                }


                                                //seccion subida XML en BD
                                               // $fila2=mysqli_fetch_array($registros2);
                                               // if($_FILES['xml']['name']!=""){
                                                    
                                               //     $nombrexml=$_FILES['xml']['name'];
                                               //     mysqli_query($conexion,"INSERT INTO fact (folio,tipo,id_usuarios,stats) values ('$nombrexml','2','$fila[id_usuarios]','Espera')");
                                                    
                                                    
                                                    
                                               // }


                                                cerrarconexion();
                                                echo "Se Agrego Correctamente";





                }else{
                    echo "A ocurrido un error";
                }



                                






}else{

    echo "La sesion a Caducado, vuelva a registrarse nuevamente.";
    header('location:../index.php');
}


?>