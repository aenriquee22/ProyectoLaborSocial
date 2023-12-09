<?php

include("con_bd.php");

if ($conex) {
	echo"todo correcto";
}else{
	echo"todo mal";
}

if (isset($_POST['enviar'])){
	if (strlen($_POST['nombre_estudiante']) >=1 &&
		strlen($_POST['carrera']) >=1 &&
		strlen($_POST['escuela']) >=1 &&
	strlen($_POST['nombre_tutor']) >=1 &&
	strlen($_POST['nombre_proyecto']) >=1){
		$nombre = trim($_POST['nombre_estudiante']);
		$carrera =  trim($_POST['carrera']);
		$escuela = trim($_POST['escuela']);
		$tutor = trim($_POST['nombre_tutor']);
		$n_proyecto = trim($_POST['nombre_proyecto']);
		
		$consulta = "INSERT INTO proyecto( nombre, carrera, escuela, tutor, n_proyecto) VALUES ('$nombre','$carrera','$escuela','$tutor','$n_proyecto')";
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