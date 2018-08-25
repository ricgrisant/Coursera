     <?php 

     include_once("class/class_conexion.php");
     include_once("sesion.class.php"); 

     $session = new sesion();
     $usuario = $session->get("usuario");

     if (!$usuario) {
      header("Location: index.php");
    } else 
    {
      ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


 <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css"> 
 <link rel="stylesheet" href="">  
 <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
 <script
 src="https://code.jquery.com/jquery-3.3.1.min.js"
 integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
 crossorigin="anonymous"></script>
 <title>Linkedin</title>
</head>
<body>
	<div class="container-fluid">
    <div class="row">
      <!--Aqui comienza la carta menu izquierda-->
      <div id="cartaMenu" class="col-md-4">
        <div id="card-234751">
          <div class="card">
            <div class="card-header">
             <a class="card-link" data-toggle="collapse" data-parent="#card-234751" href="#card-element-412526">Mis Cursos</a>
           </div>
          <div id="card-element-412526" class="collapse show">
            <div class="card-body">
              Todos los Cursos
            </div>
          </div>
          <div id="card-element-412526" class="collapse show">
            <div class="card-body">
              Completados
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
           <a class="card-link" data-toggle="collapse" data-parent="#card-234751" href="#card-element-480725">Actualizaciones</a>
         </div>
      </div>
      <div class="card">
          <div class="card-header">
           <a class="card-link" data-toggle="collapse" data-parent="#card-234751" href="#card-element-480725">Logros</a>
         </div>
      </div>
    </div>
  </div>
  <!--Finaliza cartas menu-->
  

  <!--Aqui comienza la carta de mis cursos-->
  <div id="misCursos" class="col-md-8">
    <div>
    <h4>Tus cursos</h4>
  </div>

  <?php
  $idUsuario = $session->get("idUsuario");
      $conexion = new Conexion();
      $sql = "with info_curso as (select idcurso,nombre,dificultad,duracion from curso),
              curso_usr as(SELECT idusuario,idcurso
              FROM usuarioxcurso
              where idusuario=".$idUsuario.")
              SELECT * FROM info_curso inf,curso_usr u
              where inf.idcurso=u.idcurso";
    
    $conexion->consultaSql($sql);
    $result = $conexion->consultaSql($sql);
    if( $result === false ) {
      die( print_r( oci_error(), true));
    }

    oci_execute($result);


    while($row =  $conexion->obtenerFila($result)){
      echo '
    <div class="card">
      <div class="card-body">
        <div style="float: left;">
          <!--Foto del curso-->
          <img class="imgCursos" src="img/blog03.jpg" alt="">
        </div>
        <div class="container">
          
          <div style="float:  left;max-width: 60%;" class="col-sm-4">
            <!--nombre,universidad,fechafinalizacion,estrellas-->
            <p>'.utf8_encode($row["NOMBRE"]).'</p>
            <p>'.utf8_encode($row["DIFICULTAD"]).'</p>
            <p>'.utf8_encode($row["DURACION"]).'</p>
          </div>
          <div style="float: right;" class="col-sm-4">
            <!--fecha finalizacion de curso-->
            <p>Finalizó el Aug 20</p>
          </div>
        </div>
        <div style="bottom: 85px;left: 380px;" class="col-sm-4">
          <!--boton de ir al curso y obteer certificado-->
          <button href="'.$row["DURACION"].'" type="button" class="btn btn-light">Ir al curso</button>
        </div>
      </div>
    </div>
    <!--Finaliza mis cursos-->

    <div class="divisor"></div>';
    }
    $conexion->liberarResultado( $result);
   ?>

  </div>
    <!--Finaliza mis cursos-->

    <div class="divisor"></div>
  </div>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
</body>

</html>
<?php  
}
?>