<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.0.0/font/bootstrap-icons.css" rel="stylesheet">
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
                <li><i class="bi bi-rocket-takeoff icono"></i><strong>PROPÓSITO</strong> <br> <p>' . $this->proposito . ' </p></li>
                <li><i class="bi bi-eye icono"></i><strong>MISIÓN</strong> <br><p>' . $this->mision . '</p></li>
                <li><i class="bi bi-gift icono"></i></i><strong>VISIÓN</strong>  <br><p>' . $this->vision . '</p></li>
            </ul>
            </div>
        </section>
        ';
    }
}
?>