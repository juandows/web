<?php
// index.php
ini_set('display_errors', 'on');
// carga e inicia algunas librerías globales
require_once 'lib/autoload.php';

use controladores\index as index;
use controladores\sol as sol;

// encamina la petición internamente

$uri = $_SERVER['REQUEST_URI'];
if ($uri == '/index.php' or $uri == '/') {
    $defaultController = new index\DefaultController();
    $defaultController->default_action();
} elseif ($uri == '/index.php?/sol/cuotas2014') { //&& isset($_GET['id'])) {
    $solController = new sol\DefaultController();
    $solController->cuotas2014_action();//show_action($_GET['id']);
} elseif ($uri == '/index.php?/sol/IBI2000_2014') { 
    $solController = new sol\DefaultController();
    $solController->IBI2000_2014_action();
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}

