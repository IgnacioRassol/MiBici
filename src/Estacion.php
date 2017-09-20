<?php

namespace Mibici;

class Estacion implements EstacionInterface {
    
    protected $listadebicicletasDisponibles = array();

    public function sacarBici(BicicletaInterface $bici) {

    }

    public function dejarBici(BicicletaInterface $bici) {
        if ($this->anclajesDisponibles() > 0){
            for($i = -1; $i < $this->anclajesTotales()-1; $i++){
                if(!isset($this->listadebicicletasDisponibles[$i+1]){
                    $this->listadebicicletasDisponibles[$i+1] = $bici;
                }
            }
        } else{
            return "No hay espacio para dejar la bici";
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
