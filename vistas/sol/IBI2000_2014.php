<?php
namespace Sol;

include('vistas/menu.php');

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-lg-12">';

    echo ("<h1>Tipos del IBI del año 2000 al 2014:</h1>");
    echo '<table class="table table-striped">';
    echo '<tr><th>Año</th><th>Rev. Catastral</th><th>T. Urbana</th></tr>';
    foreach ($tiposIBI as $tipoIBI) {
        echo ("<tr><td>".$tipoIBI['anio'].'</td><td>'.$tipoIBI['revision'].'</td><td>'.$tipoIBI['tipo'].'</td></tr>');
    };
    echo '</table>';


echo '</div>';
echo '</div>';

echo '<div class="row">';
echo '<div class="col-lg-12">';

    echo $ejemplo;
    
  

echo '</div>';
echo '</div>';

echo '</div>'.'<br><br><br><br>';
include('vistas/footer.php');
