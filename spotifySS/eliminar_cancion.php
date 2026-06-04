<?php

include("conexion.php");

$id = $_GET['id'];

$conn->query(
"DELETE FROM musica
WHERE id_cancion=$id"
);

header("Location:musica.php");

?>