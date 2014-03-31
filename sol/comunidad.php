<?php
include('menu.php');

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-lg-12">';
//
// Created on 31/03/2014
//
// @author: Desarrollador_1
//

class Comunidad {
    // classdocs

    public $vecinos = [];
    public $gruposGastos = [];
    public $gastos = [];
    public $propiedades = [];
    public $cuotas = [];
    public $derramas = [];
    public $nombre = "";

    public function __construct( $nombre) {
        $this->nombre = $nombre;
    }
};

class GrupoGasto {
    //classdocs
    
    public $nombre = "";
    public $porcentaje = 0;
    public $presupuestoAnual = 0;

    public function __construct( $nombre, $porcentaje, $presupuestoAnual = 0) {
        $this->nombre = $nombre;
        $this->porcentaje = $porcentaje;
        $this->presupuestoAnual = $presupuestoAnual;
    }
};

class Propiedad {
    //classdocs
    
    public $nombre = "";
    public $coeficienteParticipacion = 0;
    public $grupos = [];
    public $propietario = "";

    public function __construct( $nombre, $coeficienteParticipacion, $grupos, $propietario) {
        $this->nombre = $nombre;
        $this->coeficienteParticipacion = $coeficienteParticipacion;
        $this->grupos = $grupos;
        $this->propietario = $propietario;
    }
};

class Vecino {
    //classdocs
    
    public $propiedades = [];

    public function __construct( $nombre) {
        $this->nombre = $nombre;
    }
};

                        
    $comunidad = new Comunidad("Edificio Sol");
    
    $comunidad->gruposGastos[] = new GrupoGasto( "generales", 100, 3426.15);
    $comunidad->gruposGastos[] = new GrupoGasto("pisos", 75, 3990);
    $comunidad->gruposGastos[] = new GrupoGasto("sotanos", 10, 2660);
    $comunidad->gruposGastos[] = new GrupoGasto("pisos-sotanos", 85, 4900);
    
    
    echo ("<h1>Grupos de gasto:</h1>");
    echo '<table class="table table-striped">';
    echo '<tr><th>Nombre</th><th>Porcentaje</th><th>Presupuesto anual</th></tr>';
    foreach ($comunidad->gruposGastos as $grupo) {
        echo ("<tr><td>".$grupo->nombre.'</td><td>'.$grupo->porcentaje.'</td><td>'.$grupo->presupuestoAnual.'</td></tr>');
    };
    echo '</table>';
    
    $comunidad->vecinos [] = new Vecino( "1A");
    $comunidad->vecinos [] = new Vecino("1B" );
    $comunidad->vecinos [] = new Vecino("1C");
    $comunidad->vecinos [] = new Vecino("1D");
    $comunidad->vecinos [] = new Vecino( "1E");
    $comunidad->vecinos [] = new Vecino( "2A");
    $comunidad->vecinos [] = new Vecino("2B" );
    $comunidad->vecinos [] = new Vecino("2C");
    $comunidad->vecinos [] = new Vecino("2D");
    $comunidad->vecinos [] = new Vecino( "2E");
    $comunidad->vecinos [] = new Vecino("Entresuelo");
    $comunidad->vecinos [] = new Vecino("Peluqueria");
    $comunidad->vecinos [] = new Vecino("Arrechu");
        
    echo "<h1>Vecinos:</h1>";
    echo '<table class="table table-striped">';
    echo '<tr><th>Nombre</th></tr>';
    foreach ( $comunidad->vecinos as $vecino ) {
        echo("<tr><td>".$vecino->nombre.'</td></tr>');
    };
    echo '</table>';
        
    $comunidad->propiedades [] = new Propiedad( "Sotano1", 5, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "1Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "2B");
    $comunidad->propiedades [] = new Propiedad( "2Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "3Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "4Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "2A");
    $comunidad->propiedades [] = new Propiedad( "5Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "1A");
    $comunidad->propiedades [] = new Propiedad( "6Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "7Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "1C");
    $comunidad->propiedades [] = new Propiedad( "8Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "1C");
    $comunidad->propiedades [] = new Propiedad( "9Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "10Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "11Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "12Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "13Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "1E");
    $comunidad->propiedades [] = new Propiedad( "14Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "15Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "1D");
    $comunidad->propiedades [] = new Propiedad( "16Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "17Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "18Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "2D");
    $comunidad->propiedades [] = new Propiedad( "19Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "2D");
    $comunidad->propiedades [] = new Propiedad( "20Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "21Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "22Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "23Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "24Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "25Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "26Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "2C");
    $comunidad->propiedades [] = new Propiedad( "27Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "2E");
    $comunidad->propiedades [] = new Propiedad( "Entresuelo", 5, ["generales", "pisos","pisos-sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "Bajos", 10, ["generales"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "1A", 7.52, ["generales", "pisos","pisos-sotanos"], "1A");
    $comunidad->propiedades [] = new Propiedad( "1B", 8.15, ["generales", "pisos","pisos-sotanos"], "1B");
    $comunidad->propiedades [] = new Propiedad( "1C", 5.74, ["generales", "pisos","pisos-sotanos"], "1C");
    $comunidad->propiedades [] = new Propiedad( "1D", 8.15, ["generales", "pisos","pisos-sotanos"], "1D");
    $comunidad->propiedades [] = new Propiedad( "1E", 7.52, ["generales", "pisos","pisos-sotanos"], "1E");
    $comunidad->propiedades [] = new Propiedad( "2A", 7.71, ["generales", "pisos","pisos-sotanos"], "2A");
    $comunidad->propiedades [] = new Propiedad( "2B", 8.25, ["generales", "pisos","pisos-sotanos"], "2B");
    $comunidad->propiedades [] = new Propiedad( "2C", 6, ["generales", "pisos","pisos-sotanos"], "2C");
    $comunidad->propiedades [] = new Propiedad( "2D", 8.25, ["generales", "pisos","pisos-sotanos"], "2D");
    $comunidad->propiedades [] = new Propiedad( "2E", 7.71, ["generales", "pisos","pisos-sotanos"], "2E");
    
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
    
  

echo '<div>';
echo '<div>';
echo '<div>';
include('footer.php');
