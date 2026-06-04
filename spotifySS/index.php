<?php
include("conexion.php");

if(isset($_POST['login'])){

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM usuarios
            WHERE correo='$correo'
            AND contrasena='$contrasena'";

    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){

        $usuario = $resultado->fetch_assoc();

        $_SESSION['usuario'] = $usuario['nombre'];

        header("Location:lobby.php");
    }else{
        echo "<script>alert('Correo o contraseña incorrectos');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>MusicWave - Login</title>

<link rel="stylesheet" href="css/estilo.css">

</head>

<body>

<div class="contenedor">

<div class="logo">
🎧
</div>

<h1>MusicWave</h1>

<p class="subtitulo">
Inicia sesión para escuchar tu música favorita
</p>

<form method="POST">

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

<button name="login">
Iniciar Sesión
</button>

</form>

<div class="link">

¿No tienes cuenta?

<br><br>

<a href="registro.php">
Crear cuenta
</a>

</div>

</div>

</body>

</html>