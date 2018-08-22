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
              Ultima vez activo
            </div>
          </div>
          <div id="card-element-412526" class="collapse show">
            <div class="card-body">
              Inactivo
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
      <div class="card">
          <div class="card-header">
           <a class="card-link" data-toggle="collapse" data-parent="#card-234751" href="#card-element-480725">Completados</a>
         </div>
      </div>
    </div>
  </div>
  <!--Finaliza cartas menu-->


  <!--Aqui comienza la carta de mis cursos-->
  <div id="misCursos" class="col-md-8">
    <div>
    <h4>Última vez activo</h4>
    <h6>Los cursos están ordenados por tu última actividad.</h6>
  </div>
    <div class="card">
      <div class="card-body">
        <div style="float: left;">
          <!--Foto del curso-->
          <img class="imgCursos" src="img/blog03.jpg" alt="">
        </div>
        <div class="container">
          
          <div style="float:  left;max-width: 60%;" class="col-sm-4">
            <!--nombre,universidad,fechafinalizacion,estrellas-->
            <p>Programación Móvil</p>
            <p>Universidad de Barcelona</p>
            <p>Escuela de Informatica</p>
          </div>
          <div style="float: right;" class="col-sm-4">
            <!--fecha finalizacion de curso-->
            <p>Finalizó el Aug 20</p>
          </div>
        </div>
        <div style="bottom: 85px;left: 380px;" class="col-sm-4">
          <!--boton de ir al curso y obteer certificado-->
          <button type="button" class="btn btn-light">Ir al curso</button>
        </div>
      </div>
    </div>
    <!--Finaliza mis cursos-->

    <div class="divisor"></div>
    
    <!--Aqui comienza carousel-->
    <div id="carCursos" class="row">
      <div class="col-md-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/banner.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/course02.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/post02.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <!--Finaliza carousel-->

  </div>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script>
  $('.carousel').carousel({
  interval: 2000
})
</script>
</body>

</html>