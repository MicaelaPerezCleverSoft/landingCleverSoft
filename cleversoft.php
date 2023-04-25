<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./css/main.css">
  <title>CleverSoft Argentina</title>
</head>

<body>
  <header>
    <?php

    require('header.php');
    $menuOptions = array('INICIO', 'SOLUCIONES', 'NOSOTROS', 'SERVICIOS', 'PORTFOLIO', 'PARTNERS', 'CONTACTO', 'ACCESO CLIENTES', 'AYUDA');
    $navbar = new Navbar($menuOptions);

    require('inicio.php');
    $inicio = new Inicio('./imagenes/LogoCleverCompleto.png', 'SOLUCIONES', 'NOSOTROS');
    
    ?>
  </header>
</body>

</html>