<?php 
	$usuario =$_POST['usuario'];
	$contrasena =$_POST['contrasena'];

	session_start();
	$_SESSION['usuario']=$usuario;
	$conex = mysqli_connect("localhost","root","","db_labor_social");

	$consulta="SELECT*FROM comision where usuario='$usuario' and password='$contrasena'";
	$resultado=mysqli_query($conex, $consulta);

	$filas=mysqli_num_rows($resultado);

	if($filas){
	header("location:interfaz_comision.html");
	} else{
		?>
		<?php
		include("log_comision.php");
		?>
		<br>
		<br>
		<center><h1>error de autentificacion</h1></center>
		<?php
	}

mysqli_free_result($resultado);
mysqli_close($conex);
?>