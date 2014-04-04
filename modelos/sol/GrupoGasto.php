<?php

namespace modelos\sol;

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


