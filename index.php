<?php
// index.php

// carga e inicia algunas librerías globales
require_once 'modelos/modelos.php';
require_once 'controladores/controladores.php';
 
// encamina la petición internamente

$uri = $_SERVER['REQUEST_URI'];
if ($uri == '/index.php' or $uri == '/') {
    $default->default_action();
} elseif ($uri == '/index.php?/sol/cuotas2014') { //&& isset($_GET['id'])) {
    $sol->cuotas2014_action();//show_action($_GET['id']);
} elseif ($uri == '/index.php?/sol/IBI2000_2014') { 
    $sol->IBI2000_2014_action();
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}

