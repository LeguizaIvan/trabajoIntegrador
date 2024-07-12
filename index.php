<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="login.php" method="POST" class="formularioRegistro">
        <div class="campoFormulario">
            <label for="correo" class="etiqueta">Correo Electrónico:</label>
            <input type="text" name="correo" id="correo" class="entradaTexto" required>
        </div>
        <div class="campoFormulario">
            <label for="contraseña" class="etiqueta">Contraseña:</label>
            <input type="password" name="contraseña" id="contraseña" class="entradaContraseña" required>
        </div>
        <div class="campoFormulario">
            <input type="submit" value="Iniciar Sesión" class="botonEnviar">
        </div>
        <p>¿No tienes una cuenta? <a href="register.php" class="enlace">Regístrate</a></p>
    </form>
    <br>
    <?php
    if (isset($_GET['ok'])) {
        echo "<p>Registro exitoso. Ya puedes iniciar sesión.</p>";
        echo "<a href='index.php'><button class='botonVolver'>VOLVER</button></a>";
    }
    ?>
</body>
</html>