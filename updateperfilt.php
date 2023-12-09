<?php 

include("con_bd.php");
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EDITAR</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estiloshoras.css">
</head>
<body>
	<div class="top-bar">
	<img src="up.png" alt="Logo" class="logo">
	<h1 class="title">actualizar perfil</h1>
	</div>
	<?php 
		if (isset($_POST['enviar'])) {
			$id_tutor=$_POST['id_tutor'];
			$nombre=$_POST['nombre'];
			$correo=$_POST['correo'];
			$usuario=$_POST['usuario'];
			$password=$_POST['password'];

			$sql= "update tutor set nombre='".$nombre."', correo='".$correo."',usuario='".$usuario."',password='".$password."' where id_tutor='".$id_tutor."'";
			$resultado = mysqli_query($conex,$sql);
			if ($resultado ) {
				echo "<script language='JavaScript'> alert('Los datos fueron actualizados de forma correcta');
				location.assign('updatee.php')
				</script>";
			}else{
				echo "<script language='JavaScript'> alert('ERROR: Los datos NO fueron actualizados de forma correcta');
				location.assign('updatee.php')
				</script>";
			}
			mysqli_close($conex);
			
		}else{
			$id_tutor=$_GET['id_tutor'];
			$sql="select * from tutor where id_tutor='".$id_tutor."'";
			$resultado=mysqli_query($conex,$sql);

			$fila=mysqli_fetch_assoc($resultado);
			$nombre=$fila["nombre"];
			$correo=$fila["correo"];
			$usuario=$fila["usuario"];
			$password=$fila["password"];
			mysqli_close($conex);
	 ?>



	<h1>Editar Notas</h1>
	<br>
	

	<br>
	<br>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		
		<label>Nombre:</label>
		<input type="text" name="nombre" value="<?php  echo $nombre;?>"> <br>
		<label>Correo:</label>
		<input type="text" name="correo" value="<?php  echo $correo;?>"> <br>
		<label>Usuario:</label>
		<input type="text" name="usuario" value="<?php  echo $usuario;?>"> <br>
		<label>Password:</label>
		<input type="text" name="password" value="<?php  echo $password;?>"> <br>

		<input type="hidden" name="id_tutor" value="<?php  echo $id_tutor;?>">
		<input type="submit" name="enviar" class="boton" value="ACTUALIZAR">
		<a href="interfaz_tutor.html">Regresar</a>
	</form>
	<?php 
		}
	 ?>

	 <!--<button onclick="mostrarCalculadora()">Abrir Calculadora</button> -->



</body>
</html>