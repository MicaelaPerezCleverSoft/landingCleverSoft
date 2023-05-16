<?php

class Cards
{
    private $imagen;
    private $logo;
    private $titulo;
    private $subtitulo;
    private $boton;
    private $width;
    private $height;
    private $enlace;
    private $identificador;

    public function __construct($imagen, $logo, $titulo, $subtitulo, $boton, $width, $height, $enlace, $identificador)
    {
        $this->imagen = $imagen;
        $this->logo = $logo;
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
        $this->boton = $boton;
        $this->width = $width;
        $this->height = $height;
        $this->enlace = $enlace;
        $this->identificador = $identificador;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    public function getBoton()
    {
        return $this->boton;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getEnlace()
    {
        return $this->enlace;
    }

    public function getIdentificador()
    {
        return $this->identificador;
    }

}