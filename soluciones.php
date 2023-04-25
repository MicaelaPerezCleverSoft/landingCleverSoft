<?php

class Soluciones
{
    private $imagen;
    private $logo;
    private $titulo;
    private $subtitulo;
    private $boton;
    private $width;
    private $height;

    public function __construct($imagen, $logo, $titulo, $subtitulo, $boton, $width, $height)
    {
        $this->imagen = $imagen;
        $this->logo = $logo;
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
        $this->boton = $boton;
        $this->width = $width;
        $this->height = $height;

        echo '
        <link rel="stylesheet" type="text/css" href="./css/soluciones.css">
        <div class="cardSoluciones">
            <div class="dataSoluciones" style="background-image: url(' . $this->imagen . '); width:' . $this->width . ' ; height: ' . $this->height . '">
            <img src="' . $this->logo . '"></img>    
            <h2> ' . $this->titulo . '</h2>
                <p>' . $this->subtitulo . '</p>
                <button class="botonSoluciones">' . $this->boton . '</button>
            </div>
        </div>
        ';
    }
}
?>