<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
        <script>
        alert("has inicio de sesion");
        window.location = "index.php";
        </script>';
        
        die();
    }

    session_destroy();
    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginning</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header class="header">
        <!-- el div es el encargado del menú -->
        <div class="menu container">
            <a href="#" class="logo">Logo</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="Index.php">Login</a></li>
                    <li><a href="moreAbout.html">More about</a></li>
                    <li><a href="reportBugs.html">Report bug</a></li>
                    
                </ul>
            </nav>
        </div>  

        <!-- Este div es el encargado de la cabecera -->
        <div class="header-content container">
            <div class="header-txt">
                <h1>Donde <span style="border-color: white;">jugar</span> te hace aprende    </h1>
                <p>
                    Aqui somos expertos en ciberseguridad. Ofrecemos soluciones avanzadas para proteger tus datos, 
                    sistemas y operaciones frente a las amenazas cibernéticas más complejas. 
                    Mantén tu información segura con nuestra 
                    experiencia y tecnología de vanguardia.
                </p>
                <!-- Div encargado de los botones principales -->
                <div class="botones">
                    <a href="#" class="btn-1">Información</a>
                    <a href="#" class="btn-1">Jugar</a>
                </div>
            </div>
        </div>
        <video autoplay muted loop> <!--Usamos un video como fondo -->
            <source src="ma2.mp4" type="video/mp4">
        </video>
    </header>

    <!-- El main es el encargado del contenido principal -->
    <main class="product container">
        <h2>Servicios disponibles</h2>
        <div class="product-content">
            <div class="product-1">
                <img src="images/l1.jpg" alt="">
                <div class="product-txt"> 
                    <h3>Beingeniers</h3>
                    <div class="price">
                        <a href="#" class="btn-2">Take</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="images/l2.jpg" alt="">
                <div class="product-txt">
                    <h3>Identificar un virus</h3>
                    <div class="price">
                        <a href="#" class="btn-2">Take</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="images/l3.jpg" alt="">
                <div class="product-txt">
                    <h3>ACL</h3>
                    <div class="price">
                        <a href="#" class="btn-2">Take</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="images/l4.jpg" alt="">
                <div class="product-txt">
                    <h3>Redireccionamiento</h3>
                    <div class="price">
                        <a href="#" class="btn-2">Take</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="images/l5.jpg" alt="">
                <div class="product-txt">
                    <h3>Un poco de todo</h3>
                    <div class="price">
                        <a href="#" class="btn-2">Take</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="images/l6.jpg" alt="">
                <div class="product-txt">
                    <h3>Enrutamiento</h3>
                    <div class="price">
                        <a href="#" class="btn-2">Take</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Información inferior de la página -->
    <footer class="footer container">
        <div class="link">
            <a href="#" class="logo">Logo</a>
        </div>
        <div class="link">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Ayudas</a></li>
                <li><a href="#">Producto</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
