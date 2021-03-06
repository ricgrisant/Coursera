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

    $sql =
    "SELECT se.numerosemana,se.acercade,cu.idcurso,cu.nombre,cu.dificultad,cu.duracion,cu.descripcion
FROM
    lecciones lec
inner join semana se on se.IDSEMANA=lec.IDSEMANA
inner join curso cu on cu.IDCURSO=se.IDCURSO
inner join USUARIOXCURSO uc on uc.IDCURSO=cu.IDCURSO
inner join VIDEO vid on vid.IDLECCION=lec.IDLECCION
where uc.IDUSUARIO=".$idUsuario." and se.idcurso=".$_GET["idCurso"];
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



    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><?php echo utf8_encode($row["NOMBRE"]); ?></h3>
            </div>

            <ul class="list-unstyled components">
                <p>Algun texto en especifico</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Semana</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <?php
                        while ($row =  $conexion->obtenerFila($result)) {
                            $semana=$row["NUMEROSEMANA"];
                            echo "<li><a href='semana.php?numerosemana=$semana'>Semana ".$semana."</a></li>";
                        }
                        ?>
                    </ul>
                </li>
                <li>
                    <a href="#">Informacion del curso</a>
                </li>
                <li>
                    <a href="#">Calificaciones</a>
                </li>
                <li>
                    <a href="#">Mensajes</a>
                    <a href="#">Recursos</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li><a href="indexin.php" class="download">Coursera</a></li>
                <li><a href="logout.php" class="article">Cerrar Sesión</a></li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="glyphicon glyphicon-align-left"></i>
                            <span>Menú curso</span>
                        </button>
                    </div>
                </div>
            </nav>

            <h2>Informacion curso</h2>
            <li class="active">
                <a href="#dropCursos" data-toggle="collapse" aria-expanded="false">Semana</a>
                <div class="card" id="dropCursos" style="width: 18rem;">
                  <img class="card-img-top" src="..." alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </li>


        <div class="line"></div>

        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>










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
