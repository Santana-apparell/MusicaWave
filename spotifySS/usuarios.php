<?php
include("conexion.php");

$sql = "SELECT * FROM usuarios";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Usuarios</title>
</head>
<body>

<h1>Administración de Usuarios</h1>

<a href="crear_usuario.php">
Nuevo Usuario
</a>

<br><br>

<table border="1">

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Rol</th>
    <th>Acciones</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()){ ?>

<tr>

<td><?php echo $fila['id_usuario']; ?></td>

<td><?php echo $fila['nombre']; ?></td>

<td><?php echo $fila['correo']; ?></td>

<td><?php echo $fila['rol']; ?></td>

<td>

<a href="editar_usuario.php?id=<?php echo $fila['id_usuario']; ?>">
Editar
</a>

|

<a href="eliminar_usuario.php?id=<?php echo $fila['id_usuario']; ?>">
Eliminar
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>