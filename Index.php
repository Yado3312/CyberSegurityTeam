<?php

    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: Inicio.php");
    }





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Estilos.css">
</head>
<body>
    <main>
        
        <div class="cotenedor">
             <!-- cajas traseras-->
            <div class="caja_atras">
                 <!-- cajas inicio de sesion-->
                    <div class="caja_atras-login">
                        <h3>Ya tienes una cuenta?</h3>
                        <p>Inicia sesion para jugar :)</p>
                        <button id="btn-inicio-de-sesion">Iniciar sesion</button>
                    </div>
                    <!-- cajas inicio de registro-->
                    <div class="caja_atras-registrar">
                        <h3>Aun no tienes cuenta?</h3>
                        <p>Create una</p>
                        <button id="btn-Crear-cuenta">Crear cuenta</button>
                    </div>
                    </div>




            <!-- formularios-->
            <div class="contenedor-registrar">
                <!-- formulario de inicio de sesion-->
                <form action="PHP/Login_Usuario_be.php" method="POST" class="formulario-login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name="Correo_Electronico">
                    <input type="password" placeholder="Contraseña" name="Contraseña">
                    <button>Comenzar</button>
                </form>
                <!-- formulario de registro-->
                <form action="PHP/Registro_Usuario_be.php" method="POST" class="formulario-registrar">
                    <h2>Inicia tu Registro</h2>
                    <input type="text" placeholder="Nombre completo" name="Nombre_Completo">
                    <input type="text" placeholder="Correo Electronico" name="Correo_Electronico">
                    <input type="text" placeholder="Usuario" name="Usuario">
                    <input type="password" placeholder="Contraseña" name="Contraseña">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>

    <script src="JS/script.js"> </script>


</body>
</html>