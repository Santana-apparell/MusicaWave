<?php
include("conexion.php");

$id = $_GET['id'];

$consulta = $conn->query(
"SELECT * FROM musica
WHERE id_cancion=$id"
);

$cancion = $consulta->fetch_assoc();

if(isset($_POST['actualizar'])){

    $titulo = $_POST['titulo'];
    $artista = $_POST['artista'];
    $genero = $_POST['genero'];
    $anio = $_POST['anio'];

    $sql = "UPDATE musica SET

    titulo='$titulo',
    artista='$artista',
    genero='$genero',
    anio_lanzamiento='$anio'

    WHERE id_cancion=$id";

    $conn->query($sql);

    header("Location:musica.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Editar Canción</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{

    min-height:100vh;

    display:flex;
    justify-content:center;
    align-items:center;

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

    width:500px;

    background:rgba(15,15,15,.9);

    padding:35px;

    border-radius:20px;

    box-shadow:
    0 0 20px rgba(29,185,84,.4);
}

h1{

    text-align:center;
    color:#f39c12;
    margin-bottom:25px;
}

input{

    width:100%;

    padding:15px;

    margin-bottom:15px;

    border:none;

    border-radius:10px;

    background:#222;

    color:white;

    font-size:15px;
}

input:focus{

    outline:none;

    box-shadow:
    0 0 10px #f39c12;
}

button{

    width:100%;

    padding:15px;

    border:none;

    border-radius:10px;

    background:#f39c12;

    color:white;

    font-size:16px;

    font-weight:bold;

    cursor:pointer;

    transition:.3s;
}

button:hover{

    background:#e67e22;

    transform:scale(1.03);
}

.volver{

    display:block;

    text-align:center;

    margin-top:15px;

    text-decoration:none;

    color:white;

    background:#3498db;

    padding:12px;

    border-radius:10px;
}

.volver:hover{

    background:#2980b9;
}

</style>

</head>

<body>

<div class="contenedor">

<h1>✏️ Editar Canción</h1>

<form method="POST">

<input
type="text"
name="titulo"
value="<?php echo $cancion['titulo']; ?>"
required>

<input
type="text"
name="artista"
value="<?php echo $cancion['artista']; ?>"
required>

<input
type="text"
name="genero"
value="<?php echo $cancion['genero']; ?>"
required>

<input
type="number"
name="anio"
value="<?php echo $cancion['anio_lanzamiento']; ?>"
required>

<button name="actualizar">
🎵 Actualizar Canción
</button>

</form>

<a href="musica.php" class="volver">
⬅ Volver
</a>

</div>

</body>

</html>