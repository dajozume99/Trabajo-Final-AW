<?php
/*-----------------------
Autor: Obed Alvarado
http://www.obedalvarado.pw
Fecha: 27-02-2016
Version de PHP: 5.6.3
----------------------------*/
	# conectare la base de datos
    $con=@mysqli_connect('xampp', 'root', '', 'futbol');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST["codiequip"])) {
           $errors[] = "Codiequip vacío";
		} else if (empty($_POST['nom'])){
			$errors[] = "Nom vacío";
		}   else if (
			!empty($_POST['codiequip']) &&
			!empty($_POST['nom'])
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$codiequip=mysqli_real_escape_string($con,(strip_tags($_POST["codiequip"],ENT_QUOTES)));
		$nom=mysqli_real_escape_string($con,(strip_tags($_POST["nom"],ENT_QUOTES)));
		
		$sql="UPDATE 'titols' SET  'nom'='".$nom."' WHERE 'codiequip'='".$codiequip."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido actualizados satisfactoriamente.";
                header( "refresh:1; url=index.php");
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>