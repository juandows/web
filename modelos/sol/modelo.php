<?php

namespace Sol;

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


