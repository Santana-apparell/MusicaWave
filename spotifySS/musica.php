<?php
include("conexion.php");

$resultado = $conn->query("SELECT * FROM musica");
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Administrar Canciones</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    padding:30px;

    background:
    linear-gradient(
    rgba(0,0,0,.8),
    rgba(0,0,0,.8)
    ),
    url('https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f');

    background-size:cover;
    background-position:center;

    color:white;
}

.contenedor{
    max-width:1200px;
    margin:auto;

    background:rgba(15,15,15,.9);

    padding:25px;

    border-radius:20px;

    box-shadow:
    0 0 20px rgba(29,185,84,.4);
}

h1{
    text-align:center;
    margin-bottom:25px;
    color:#1DB954;
}

.botones{
    display:flex;
    gap:10px;
    margin-bottom:20px;
}

.btn{
    text-decoration:none;
    color:white;

    padding:12px 20px;

    border-radius:10px;

    font-weight:bold;

    transition:.3s;
}

.btn:hover{
    transform:scale(1.05);
}

.agregar{
    background:#1DB954;
}

.lobby{
    background:#3498db;
}

.editar{
    background:#f39c12;
}

.eliminar{
    background:#e74c3c;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#1DB954;
    padding:15px;
}

td{
    background:#222;
    padding:15px;
    text-align:center;
}

tr:hover td{
    background:#333;
}

</style>

</head>

<body>

<div class="contenedor">

<h1>🎵 Administración de Canciones</h1>

<div class="botones">

<a href="agregar_cancion.php" class="btn agregar">
➕ Agregar Canción
</a>

<a href="lobby.php" class="btn lobby">
🏠 Volver al Lobby
</a>

</div>

<table>

<tr>
<th>ID</th>
<th>Título</th>
<th>Artista</th>
<th>Género</th>
<th>Año</th>
<th>Acciones</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()){ ?>

<tr>

<td><?php echo $fila['id_cancion']; ?></td>

<td><?php echo $fila['titulo']; ?></td>

<td><?php echo $fila['artista']; ?></td>

<td><?php echo $fila['genero']; ?></td>

<td><?php echo $fila['anio_lanzamiento']; ?></td>

<td>

<a
class="btn editar"
href="editar_cancion.php?id=<?php echo $fila['id_cancion']; ?>">
✏️ Editar
</a>

<a
class="btn eliminar"
href="eliminar_cancion.php?id=<?php echo $fila['id_cancion']; ?>">
🗑️ Eliminar
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>