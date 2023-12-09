<?php

include("con_bd.php");

if ($conex) {
	echo"todo correcto";
}else{
	echo"todo mal";
}

if (isset($_POST['enviar'])){
	if (strlen($_POST['nombre']) >=1 &&
	strlen($_POST['cedula']) >=1 &&
	strlen($_POST['password']) >=1 &&
	strlen($_POST['correo'])>=1){
		$nombre = trim($_POST['nombre']);
		$cedula = trim($_POST['cedula']);
		$password = trim($_POST['password']);
		$correo = trim($_POST['correo']);
		$fecha_reg = date("d/m/y");
		$consulta = "INSERT INTO estudiantes( nombre, cedula, password, correo, fecha_reg) VALUES ('$nombre','$cedula','$password', '$correo', '$fecha_reg')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado){
				echo "<script language='JavaScript'> alert('Los datos fueron ingresados de forma correcta');
				</script>";
			}else{
				echo "<script language='JavaScript'> alert('ERROR: Los datos NO fueron ingresados de forma correcta');
				</script>";

				mysqli_close($conex);
			}
	}
}

?>