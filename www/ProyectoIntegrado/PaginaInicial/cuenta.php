<?php 
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Cloud</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
    <script defer src="index.js"></script>
    <link rel="icon" type="image/x-icon" href="imagenes/favicon.ico">
</head>
<body>
<header class="header">
    <nav class="nav">
        <a href="index.html" class="logo nav-link">PRIVATE CLOUD</a>
        <button class="nav-toggle" aria-label="Abrir menú">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu ">
            <li class="nav-menu-item">
                <a href="index.php" class="nav-menu-link nav-link">Login</a>
            </li>
            <li class="nav-menu-item">
                <a href="registrarse.php" class="nav-menu-link nav-link">Registrarse</a>
            </li>
            <li class="nav-menu-item">
                <a href="conocenos.html" class="nav-menu-link nav-link">Sobre Nosotros</a>
            </li>
        </ul>
    </nav>
</header>
<main>
</main>

<section id="nuestros-cursos">
    <div class="container">
        <h2>Nuestras <span class="colorletra">Asignaturas.</span></h2>
        <div class="programas">
        <div class="carta">
            <h3>SRI</h3>
                <form onsumbit="return false">
				<a download="SRI" href="SRI.zip" id="a1">
					<button onclick="document.getElementById('a1').click()">
					⬇Descargar
					</button>
				</a>
				</form>
        </div>
        <div class="carta">
            <h3>SAD</h3>
			<form onsumbit="return false">
				<a download="SAD" href="SAD.zip" id="a2">
					<button onclick="document.getElementById('a2').click()">
					⬇Descargar
					</button>
				</a>
				</form>
        </div>
        <div class="carta">
            <h3>ASO</h3>
			<form onsumbit="return false">
				<a download="ASO" href="ASO.zip" id="a3">
					<button onclick="document.getElementById('a3').click()">
					⬇Descargar
					</button>
				</a>
				</form>
        </div>
        <div class="carta">
            <h3>IAW</h3>
			<form onsumbit="return false">
				<a download="IAW" href="IAW.zip" id="a4">
					<button onclick="document.getElementById('a4').click()">
					⬇Descargar
					</button>
				</a>
				</form>
        </div>
        <div class="carta">
            <h3>HLC</h3>
			<form onsumbit="return false">
				<a download="HLC" href="HLC.zip" id="a5">
					<button onclick="document.getElementById('a5').click()">
					⬇Descargar
					</button>
				</a>
				</form>
        </div>
        <div class="carta">
            <h3>EIE</h3>
			<form onsumbit="return false">
				<a download="EIE" href="EIE.zip" id="a6">
					<button onclick="document.getElementById('a6').click()">
					⬇Descargar
					</button>
				</a>
				</form>
        </div>
        <div class="carta">
            <h3>ABD</h3>
			<form onsumbit="return false">
				<a download="ABD" href="ABD.zip" id="a7">
					<button onclick="document.getElementById('a7').click()">
					⬇Descargar
					</button>
				</a>
				</form>
        </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <p>&copy; PrivateCloud 2022</p>
    </div>
</footer>
</body>
</html>
