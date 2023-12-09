<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario Agregar Proyecto</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estilos_agregar.css">
</head>
<body>
	<div class="top-bar">
	<img src="assets/css/Logo.png" alt="Logo" class="logo">
	<h1 class="title">AGREGAR CATALOGO DE PROYECTO</h1>
	</div>
	<?php 
		if (isset($_POST['enviar'])) {
			$proyecto=$_POST['proyecto'];
			

			include("con_bd.php");
			$sql= "INSERT INTO catalogo_proyecto(proyecto)VALUES('$proyecto')";

			$resultado = mysqli_query($conex,$sql);
			if($resultado){
				echo "<script language='JavaScript'> alert('Los datos fueron ingresados de forma correcta');
				location.assign('agregar.php')
				</script>";

				//header("location: formulario_laborsocial.php");
				
			}else{
				echo "<script language='JavaScript'> alert('ERROR: Los datos NO fueron ingresados de forma correcta');
				location.assign('agregar.php')
				</script>";

				mysqli_close($conex);
			}
			
		}else{
	 ?>



	<h1>Agregar Proyecto</h1>
	<center>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<label>Nombre Proyeto:</label>
		<input type="text" name="proyecto"> <br>
		

		<input type="submit" name="enviar" class="boton" value="AGREGAR">
		<a href="interfaz_tutor.html">Regresar</a>
	</form>
	</center>
	<?php 
		}
	 ?>

</body>
</html>