<?php

class Navbar
{
    private $options;
    private $urls;

    public function __construct($options, $urls)
    {
        $this->options = $options;
        $this->urls = $urls;
        echo '<link rel="stylesheet" type="text/css" href="./css/navbar.css">';
        echo '<nav class="navbarClever">';
        echo '<img src="./imagenes/LogoCleverSoft.png" width="45" height="40"></img>';
        echo '<ul class="navbarList">';
        foreach ($this->options as $index => $option) {
            echo '<li><a href="' . $this->urls[$index] . '">' . $option . '</a></li>';
        }
        echo '</ul>';
        echo '</nav>';
    }
}

?>