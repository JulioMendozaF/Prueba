<?php
//fetch.php
$connect = mysqli_connect("localhost", "infinito_modulo","}~*4^zDUX8VQ", "infinito_modulo");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM fact 
  WHERE folio LIKE '%".$search."%'
  OR tipo LIKE '%".$search."%' 
  OR id_usuarios LIKE '%".$search."%' 
  OR stats LIKE '%".$search."%' 
  ";
}
else
{
 $query = "
  SELECT * FROM fact ORDER BY id_fact
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Factura</th>
     <th>Sucursal</th>
     <th>Status</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["folio"].'</td>
    <td>'.$row["id_usuarios"].'</td>
    <td>'.$row["stats"].'</td>
    </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>