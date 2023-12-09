<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2; /* Color de fondo para el cuerpo */
    }

    .top-bar {
      background-color: #3498db; /* Color celeste para la barra superior */
      color: #fff;
      text-align: center;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .logo {
      max-width: 100px; /* Establece el ancho máximo de la imagen del logo */
    }

    .title {
      margin: 0;
    }

    .formulario__register {
      max-width: 400px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff; /* Color de fondo para el formulario */
      border: 1px solid #3498db; /* Borde celeste para el formulario */
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .formulario__register h2 {
      text-align: center;
      color: #3498db; /* Color celeste para el título del formulario */
    }

    .formulario__register input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    .formulario__register button {
      background-color: #3498db; /* Color celeste para el botón */
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
    }

    .formulario__register button:hover {
      background-color: #2980b9; /* Cambio de color al pasar el ratón sobre el botón */
    }
  </style>

    <title>Formulario con CSS</title>
</head>
<body>

  <div class="top-bar">
    <img src="assets/images/tutor.png" alt="Logo" class="logo">
    <h1 class="title">Control de reportes</h1>
  </div>
<br>
  <br>
  <br>
  <div>
   <form action="" method="post" class="formulario__register">
                        <h2>Registrar reporte</h2>
                        <input type="text" name="nombre" placeholder="Nombre completo">
                        <input type="text" name="proyecto" placeholder="proyecto">
                        <input type="text" name="observaciones" placeholder="observaciones">
                       

                        <button type="submit" name="enviar">Registrarse</button>
                    </form>
  </div>


  <?php
        include("registraravance.php");
    ?>
</body>
</html>