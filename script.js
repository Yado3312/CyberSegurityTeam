document.getElementById("btn-inicio-de-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn-Crear-cuenta").addEventListener("click", register);


// Declaracion de variables
var contenedor_registrar = document.querySelector(".contenedor-registrar");
var formulario_login = document.querySelector(".formulario-login");
var formulario_registrar = document.querySelector(".formulario-registrar");
var caja_atras_login = document.querySelector(".caja_atras-login");
var caja_atras_registrar = document.querySelector(".caja_atras-registrar");

function iniciarSesion (){
    formulario_registrar.style.display = "none";
    contenedor_registrar.style.left = "10px";
    formulario_login.style.display = "block";
    caja_atras_registrar.style.opacity = "1";
    caja_atras_login.style.opacity="0";
    
    }



function register (){
formulario_registrar.style.display = "block";
contenedor_registrar.style.left = "410px";
formulario_login.style.display = "none";
caja_atras_registrar.style.opacity = "0";
caja_atras_login.style.opacity="1";

}