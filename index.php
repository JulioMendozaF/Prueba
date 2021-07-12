<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo Contabilidad Sucursales</title>

	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>    

	<link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body>

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
						         <h2>Iniciar sesión</h2>		
							</div>
							
						</div>
						<hr>
					</div>
					
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="validar.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" class="form-control" placeholder="Usuario">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" class="form-control btn btn-login" value="Iniciar sesión">
											</div>
										</div>
									</div>
								</form>


								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>