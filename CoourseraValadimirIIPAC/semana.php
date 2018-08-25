<?php

include_once("class/class_conexion.php");
include_once("sesion.class.php"); 

$session = new sesion();
$idUsuario = $session->get("idUsuario");
$usuario = $session->get("usuario");

if (!$usuario) {
	header("Location: index.php");
} else 
{
	$conexion = new Conexion();

	$sql = "SELECT cu.NOMBRE as Nombre_Curso,cu.DESCRIPCION,lec.NOMBRE as nombre_leccion,vid.NOMBREVIDEO,vid.URL,se.NUMEROSEMANA,se.ACERCADE
	FROM
	lecciones lec
	inner join semana se on se.IDSEMANA=lec.IDSEMANA
	inner join curso cu on cu.IDCURSO=se.IDCURSO
	inner join USUARIOXCURSO uc on uc.IDCURSO=cu.IDCURSO
	inner join VIDEO vid on vid.IDLECCION=lec.IDLECCION
	where uc.IDUSUARIO=".$idUsuario." and se.numerosemana=".$_GET["numerosemana"];
	$conexion->consultaSql($sql);
	$result = $conexion->consultaSql($sql);
	if( $result === false ) {
		die( print_r( oci_error(), true));
	}

	oci_execute($result);
	$row =  $conexion->obtenerFila($result);
	?>



	<!DOCTYPE html>
	<html><head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Cursos</title>

		<!-- Bootstrap CSS CDN -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- Our Custom CSS -->
		<link rel="stylesheet" href="css/sidebar.css">
	</head>
	<body cz-shortcut-listen="true">



		<div class="wrapper" style="text-align: center;">
			<!-- Page Content Holder -->
			<div id="content">

				<nav class="navbar navbar-default">
					<div class="container-fluid">

						<div class="navbar-header">
							<div style="text-align: center !important;">
								<?php echo '<h1>'.$row["NOMBRE_CURSO"].'</h1>'; ?>
							</div>
						</div>
					</div>
				</nav>

				<h2>Semana <?php echo " ".$_GET["numerosemana"]; ?></h2>



				<div class="line"></div>

				<h2>Descripción</h2>
				<?php echo "<p>".$row["DESCRIPCION"]->load()."</p>"; ?>

				<div class="line"></div>
				<h2>Lecciones</h2>
				<?php 
				while ($row = $conexion->obtenerFila($result)) {
					echo "<br>";
					echo "<div>".$row["NOMBRE_LECCION"]."</div>";
					echo '<iframe width="560" height="315" src="'.$row["URL"].'" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>';
					echo '<div class="line"></div>';
				} ?>
				
				<h2>Actividades</h2>
				<div class="line"></div>









			</div>
		</div>





		<!-- jQuery CDN -->
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		<!-- Bootstrap Js CDN -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function () {
				$('#sidebarCollapse').on('click', function () {
					$('#sidebar').toggleClass('active');
				});
			});
		</script>



	</body></html>
<?php  } ?>
