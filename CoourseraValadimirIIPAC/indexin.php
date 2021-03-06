     <?php 

     include_once("class/class_conexion.php");
     include_once("sesion.class.php"); 

     $session = new sesion();
     $usuario = $session->get("usuario");
     $idUsuario = $session->get("idUsuario");
     $nmbrUsuario = $session->get("nmbrUsuario");

     if (!$usuario) {
      header("Location: index.php");
    } else 
    {
      ?>
      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Coursera</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
          <script type="text/javascript" src="js/bootstrap.min.js"></script>
          <script type="text/javascript" src="js/main.js"></script>
          <script type="text/javascript" src="js/scripts.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
              <![endif]-->

          </head>

          <body>
             <!-- Header -->
             <header id="header" class="transparent-nav">
              <div class="container">
                <div class="row">
                  <div class="navbar-header col-md-4">
                    <!-- Logo -->
                    <div class="navbar-brand">
                      <a class="logo" href="indexin.php">
                       <img src="./img/logo.png">
                     </a>
                   </div>
                   <!-- /Logo -->

                   <!-- /Menú desplegable multinivel -->
              </div>
              <!-- Search -->
              <div class="search col-md-4">
                <nav class="navbar navbar-light bg-light">
                  <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button id="prue" class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
                  </form>
                </nav>
              </div>

              <!-- Navigation 
              <div class="col-md-4">
                <ul class="main-menu nav navbar-nav navbar-right">
                  <li><a class="sesion"> <?php /*echo $usuario*/; ?> </a></li>
                  <li><i class="fa fa-user-circle" aria-hidden="true"></i></li>
                </ul>
              </div>
            </div>-->
            <div class="btn-group">
              <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> <?php echo $nmbrUsuario; ?></a>
              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a id="btnCursos" href="#"><i class="fa fa-pencil fa-fw"></i>Mis cursos</a></li>
                <li><a href="#"><i class="fa fa-user-circle-o"></i> Perfil</a></li>
                <li><a href="#"><i class="fa fa-cog"></i>Ajustes</a></li>
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-key"></i> Cerrar Sesión</a></li>
              </ul>
            </div>

            <!-- /Navigation -->

          </div>
        </header>
        <!-- /Header -->
<div id="contenido">
            <!-- Home -->
            <div id="home" class="hero-area">

              <!-- Backgound Image -->
              <div class="bg-image bg-parallax overlay" style="background-image:url(./img/banner.jpg)"></div>
              <!-- /Backgound Image -->

              <div class="home-wrapper">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8">
                      <h1 class="title-text">Eres imparable</h1>
                      <p class="text">Desarrolla habilidades solicitadas y obtén credenciales valiosas.</p>
                      <a class="main-button icon-button" href="#">Únete de forma gratuita</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!-- /Home -->

            <!-- About -->
            <div id="about" class="section">

              <!-- container -->
              <div class="container">

                <!-- row -->
                <div class="row">

                  <div class="col-md-6">
                    <div class="section-header">
                      <h2>Bienvenido a Coursera</h2>
                      <p class="lead">Experimenta estudiar desde cualquier lugar en las universidades más prestigiosas del mundo.</p>
                    </div>

                    <!-- feature -->
                    <div class="feature">
                      <i class="feature-icon fa fa-flask"></i>
                      <div class="feature-content">
                        <h4>Cursos en Linea </h4>
                        <p>Cientos de cursos en todas las áreas de conocimiento.</p>
                      </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="feature">
                      <i class="feature-icon fa fa-users"></i>
                      <div class="feature-content">
                        <h4>Intructores Expertos</h4>
                        <p>Graduados con honores de las más prestigiosas universidades.</p>
                      </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="feature">
                      <i class="feature-icon fa fa-comments"></i>
                      <div class="feature-content">
                        <h4>Comunidad</h4>
                        <p>Un foro para compartir tus dudas o logros con el mundo.</p>
                      </div>
                    </div>
                    <!-- /feature -->

                  </div>

                  <div class="col-md-6">
                    <div class="about-img">
                      <img src="./img/about.png" alt="">
                    </div>
                  </div>

                </div>
                <!-- row -->

              </div>
              <!-- container -->
            </div>
            <!-- /About -->

            <!-- Courses -->
            <div id="courses" class="section">

              <!-- container -->
              <div class="container">

                <!-- row -->
                <div class="row">
                  <div class="section-header text-center">
                    <h2>Explora Coursera</h2>
                    <p class="lead">Comienza con uno de estos cursos sugeridos</p>
                  </div>
                </div>
                <!-- /row -->

                <!-- courses -->
                <div id="courses-wrapper">

                  <!-- row -->
                  <div class="row">

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                      <div class="course">
                        <a href="#" class="course-img">
                         <img src="./img/course01.jpg" alt="">
                         <i class="course-link-icon fa fa-link"></i>
                       </a>
                       <a class="course-title" href="#">Beginner to Pro in Excel: Financial Modeling and Valuation</a>
                       <div class="course-details">
                        <span class="course-category">Business</span>
                        <span class="course-price course-free">Free</span>
                      </div>
                    </div>
                  </div>
                  <!-- /single course -->

                  <!-- single course -->
                  <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                      <a href="#" class="course-img">
                       <img src="./img/course02.jpg" alt="">
                       <i class="course-link-icon fa fa-link"></i>
                     </a>
                     <a class="course-title" href="#">Introduction to CSS </a>
                     <div class="course-details">
                      <span class="course-category">Web Design</span>
                      <span class="course-price course-premium">Premium</span>
                    </div>
                  </div>
                </div>
                <!-- /single course -->

                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <div class="course">
                    <a href="#" class="course-img">
                     <img src="./img/course03.jpg" alt="">
                     <i class="course-link-icon fa fa-link"></i>
                   </a>
                   <a class="course-title" href="#">The Ultimate Drawing Course | From Beginner To Advanced</a>
                   <div class="course-details">
                    <span class="course-category">Drawing</span>
                    <span class="course-price course-premium">Premium</span>
                  </div>
                </div>
              </div>
              <!-- /single course -->

              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="course">
                  <a href="#" class="course-img">
                   <img src="./img/course04.jpg" alt="">
                   <i class="course-link-icon fa fa-link"></i>
                 </a>
                 <a class="course-title" href="#">The Complete Web Development Course</a>
                 <div class="course-details">
                  <span class="course-category">Web Development</span>
                  <span class="course-price course-free">Free</span>
                </div>
              </div>
            </div>
            <!-- /single course -->

          </div>
          <!-- /row -->

          <!-- row -->
          <div class="row">

            <!-- single course -->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="course">
                <a href="#" class="course-img">
                 <img src="./img/course05.jpg" alt="">
                 <i class="course-link-icon fa fa-link"></i>
               </a>
               <a class="course-title" href="#">PHP Tips, Tricks, and Techniques</a>
               <div class="course-details">
                <span class="course-category">Web Development</span>
                <span class="course-price course-free">Free</span>
              </div>
            </div>
          </div>
          <!-- /single course -->

          <!-- single course -->
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="course">
              <a href="#" class="course-img">
               <img src="./img/course06.jpg" alt="">
               <i class="course-link-icon fa fa-link"></i>
             </a>
             <a class="course-title" href="#">All You Need To Know About Web Design</a>
             <div class="course-details">
              <span class="course-category">Web Design</span>
              <span class="course-price course-free">Free</span>
            </div>
          </div>
        </div>
        <!-- /single course -->

        <!-- single course -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="course">
            <a href="#" class="course-img">
             <img src="./img/course07.jpg" alt="">
             <i class="course-link-icon fa fa-link"></i>
           </a>
           <a class="course-title" href="#">How to Get Started in Photography</a>
           <div class="course-details">
            <span class="course-category">Photography</span>
            <span class="course-price course-free">Free</span>
          </div>
        </div>
      </div>
      <!-- /single course -->

      <!-- single course -->
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="course">
          <a href="#" class="course-img">
           <img src="./img/course08.jpg" alt="">
           <i class="course-link-icon fa fa-link"></i>
         </a>
         <a class="course-title" href="#">Typography From A to Z</a>
         <div class="course-details">
          <span class="course-category">Typography</span>
          <span class="course-price course-free">Free</span>
        </div>
      </div>
    </div>
    <!-- /single course -->

    </div>
    <!-- /row -->

    </div>
    <!-- /courses -->

    <div class="row">
      <div class="center-btn">
        <a class="main-button icon-button" href="#">Más Cursos</a>
      </div>
    </div>

    </div>
    <!-- container -->

    </div>
    <!-- /Courses -->

    <!-- Call To Action -->
    <div id="cta" class="section">

      <!-- Backgound Image -->
      <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta1-background.jpg)"></div>
      <!-- /Backgound Image -->

      <!-- container -->
      <div class="container">

        <!-- row -->
        <div class="row">

          <div class="col-md-6">
            <h2 class="text">Comiensa a superarte profesionalmente desde la comodidad de tu hogar.</h2>
            <p class="text">Crea tu propia ambiente y ritmo.*</p>
            <a class="main-button icon-button" href="#">Comienza Ya!</a>
          </div>

        </div>
        <!-- /row -->

      </div>
      <!-- /container -->

    </div>
    <!-- /Call To Action -->

    <!-- Why us -->
    <div id="why-us" class="section">

      <!-- container -->
      <div class="container">

        <!-- row -->
        <div class="row">
          <div class="section-header text-center">
            <h2>Por que Coursera?</h2>
            <p class="lead">Te exponemos acontinuación entre muchas razones:</p>
          </div>

          <!-- feature -->
          <div class="col-md-4">
            <div class="feature">
              <i class="feature-icon fa fa-flask"></i>
              <div class="feature-content">
                <h4>Cursos en linea</h4>
                <p>Donde sea, a la hora que sea.</p>
              </div>
            </div>
          </div>
          <!-- /feature -->

          <!-- feature -->
          <div class="col-md-4">
            <div class="feature">
              <i class="feature-icon fa fa-users"></i>
              <div class="feature-content">
                <h4>Instructores Expertos</h4>
                <p>Profesionales con experiencia en el área que elijas.</p>
              </div>
            </div>
          </div>
          <!-- /feature -->

          <!-- feature -->
          <div class="col-md-4">
            <div class="feature">
              <i class="feature-icon fa fa-comments"></i>
              <div class="feature-content">
                <h4>Comunidad</h4>
                <p>Cientos de personas que se interesan en un curso ayudando a que crezca Coursera.</p>
              </div>
            </div>
          </div>
          <!-- /feature -->

        </div>
        <!-- /row -->

        <hr class="section-hr">

        <!-- row -->
        <div class="row">

          <div class="col-md-6">
            <h3>Persius imperdiet incorrupte et qui, munere nusquam et nec.</h3>
            <p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
            <p>No vel facete sententiae, quodsi dolores no quo, pri ex tamquam interesset necessitatibus. Te denique cotidieque delicatissimi sed. Eu doming epicurei duo. Sit ea perfecto deseruisse theophrastus. At sed malis hendrerit, elitr deseruisse in
            sit, sit ei facilisi mediocrem.</p>
          </div>

          <div class="col-md-5 col-md-offset-1">
            <a class="about-video" href="#">
             <img src="./img/about-video.jpg" alt="">
             <i class="play-icon fa fa-play"></i>
           </a>
         </div>

       </div>
       <!-- /row -->

     </div>
     <!-- /container -->

    </div>
    <!-- /Why us -->

    <!-- Contact CTA -->
    <div id="contact-cta" class="section">

      <!-- Backgound Image -->
      <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
      <!-- Backgound Image -->

      <!-- container -->
      <div class="container">

        <!-- row -->
        <div class="row">

          <div class="col-md-8 col-md-offset-2 text-center">
            <h2 class="text">Contactanos</h2>
            <p class="text">Tu futuro comienza aquí.</p>
            <a class="main-button icon-button" href="#">Contactano</a>
          </div>

        </div>
        <!-- /row -->

      </div>
      <!-- /container -->

    </div>
    <!-- /Contact CTA -->
<!-- Footer -->
<footer id="footer" class="section">

  <!-- container -->
  <div class="container">

    <!-- row -->
    <div class="row">

      <!-- footer logo -->
      <div class="col-md-6">
        <div class="footer-logo">
          <a class="logo" href="index.html">
           <img src="./img/logo.png" alt="logo">
         </a>
       </div>
     </div>
     <!-- footer logo -->

     <!-- footer nav -->
     <div class="col-md-6">
      <ul class="footer-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
    <!-- /footer nav -->

  </div>
  <!-- /row -->

  <!-- row -->
  <div id="bottom-footer" class="row">

    <!-- social -->
    <div class="col-md-4 col-md-push-8">
      <ul class="footer-social">
        <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
    <!-- /social -->

  </div>
  <!-- row -->

</div>


            <!-- /container -->

          </footer>
          <!-- /Footer -->

          <!-- preloader -->
          <div id='preloader'>
            <div class='preloader'></div>
          </div>
          <!-- /preloader -->

          <!-- jQuery Plugins -->

        </body>

        </html> --> --> -->
        <?php 
      }
      ?>