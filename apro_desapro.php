<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PROYECTO</title>

	<script type="text/javascript">
		function confirmar() {
			// body...
			return confirm('¿Esta seguro de que quiere eliminar a este estudiante?');
		}
	</script>
	<link rel="stylesheet" type="text/css" href="assets/css/estiloshoras.css">

</head>
<body>
<div class="top-bar">
<img src="up.png" alt="Logo" class="logo">
<h1 class="title">ACEPTAR O RECHAZAR</h1>
</div>
	
	<?php 
		include("con_bd.php");

		$sql="select * from proyecto";
		$resultado=mysqli_query($conex,$sql);
	 ?>
	<h1>ACEPTAR O RECHAZAR PROYECTO</h1>
 <a href="interfaz_tutor.html">VOLVER</a> 
<br>
<br>


<br>
<br>
<table>
	<thead>
		
		<tr>
				<th>id</th>
				 <th>nombre</th>
				 <th>tutor</th>
				 <th>n_proyecto</th>
				 <th>estado</th>
		</tr>

	</thead>
	<tbody>
			<?php 
					while ($filas=mysqli_fetch_assoc($resultado)) {
 			?>
 	<tr>
		<td> <?php echo $filas['id_proyecto']; ?> </td>
		<td> <?php echo $filas['nombre']; ?> </td>
		<td> <?php echo $filas['tutor']; ?> </td>
		<td> <?php echo $filas['n_proyecto']; ?> </td>
		<td> <?php echo $filas['estado']; ?> </td>
		<form method="post" action="procesar.php">

			<td>
				<a href='editar_horas.php?id_proyecto=<?php echo $filas['id_proyecto']; ?>' name="rechazar">RECHAZAR</a>
				<a href='#' onclick='confirmar(<?php echo $filas['id']; ?>)' name="aceptar">ACEPTAR</a>
			</td>
		</form>


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