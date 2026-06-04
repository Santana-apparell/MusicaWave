<?php
include("conexion.php");

if(!isset($_SESSION['usuario'])){
header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>

<head>

<title>MusicWave</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#0f172a;
color:white;
display:flex;
height:100vh;
overflow:hidden;
}

.sidebar{
width:250px;
background:#111827;
padding:30px;
}

.logo{
font-size:30px;
font-weight:bold;
margin-bottom:40px;
color:#06b6d4;
}

.menu a{
display:block;
padding:15px;
margin-bottom:10px;
background:#1f2937;
border-radius:10px;
color:white;
text-decoration:none;
transition:.3s;
}

.menu a:hover{
background:#7c3aed;
}

.main{
flex:1;
padding:30px;
overflow:auto;
}

.bienvenida{
font-size:28px;
margin-bottom:25px;
}

.search{
width:100%;
padding:15px;
border:none;
border-radius:15px;
background:#1f2937;
color:white;
margin-bottom:30px;
}

.grid{
display:grid;
grid-template-columns:
repeat(auto-fill,minmax(220px,1fr));
gap:25px;
}

.card{
background:#1e293b;
border-radius:20px;
padding:20px;
transition:.3s;
cursor:pointer;
}

.card:hover{
transform:translateY(-8px);
}

.cover{
height:180px;
border-radius:15px;
margin-bottom:15px;

background:linear-gradient(
135deg,
#7c3aed,
#06b6d4
);
}

.card h3{
margin-bottom:10px;
}

.player{
position:fixed;
bottom:0;
left:250px;
right:0;
height:80px;
background:#111827;
display:flex;
align-items:center;
justify-content:center;
font-size:24px;
}

</style>

</head>

<body>

<div class="sidebar">

<div class="logo">
🎵 MusicWave
</div>

<div class="menu">

<a href="#">🏠 Inicio</a>
<a href="#">🔥 Tendencias</a>
<a href="#">🎶 Biblioteca</a>
<a href="#">❤️ Favoritos</a>
<a href="logout.php">🚪 Salir</a>
<a href="musica.php">
🎵 Administrar Canciones
</a>

</div>

</div>

<div class="main">

<div class="bienvenida">
Hola,
<?php echo $_SESSION['usuario']; ?>
👋
</div>

<input
type="text"
class="search"
placeholder="Buscar canciones, artistas o álbumes...">

<div class="grid">

<div class="card">
<div class="cover"></div>
<h3>Top Hits 2026</h3>
<p>Las más escuchadas.</p>
</div>

<div class="card">
<div class="cover"></div>
<h3>Rock Legends</h3>
<p>Clásicos inolvidables.</p>
</div>

<div class="card">
<div class="cover"></div>
<h3>Electronic Vibes</h3>
<p>Lo mejor de la electrónica.</p>
</div>

<div class="card">
<div class="cover"></div>
<h3>Latin Music</h3>
<p>Ritmos latinos.</p>
</div>

<div class="card">
<div class="cover"></div>
<h3>Regional MX</h3>
<p>Lo más popular.</p>
</div>

<div class="card">
<div class="cover"></div>
<h3>Pop Global</h3>
<p>Éxitos mundiales.</p>
</div>

</div>

</div>

<div class="player">
⏮️ ▶️ ⏭️
</div>

</body>

</html>