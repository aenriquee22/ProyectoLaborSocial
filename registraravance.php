<?php

include("con_bd.php");

if ($conex) {
	echo"todo correcto";
}else{
	echo"todo mal";
}

if (isset($_POST['enviar'])){
	if (strlen($_POST['nombre']) >=1 &&
	strlen($_POST['proyecto']) >=1 &&
	strlen($_POST['observaciones']) >=1){
		$nombre = trim($_POST['nombre']);
		$proyecto = trim($_POST['proyecto']);
		$observaciones = trim($_POST['observaciones']);
		$fecha = date("d/m/y");

		$consulta = "INSERT INTO reporte( nombre, proyecto, observaciones, fecha) VALUES ('$nombre','$proyecto','$observaciones', '$fecha')";
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