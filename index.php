<?php

#El INDEX: En el mostramos la salida de las vistas al usuario y tambien enviaremos a traves 
#las distintas acciones que el usuario envie al controlador.

#require() establece que el codigo del archivo invocado es requerido, es decir, obligatorio 
#para el funcionamiento  del programa. Por ello, si el archivo especificado en la funcion require() 
#no se encuentra saltara un error PHP FATAL ERROR, y el programa PHP se detendra.

require_once "controladores/planilla.controlador.php";
require_once "controladores/formulario.controlador.php";
require_once "modelos/formularios.modelo.php";



$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


?>