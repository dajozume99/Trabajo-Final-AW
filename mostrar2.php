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
                <li class="active"><a href="mostrar.php">Mostrar</a></li>
                <li><a href="insertar.php">Insertar</a></li>
				<li><a href="modificar.php">Modificar</a></li>
				<li><a href="eliminar.php">Eliminar</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
      
<div class="container marketing">
	<h2>Títulos</h2>
		<div class="container">
	
            <?php
			$servidor = "xampp";
	        $usuario = "root";
	        $password = "";
	        $db = "futbol";
            
            $conn = new mysqli($servidor, $usuario, $password, $db);

			if ($conn->connect_error) {
				die("Connexió KO: " . $conn->connect_error);
			} 
			else {

				$sql = "SELECT nom, codiequip FROM titols";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					echo "<table class=table table-bordered";
					echo "<tr>";
					echo "<th>Títulos del equipo</th> <th>Equipo</th>";
					echo "</tr>";
					while($rows = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $rows['nom'] . "</td>";
                        if ($rows['codiequip'] == "1") {
                            $escut = "img/escudobarcelona.PNG";
                        }
                        if ($rows['codiequip'] == "2") {
                            $escut = "img/escudomadrid.PNG";
                        }
                        if ($rows['codiequip'] == "3") {
                            $escut = "img/escudoatletic.PNG";
                        }
                        if ($rows['codiequip'] == "4") {
                            $escut = "img/escudosevilla.PNG";
                        }
                        if ($rows['codiequip'] == "5") {
                            $escut = "img/escudoalaves.PNG";
                        }
                        if ($rows['codiequip'] == "6") {
                            $escut = "img/escudogetafe.png";
                        }
                        if ($rows['codiequip'] == "7") {
                            $escut = "img/escudobetis.PNG";
                        }
                        if ($rows['codiequip'] == "8") {
                            $escut = "img/escudosociedad.PNG";
                        }
                        if ($rows['codiequip'] == "9") {
                            $escut = "img/escudovalencia.PNG";
                        }
                        if ($rows['codiequip'] == "10") {
                            $escut = "img/escudolevante.PNG";
                        }
                        echo "<td><img src=/". $escut . "></td>";
                        }
						echo "</tr>";
					echo "</table>";
				} else {
					echo "No hay registros disponibles";
				}
				$conn->close();
			}
		?>
		<br>
			<a href="mostrar.php"><button type = "button" class = "btn btn-default">Mostrar equipos</button></a>
			
		</div>
		
		<hr class="featurette-divider">

		<!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2019 Daniel Jonathan Zurita Mena &middot; </p>
      </footer>
      </div>
</body>
</html>