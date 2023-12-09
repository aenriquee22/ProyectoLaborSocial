<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update</title>

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
<h1 class="title">Actualizar perfil</h1>
</div>
	
	<?php 
		include("con_bd.php");

		$sql="select * from tutor";
		$resultado=mysqli_query($conex,$sql);
	 ?>
	<h1>Agregar Horas</h1>
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
				 <th>correo</th>
				 <th>usuario</th>
				 <th>password</th>
		</tr>

	</thead>
	<tbody>
			<?php 
					while ($filas=mysqli_fetch_assoc($resultado)) {
 			?>
 	<tr>
		<td> <?php echo $filas['id_tutor']; ?> </td>
		<td> <?php echo $filas['nombre']; ?> </td>
		<td> <?php echo $filas['correo']; ?> </td>
		<td> <?php echo $filas['usuario']; ?> </td>
		<td> <?php echo $filas['password']; ?> </td>
		<td>
<?php echo "<a href='updateperfilt.php?id_tutor=".$filas['id_tutor']."'>EDITAR</a>"; ?>
			-
			 <!-- <?php /* echo " <a href='eliminar.php?id_nota=".$filas['id_nota']."' onclick='return confirmar()'>ELIMINAR</a>";  */ ?>  -->

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