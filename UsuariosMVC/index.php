<?php
//El index que muestra al usuario la salida de las vistas y a través de el enviaremos las diferentes acciones del usuario al controlador.
//Mostrar la plantilla al usuario(template.php) a cual se alojara en views

//Se llaman a los archivos que tienen todos los metodos.
require_once "models/enlaces.php";
require_once "models/crud.php";
require_once "controllers/controller.php";
//crea el objeto:
$mvc = new MvcController();
//muestra la función "pagina" que se encuentra en controlles/controller.php
$mvc -> pagina();
?>