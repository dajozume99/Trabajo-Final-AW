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
                <li><a href="index.php">Home</a></li>
                <li><a href="mostrar.php">Mostrar</a></li>
                <li class="active"><a href="insertar.php">Insertar</a></li>
				<li><a href="modificar.php">Modificar</a></li>
				<li><a href="eliminar.php">Eliminar</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
	
	<div class="container">
			<form method="post" action="insertar2.php">
				<div class="form-group">
				  <label for="usr">Nom:</label>
				  <input type="text" id="nom" class="form-control" placeholder="Nom de l'equip" name="nom">
				</div>
				<div class="form-group">
				  <label for="usr">Localitat:</label>
				  <input type="text" id="localitat" class="form-control" placeholder="Localitat de l'equip" name="localitat">
				</div>
				<div class="form-group">
				  <label for="usr">Web:</label>
				  <input type="text" id="web" class="form-control" placeholder="Web de l'equip" name="web">
				</div>
				<div class="form-group">
				  <label for="usr">Escut:</label>
				  <input type="text" id="escut" class="form-control" placeholder="Escut de l'equip" name="escut">
				</div>
				<button type="submit" class="btn btn-default">Insertar</button>
			</form>
		
		
		<hr class="featurette-divider">

		<!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2019 Daniel Jonathan Zurita Mena &middot; </p>
      </footer>
      </div>
</body>
</html>