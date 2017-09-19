<?php

namespace Mibici;

class Estacion implements EstacionInterface {
    
    protected $listadebicicletasDisponibles = array();

    public function sacarBici(BicicletaInterface $bici) {

    }

    public function dejarBici(BicicletaInterface $bici) {
        if ($this->anclajesDisponibles() > 0){
            if(!array_key_exists(0, $listadebicicletasDisponibles){
                
            }
            for($i = 0; $i < $this->anclajesTotales(); $i++){
                
            }
        }
    }

    public function anclajesDisponibles() {

    }

    public function anclajesTotales() {

    }

    public function bicicletasDisponibles() {

    }

    public function enServicio() {
        return TRUE;
    }

}
