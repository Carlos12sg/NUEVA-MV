<?php 
	session_start();
	unset($_SESSION['usuario']);
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
    <link rel="icon" type="image/x-icon" href="/imagenes/favicon.ico">
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
<!--//////////*LOGIN*///////////////-->
	<div class="w3-green">
		<h2>INICIO DE <span class="colorletra">SESIÓN</span></h2>
   	</div>

	<form class="formulario" action="controller_login.php" method="post">
		<p class="contenedor_label_formulario">
			<label class="w3-label">
				USUARIO
			</label>
			<input class="w3-input w3-border " type="text" name="usuario">
		</p>
		<p class="contenedor_label_formulario">
			<label class="w3-label">CONTRASEÑA</label>
			<input class="w3-input w3-border" type="password" name="pas">
		</p>
		<p class="contenedor_boton_formulario">
			<input type="hidden" name="entrar" value="entrar">
			<button>ACEPTAR</button>
		</p>
		<p>Si aún no tienes cuenta ve al siguiente link <a href="registrarse.php">REGISTRARSE</a></p>
	</form>
    <footer>
        <div class="container">
            <p>&copy; PrivateCloud 2022</p>
        </div>
    </footer>
</body>
</html>
