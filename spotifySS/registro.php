<?php
include("conexion.php");

if(isset($_POST['registrar'])){

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $sql = "INSERT INTO usuarios
    (nombre,correo,contrasena)
    VALUES
    ('$nombre','$correo','$contrasena')";

    if($conn->query($sql)){

        $_SESSION['usuario'] = $nombre;

        header("Location:lobby.php");
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>MusicWave - Registro</title>

<link rel="stylesheet" href="css/estilo.css">

</head>

<body>

<div class="contenedor">

<div class="logo">
🎵
</div>

<h1>Crear Cuenta</h1>

<p class="subtitulo">
Únete y descubre millones de canciones
</p>

<form method="POST">

<input
type="text"
name="nombre"
placeholder="Nombre completo"
required>

<input
type="email"
name="correo"
placeholder="Correo electrónico"
required>

<input
type="password"
name="contrasena"
placeholder="Contraseña"
required>

<button name="registrar">
Registrarme
</button>

</form>

<div class="link">

¿Ya tienes cuenta?

<br><br>

<a href="index.php">
Iniciar sesión
</a>

</div>

</div>

</body>

</html>