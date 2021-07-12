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
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            </head>
            <body>
                                    <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Nombre Sucursal</th>
                                    <th>Identificador Sucursal</th>
                                    <th>Permiso</th>
                                    <th>Subir Archivos PDF/XML</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $resultado[usuario] ?></td>
                                    <td><?php echo $resultado[id_usuarios] ?></td>
                                    <td><?php echo $resultado[permisos] ?></td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Subir PDF/XML</button></td>
                                    <td><input type="text" value="Validando" disabled></td>
                                </tr>  
                            </tbody>
                        </table> 

<!-- Modal Upload-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Archivos Factura</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      
                <form class="" name="facturas" method="post" enctype="multipart/form-data" id="form">
                          <div class="modal-body">

                                        <button onclick="mostrarpdf()" type="button" class="btn btn-success form-field">Subir PDF</button>
                                            <div class="form-group" id="pdf" style="display:none;">
                                                <div id="pdf-btn">
                                                    <label style="display:none;" for="exampleInputFile"></label>
                                                    <input type="file" name="pdf" class="" data-input="">
                                                    <p class="help-block">Solo se admiten archivos .pdf menores de 5MByte </p>
                                                </div>
                                            </div>

                                            <button onclick="mostrarxml()" type="button" class="btn btn-success form-field">Subir XML</button>
                                            <div class="form-group" id="xml" style="display:none;">
                                                <div id="xml-btn">
                                                    <label style="display:none;" for="exampleInputFile"></label>
                                                    <input type="file" name="xml" class="" data-input="">
                                                    <p class="help-block">Solo se admiten archivos .xml menores de 5MByte </p>
                                                </div>
                                            </div>


                            
                          </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <div class="form-group">
                                                        <button type="button" class="btn btn-primary" onclick="uploadfact()">Subir Archivos</button>
                                                </div>
                                    </div>

                </form>

    </div>
  </div>
</div>


<script src="js/uploadfact.js"></script>

            </body>
            </html>





<?php
   

}else{
    header('location:../index.php');
}



?>