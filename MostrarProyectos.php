<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notas</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estilotabla.css">
		<!--<style>
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
	</style> -->

	</head>
<body>
<div class="top-bar">
<img src="UP.png" alt="Logo" class="logo">
<h1 class="title">proyectos</h1>
</div>

	<?php 
		include("con_bd.php");

		$sql="SELECT * from catalogo_proyecto";
		$resultado=mysqli_query($conex,$sql);
	 ?>
	<h1>Proyectos</h1>
	<br>
	<br>
	<br>
	<br>
<table>
	<thead>
		
		<tr>
				 <th>id_catalogo</th>
				 <th>proyecto</th>
				
		</tr>

	</thead>
	<tbody>
			<?php 
					while ($filas=mysqli_fetch_assoc($resultado)) {
 			?>
 	<tr>
		<td> <?php echo $filas['id_catalogo']; ?> </td>
		<td> <?php echo $filas['proyecto']; ?> </td>


		</td>
	</tr>
			<?php 
					}
			 ?>
	</tbody>
</table>
<?php 
	mysqli_close($conex);
 ?>
</body>
</html>