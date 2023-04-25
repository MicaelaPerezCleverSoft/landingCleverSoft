<?php

class Navbar
{

    private $options;

    public function __construct($options)
    {
        $this->options = $options;
        echo '<link rel="stylesheet" type="text/css" href="./css/navbar.css">';
        echo '<div class="navbar">';
        echo '<img src="./imagenes/LogoCleverSoft.png" width="40" height="40"></img>';
        echo '<ul class="navbarList">';
        foreach ($this->options as $option) {
            echo '<li><a>' . $option . '</a></li>';
        }
        echo '</ul>';
        echo '</div>';
    }
}

?>