<?php

namespace Sol;


class Sol {

public function cuotas2014_action()
{
                        
    $comunidad = new Comunidad("Edificio Sol");
    
    $comunidad->gruposGastos[] = new GrupoGasto( "generales", 100, 3426);
    $comunidad->gruposGastos[] = new GrupoGasto("pisos", 75, 0);
    $comunidad->gruposGastos[] = new GrupoGasto("sotanos", 10, 2660);
    $comunidad->gruposGastos[] = new GrupoGasto("pisos-sotanos", 85, 4900);
    
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
        
    $comunidad->propiedades [] = new Propiedad( "Sotano1Arrechu", 5.0/24*16, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "Sotano1Abogados", 5.0/24*8, ["generales", "sotanos","pisos-sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "1Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "2B");
    $comunidad->propiedades [] = new Propiedad( "2Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "3Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "4Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "2A");
    $comunidad->propiedades [] = new Propiedad( "5Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "1A");
    $comunidad->propiedades [] = new Propiedad( "6Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "7Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "1C");
    $comunidad->propiedades [] = new Propiedad( "8Sotano2", 5.0/27, [], "1C");
    $comunidad->propiedades [] = new Propiedad( "9Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "10Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "11Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "12Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "13Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "1E");
    $comunidad->propiedades [] = new Propiedad( "14Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "15Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "1D");
    $comunidad->propiedades [] = new Propiedad( "16Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "17Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "1B");
    $comunidad->propiedades [] = new Propiedad( "18Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "2D");
    $comunidad->propiedades [] = new Propiedad( "19Sotano2", 5.0/27, [], "2D");
    $comunidad->propiedades [] = new Propiedad( "20Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "21Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "22Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "23Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "24Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "25Sotano2", 5.0/27, ["generales", "sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "26Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "2C");
    $comunidad->propiedades [] = new Propiedad( "27Sotano2", 5.0/27, ["generales", "sotanos","pisos-sotanos"], "2E");
    $comunidad->propiedades [] = new Propiedad( "Entresuelo", 5, ["generales", "pisos","pisos-sotanos"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "BajosArrechu", 8.7, ["generales"], "Arrechu");
    $comunidad->propiedades [] = new Propiedad( "BajosPelu", 1.3, ["generales"], "Peluqueria");
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
    
    //calcular porcentaje de cada grupo de gastos
    foreach ($comunidad->gruposGastos as $grupo) {
	$grupo->porcentaje = 0;
        foreach ($comunidad->propiedades as $propiedad) {
	    foreach ($propiedad->grupos as $grupoPropiedad) {
	        if ($grupo->nombre == $grupoPropiedad)
		    $grupo->porcentaje += $propiedad->coeficienteParticipacion;
            };
        };
    };

    require 'vistas/sol/cuotas.php';
}

public function  IBI2000_2014_action() {
	$tiposIBI = [];
	$tiposIBI [] = ['anio'=>'2014','revision'=>'2002','tipo'=>'0.841'];
	$tiposIBI [] = ['anio'=>'2013','revision'=>'2002','tipo'=>'0.814'];
	$tiposIBI [] = ['anio'=>'2012','revision'=>'2002','tipo'=>'0.74'];
	$tiposIBI [] = ['anio'=>'2011','revision'=>'2002','tipo'=>'0.72'];
	$tiposIBI [] = ['anio'=>'2010','revision'=>'2002','tipo'=>'0.72'];
	$tiposIBI [] = ['anio'=>'2009','revision'=>'2002','tipo'=>'0.72'];
	$tiposIBI [] = ['anio'=>'2008','revision'=>'2002','tipo'=>'0.72'];
	$tiposIBI [] = ['anio'=>'2007','revision'=>'2002','tipo'=>'0.65'];
	$tiposIBI [] = ['anio'=>'2006','revision'=>'2002','tipo'=>'0.65'];
	$tiposIBI [] = ['anio'=>'2005','revision'=>'2002','tipo'=>'0.65'];
	$tiposIBI [] = ['anio'=>'2004','revision'=>'2002','tipo'=>'0.65'];
	$tiposIBI [] = ['anio'=>'2003','revision'=>'2002','tipo'=>'0.55'];
	$tiposIBI [] = ['anio'=>'2002','revision'=>'2002','tipo'=>'0.55'];
	$tiposIBI [] = ['anio'=>'2001','revision'=>'1990','tipo'=>'0.55'];
	$tiposIBI [] = ['anio'=>'2000','revision'=>'1990','tipo'=>'0.55'];
	$ejemplo = '<h1>Ejemplos</h1>
IBI parking con valor catastral 1505,07 para el año 2013 sería (1505,07*0,814) = 12,25€<br>
IBI parking con valor catastral 1505,07 para el año 2006 sería (1505,07*0,65) = 9,78€';

    require('vistas/sol/IBI2000_2014.php');
	
}

};

$sol = new Sol();    
