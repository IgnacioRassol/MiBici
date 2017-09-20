<?php

namespace Mibici;

use PHPUnit\Framework\TestCase;

class EstacionTest extends TestCase {

    public function testEstacionEnServicio() {
        // Las estaciones nuevas siempre están en servicio.
        $estacion = new Estacion;
        $this->assertTrue($estacion->enServicio());
    }
    
    public function testEstacionbicicletasDisponibles() {
        $estacion = new Estacion;
        $bici = new $bicicleta;
        $estacion->dejarBici($bici);
        
    }

}
