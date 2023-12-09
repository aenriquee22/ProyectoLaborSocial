<?php 

include("con_bd.php");
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EDITAR</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estilos5notasprof.css">
</head>
<body>
	<div class="top-bar">
	<img src="logo.png" alt="Logo" class="logo">
	<h1 class="title">Universidad de Panamá</h1>
	</div>
	<?php 
		if (isset($_POST['enviar'])) {
			$id_proyecto=$_POST['id_proyecto'];
			$nombre=$_POST['nombre'];
			$tutor=$_POST['tutor'];
			$horas=$_POST['horas'];


			$sql= "update proyecto set nombre='".$nombre."', tutor='".$tutor."',horas='".$horas."' where id_proyecto='".$id_proyecto."'";
			$resultado = mysqli_query($conex,$sql);
			if ($resultado ) {
				echo "<script language='JavaScript'> alert('Los datos fueron actualizados de forma correcta');
				location.assign('agregar_horas.php')
				</script>";
			}else{
				echo "<script language='JavaScript'> alert('ERROR: Los datos NO fueron actualizados de forma correcta');
				location.assign('agregar_horas.php')
				</script>";
			}
			mysqli_close($conex);
			
		}else{
			$id_proyecto=$_GET['id_proyecto'];
			$sql="select * from proyecto where id_proyecto='".$id_proyecto."'";
			$resultado=mysqli_query($conex,$sql);

			$fila=mysqli_fetch_assoc($resultado);
			$nombre=$fila["nombre"];
			$tutor=$fila["tutor"];
			$horas=$fila["horas"];
			mysqli_close($conex);
	 ?>



	<h1>Editar Notas</h1>
	<br>
	

	<br>
	<br>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		
		<label>Nombre:</label>
		<input type="text" name="nombre" value="<?php  echo $nombre;?>"> <br>
		<label>Tutor:</label>
		<input type="text" name="tutor" value="<?php  echo $tutor;?>"> <br>
		<label>Horas:</label>
		<input type="text" name="horas" value="<?php  echo $horas;?>"> <br>

		<input type="hidden" name="id_proyecto" value="<?php  echo $id_proyecto;?>">
		<input type="submit" name="enviar" class="boton" value="ACTUALIZAR">
		<a href="agregar_horas.php">Regresar</a>
	</form>
	<?php 
		}
	 ?>

	 <!--<button onclick="mostrarCalculadora()">Abrir Calculadora</button> -->



</body>
</html>