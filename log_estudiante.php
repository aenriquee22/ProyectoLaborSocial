<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilossss.css">
</head>
<body>
<div class="container">
    <div class="logo"></div>
    <h1 class="title">Secretaria Virtual</h1>
  </div>
  <br>
  <br>
  <br>
  <br>
        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="validar_estudiante.php" method="post" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" name="cedula" placeholder="Cedula">
                        <input type="password" name="password" placeholder="Password">
                        <button>Iniciar</button>
                    </form>

                    <!--Register-->
                    <form action="" method="post" class="formulario__register">
                        <h2>Primer Ingreso</h2>
                        <input type="text" name="nombre" placeholder="Nombre completo">
                        <input type="text" name="cedula" placeholder="Cedula">
                        <input type="password" name="password" placeholder="Password">
                        <input type="text" name="correo" placeholder="Correo">

                        <button type="submit" name="enviar">Registrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>

    <?php
        include("registro_estudiante.php");
    ?>
</body>
</html>