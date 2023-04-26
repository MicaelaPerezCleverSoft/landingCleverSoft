<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./css/nosotros.css">

<?php
class Nosotros
{
    private $titulo;
    private $subtitulo;
    private $descripcion;
    private $proposito;
    private $mision;
    private $vision;

    public function __construct($titulo, $subtitulo, $descripcion, $proposito, $mision, $vision)
    {
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
        $this->descripcion = $descripcion;
        $this->proposito = $proposito;
        $this->mision = $mision;
        $this->vision = $vision;

        echo '
        <section class="nosotros">
            <div class="nosotrosInfo">
                <h3>' . $this->subtitulo . '</h3>
                <h2>
                    <span class="background-title">' .$this->titulo.'
                </h2>
                <p>' . $this->descripcion . '</p>
            </div>
            <div class="nosotrosPoliticaDeCalidad">
            <ul>
                <li><i class="material-icons icono">trending_up</i><strong>PROPÓSITO</strong> <br> <p>' . $this->proposito . ' </p></li>
                <li><i class="material-icons icono">remove_red_eye</i><strong>MISIÓN</strong> <br><p>' . $this->mision . '</p></li>
                <li><i class="material-icons icono">card_giftcard</i><strong>VISIÓN</strong>  <br><p>' . $this->vision . '</p></li>
            </ul>
            </div>
        </section>
        ';
    }
}
?>