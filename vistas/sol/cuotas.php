<?php
namespace Sol;

include('vistas/menu.php');

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-lg-12">';

    echo ("<h1>Grupos de gasto:</h1>");
    echo '<table class="table table-striped">';
    echo '<tr><th>Nombre</th><th>Porcentaje</th><th>Presupuesto anual</th></tr>';
    foreach ($comunidad->gruposGastos as $grupo) {
        echo ("<tr><td>".$grupo->nombre.'</td><td>'.$grupo->porcentaje.'</td><td>'.$grupo->presupuestoAnual.'</td></tr>');
    };
    echo '</table>';

    echo "<h1>Vecinos:</h1>";
    echo '<table class="table table-striped">';
    echo '<tr><th>Nombre</th></tr>';
    foreach ( $comunidad->vecinos as $vecino ) {
        echo("<tr><td>".$vecino->nombre.'</td></tr>');
    };
    echo '</table>';

    $coeficienteTotal = 0;
    echo("<h1>Propiedades:</h1>");
    echo '<table class="table table-striped">';
    echo '<tr><th>Cuota</th><th>Nombre</th><th>Coeficiente participación</th><th>Grupos</th><th>Propietario</th></tr>';
    foreach ( $comunidad->propiedades as $propiedad ) {
        $cuota = 0;
        foreach ( $propiedad->grupos as $grupoPropiedad ) {
            foreach ( $comunidad->gruposGastos as $grupo ) {
                if ( $grupo->nombre==$grupoPropiedad)
                    $cuota += (((100/$grupo->porcentaje)*$propiedad->coeficienteParticipacion)/100)*$grupo->presupuestoAnual/12;
	    };
        };

        echo("<tr><td>".$cuota.'</td><td>'.$propiedad->nombre.'</td><td>'.$propiedad->coeficienteParticipacion.'</td><td>');
	foreach ($propiedad->grupos as $grupo) echo ('['.$grupo.']');
	echo ('</td><td>'.$propiedad->propietario.'</td></tr>');  
        $coeficienteTotal += $propiedad->coeficienteParticipacion;
    };  
    echo '</table>';
    echo("<h2>Total coeficiente comunidad:".$coeficienteTotal.'</h2>');
    
  

echo '</div>';
echo '</div>';
echo '</div>';
include('vistas/footer.php');
