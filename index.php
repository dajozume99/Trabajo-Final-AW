<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Trabajo Final AW</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="css/propio.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Dany Zurita</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="mostrar.php">Mostrar</a></li>
                <li><a href="insertar.php">Insertar</a></li>
				<li><a href="modificar.php">Modificar</a></li>
				<li><a href="eliminar.php">Eliminar</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
	

    <!-- Carousel
    ================================================== -->
       <div class="container marketing">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/campo1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              
              <p><a class="btn btn-lg btn-primary" href="mostrar.php" role="button">Mostrar equipos</a></p>
            </div>
          </div>
        </div>
          
        <div class="item">
          <img class="second-slide" src="img/campo2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="btn btn-lg btn-primary" href="insertar.php" role="button">Insertar equipos</a></p>
            </div>
          </div>
        </div>
          
          <div class="item">
          <img class="second-slide" src="img/campo4.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="btn btn-lg btn-primary" href="modificar.php" role="button">Modifica títulos</a></p>
            </div>
          </div>
        </div>
          
        <div class="item">
          <img class="third-slide" src="img/campo3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="btn btn-lg btn-primary" href="eliminar.php" role="button">Eliminar equipos</a></p>
            </div>
          </div>
        </div>
      </div>
        
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
	
	<hr class="featurette-divider">
	
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Web informativa de equipos de futbol</h1>
        <p>Muestra, inserta, modifica y elimina equipos de futbol en una base de datos con <code>php</code></p>
        <p><a class="btn btn-primary btn-lg" href="mostrar.php" role="button">Mostrar &raquo;</a></p>
      </div>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

   

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/escudomadrid1.png" alt="Escudo Real Madrid" width="140" height="140">
          <h2>Real Madrid F.C.</h2>
          <p>El Real Madrid Club de Fútbol, más conocido simplemente como Real Madrid, es una entidad polideportiva con sede en Madrid, España. Fue declarada oficialmente registrada como club de fútbol por sus socios el 6 de marzo de 1902.</p>
          <p><a class="btn btn-default" href="mostrar2.php" role="button">Ver títulos &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/escudobarcelona1.png" alt="Generic placeholder image" width="140" height="140">
          <h2>F.C. Barcelona</h2>
          <p>El Fútbol Club Barcelona (en catalán, Futbol Club Barcelona) es una entidad polideportiva de Barcelona (España). Fue fundado como club de fútbol el 29 de noviembre de 1899.</p>
          <p><a class="btn btn-default" href="mostrar2.php" role="button">Ver títulos &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/escudomallorca1.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Mallorca F.C.</h2>
          <p>El Mallorca Fútbol Club (originalmente llamado Mallorca Football Club) fue un club de fútbol fundado en Palma de Mallorca (Islas Baleares, España). Fue uno de los primeros conjuntos formados por clases trabajadoras de la ciudad.</p>
          <p><a class="btn btn-default" href="mostrar2.php" role="button">Ver títulos &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

		<hr class="featurette-divider">

		<!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2019 Daniel Jonathan Zurita Mena &middot;</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
