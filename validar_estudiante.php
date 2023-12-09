<?php 
	$cedula =$_POST['cedula'];
	$password =$_POST['password'];

	session_start();
	$_SESSION['cedula']=$cedula;
	$conex = mysqli_connect("localhost","root","","db_labor_social");

	$consulta="SELECT*FROM estudiantes where cedula='$cedula' and password='$password'";
	$resultado=mysqli_query($conex, $consulta);

	$filas=mysqli_num_rows($resultado);

	if($filas){
	header("location:interfaz_secretaria.html");
	} else{
		?>
		<?php
		include("log_estudiante.php");
		?>
		<br>
		<br>
		<center><h1>error de autentificacion</h1></center>
		<?php
	}

mysqli_free_result($resultado);
mysqli_close($conex);
?>