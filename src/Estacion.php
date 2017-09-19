<?php

namespace Mibici;

class Estacion implements EstacionInterface {
    
    protected $listadebicicletasDisponibles = array();

    public function sacarBici(BicicletaInterface $bici) {

    }

    public function dejarBici(BicicletaInterface $bici) {

    }

    public function anclajesDisponibles() {

    }

    public function anclajesTotales() {

    }

    public function bicicletasDisponibles() {
        return $this->listadebicicletasDisponibles;
    }

    public function enServicio() {
        return TRUE;
    }

}
