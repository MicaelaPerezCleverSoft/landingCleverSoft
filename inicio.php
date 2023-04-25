<?php

class Inicio
{
    private $logo;
    private $botonUno;
    private $botonDos;

    public function __construct($logo, $botonUno, $botonDos)
    {
        $this->logo = $logo;
        $this->botonUno = $botonUno;
        $this->botonDos = $botonDos;
        
        echo '
            <link rel="stylesheet" type="text/css" href="./css/inicio.css">
    
            <div class="inicio">
                <img src="' . $this->logo . '"></img>
                <div class="botonesInicio">
                    <button class="botonUno">' . $this->botonUno . '</button>
                    <button class="botonDos">' . $this->botonDos . '</button>
                </div>
            </div>
        ';
    }
}
