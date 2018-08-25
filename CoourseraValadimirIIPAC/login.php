<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iniciar sesión</title>
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>






	<?php
	require_once("sesion.class.php");
	include_once("class/class_conexion.php");
	
	if( isset($_POST["iniciar"]) )
	{

		if(validarUsuario($_POST["usuario"],$_POST["contrasenia"]) == true)
		{			
			header("location: Indexin.php");
		}
		else 
		{
			echo '<div class="alert alert-danger">
			Correo o contraseña invalidos.
			</div>';
		}
	}
	
	function validarUsuario($usuario, $password)
	{

		$conexion = new Conexion();
		$sql = "select * from usuario";/* where correo = "."'".$_POST["usuario"]."'";*/
		
		$conexion->consultaSql($sql);
		$result = $conexion->consultaSql($sql);
		if( $result === false ) {
			die( print_r( oci_error(), true));
		}
		$sesion = new sesion();

		oci_execute($result);
		$row =  $conexion->obtenerFila($result);
		$sesion->set("usuario",$row["CORREO"]);
		$sesion->set("idUsuario",$row["IDUSUARIO"]);
		$sesion->set("nmbrUsuario",$row["NOMBRE"]);
		if( strcmp($password,$row["CONTRASENIA"]) == 0 )
		{
			return true;						
		}
		else					
			return false;
		$conexion->liberarResultado( $result);

	}

	?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/home-background.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<div id="avatar" class="login100-form-avatar">
						<img src="img/avatar.png" alt="AVATAR">
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="usuario" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="contrasenia" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					<div class="container-login100-form-btn p-t-10">
						<input class="login100-form-btn" type="submit" name ="iniciar" value="Iniciar Sesion"/>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
						</a>
					</div>

					<div class="text-center w-full">
						<a class="txt1" href="registrar-usuario.php">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>


	
</body>
</html>