<?php

namespace modelos\sol;

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
