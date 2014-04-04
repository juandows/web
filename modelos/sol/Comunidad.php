<?php

namespace modelos\sol;

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
