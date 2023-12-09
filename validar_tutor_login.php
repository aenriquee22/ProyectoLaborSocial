<?php 
	$usuario =$_POST['usuario'];
	$contrasena =$_POST['contrasena'];

	session_start();
	$_SESSION['usuario']=$usuario;
	$conex = mysqli_connect("localhost","root","","db_labor_social");

	$consulta="SELECT*FROM tutor where usuario='$usuario' and password='$contrasena'";
	$resultado=mysqli_query($conex, $consulta);

	$filas=mysqli_num_rows($resultado);

	if($filas){
	header("location:interfaz_tutor.html");
	} else{
		?>
		<?php
		include("log_tutor.php");
		?>
		<br>
		<br>
		<center><h1>error de autentificacion</h1></center>
		<?php
	}

mysqli_free_result($resultado);
mysqli_close($conex);
?>