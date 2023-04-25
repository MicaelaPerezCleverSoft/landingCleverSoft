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
  <link rel="stylesheet" type="text/css" href="./css/soluciones.css">
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

    require('soluciones.php');
    echo '<div class="contenedor-soluciones">';
    echo '<h1>SOLUCIONES</h1>';
    echo '<div class="fila-superior">';
    $soluciones = new Soluciones('./imagenes/CleverERP.jpg', './imagenes/LogoCleverSoft.png', 'CleverERP', 'Gestion Corporativa Institucional', 'Conoce Mas');
    $soluciones = new Soluciones('./imagenes/CleverCLUB.jpg', './imagenes/LogoCleverSoft.png', 'CleverCLUB', 'Gestión de Clubes Sociales y Deportivos', 'Conoce Mas');
    echo '</div>';

    echo '<div class="fila-inferior">';
    $soluciones = new Soluciones('./imagenes/CleverSCA.jpg', './imagenes/LogoCleverSoft.png', 'CleverSCA', 'Gestion Corporativa Institucional', 'Conoce Mas');
    $soluciones = new Soluciones('./imagenes/CleverCRM.jpg', './imagenes/LogoCleverSoft.png',  'CleverCRM', 'Relaciones con los Clientes', 'Conoce Mas');
    $soluciones = new Soluciones('./imagenes/VerTodos.jpg', './imagenes/LogoCleverSoft.png', '', '', 'Conoce Mas');
    echo '</div>';
    echo '</div>';

    ?>
  </header>
</body>

</html>