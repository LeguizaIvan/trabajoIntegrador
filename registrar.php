<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "trabajoPractico";

$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreCompleto = $_POST['nombreCompleto'];
    $correo = $_POST['correo'];
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombreCompleto, correo, contraseña) VALUES ('$nombreCompleto', '$correo', '$contraseña')";

    if ($conexion->query($sql) === TRUE) {
        header('Location: index.php?ok');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    $conexion->close();
}
?>
