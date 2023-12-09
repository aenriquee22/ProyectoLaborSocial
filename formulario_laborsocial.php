<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style>
		    /* Estilos para la barra superior */
    .top-bar {
      width: 100%;
      height: 3.6cm;
      background-color: #0D336D;
      display: flex;
      align-items: center;
    }

    /* Estilos para el logo */
    .logo {
      width: 120px;
      height: 120px;
      margin-left: 80px;
    }

    /* Estilos para el título con animación */
    .title {
      animation: fade 2s infinite;
      margin-left: 10px;
    }

    body {
    font-family: Arial, sans-serif;
    margin: 0;
}


.form-container {
    width: 40%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 100px;
    text-align: center;
}

.form-control {
    padding: 10px;
    margin: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

	</style>
</head>


<body>
	  <div class="top-bar">
    <img src="up.png" alt="Logo" class="logo">
    <h1 class="title">UNIVERSIDAD DE PANAMÁ</h1>
  </div>

	<div style="width: 40%; margin-left: auto; margin-right: auto; margin-top: 100px;">
		
	<form method="post" action="registro_formulario_proyecto_lbs.php">
		<form method="post" action="forms/agregar.php">
			<h2>formulario labor social</h2>
			<input type="text" name="nombre_estudiante" class="form-control" placeholder="escriba su nombre">
			<input type="text" name="carrera" class="form-control" placeholder="escriba su carrera">
			<input type="text" name="escuela" class="form-control" placeholder="escriba su escuela">
			<button type="submit" name="enviar" class="btn btn-default">Enviar</button>

			<br>

			<select name="nombre_tutor" class="form-control">

			<?php 
				include("con_bd.php");
				//include("registro_formulario_proyecto_lbs.php");
				$getsql1 = "select * from tutor order by id_tutor";
				$getsql3 = mysqli_query($conex,$getsql1);
				while ($row = mysqli_fetch_array($getsql3)) {
					$id_tutor = $row['id_tutor'];
					$nombre = $row['nombre'];

			?>
				 <option value="<?php echo $id_tutor;?>"><?php echo $nombre; ?></option> 
					<?php
					}
			?>
			<br>
			<br>


			</select>


			<br>
			<select name="nombre_proyecto" class="form-control">

			<?php 
				include("con_bd.php");
				//include("registro_formulario_proyecto_lbs.php");
				$getsql = "select * from catalogo_proyecto order by proyecto";
				$getsql2 = mysqli_query($conex,$getsql);
				while ($row = mysqli_fetch_array($getsql2)) {
					$id_catalogo = $row['id_catalogo'];
					$proyecto = $row['proyecto'];

			?>
				 <option value="<?php echo $id_catalogo;?>"><?php echo $proyecto; ?></option> 
					<?php
					}
			?>
			<br>
			<br>


			</select>
			
		</form>
	</form>
	</div>

	<?php
        //include("registro_formulario_proyecto_lbs.php");
    ?>

</body>
</html>