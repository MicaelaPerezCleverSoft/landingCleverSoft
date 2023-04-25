<?php

class Soluciones
{
    private $imagen;
    private $logo;
    private $titulo;
    private $subtitulo;
    private $boton;

    public function __construct($imagen, $logo, $titulo, $subtitulo, $boton)
    {
        $this->imagen = $imagen;
        $this->logo = $logo;
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
        $this->boton = $boton;

        echo '
        <link rel="stylesheet" type="text/css" href="./css/soluciones.css">
            <div class="dataSoluciones" style="background-image: url(' . $this->imagen . '); width: 20rem; height: 15rem">
            <img src="' . $this->logo . '"></img>    
            <h2> ' . $this->titulo . '</h2>
                <p>' . $this->subtitulo . '</p>
                <button class="botonSoluciones">' . $this->boton . '</button>
            </div>
        ';
    }
}

?>