<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Regístrate</h1>
    <form action="registrar.php" method="POST" class="formularioRegistro">
        <div class="campoFormulario">
            <label for="nombreCompleto" class="etiqueta">Nombre Completo:</label>
            <input type="text" name="nombreCompleto" id="nombreCompleto" class="entradaTexto" required>
        </div>
        <div class="campoFormulario">
            <label for="correo" class="etiqueta">Correo Electrónico:</label>
            <input type="email" name="correo" id="correo" class="entradaTexto" required>
        </div>
        <div class="campoFormulario">
            <label for="contraseña" class="etiqueta">Contraseña:</label>
            <input type="password" name="contraseña" id="contraseña" class="entradaContraseña" required>
        </div>
        <div class="campoFormulario">
            <input type="submit" value="Registrarse" class="botonEnviar">
        </div>
        <p>¿Ya tienes una cuenta? <a href="index.php" class="enlace">Iniciar Sesión</a></p>
    </form>
</body>
</html>
