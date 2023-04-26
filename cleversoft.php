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
      echo '<h1 class="titulo">SOLUCIONES</h1>';
      echo '<div class="fila-superior">';
      $soluciones = new Soluciones('./imagenes/CleverERP.png', './imagenes/LogoCleverSoft.png', 'CleverERP', 'Gestion Corporativa Institucional', 'Conoce Mas', '35rem', '18rem');
      $soluciones = new Soluciones('./imagenes/CleverCLUB.png', './imagenes/LogoCleverSoft.png', 'CleverCLUB', 'Gestión de Clubes Sociales y Deportivos', 'Conoce Mas', '35rem', '18rem');
      echo '</div>';

      echo '<div class="fila-inferior">';
      $soluciones = new Soluciones('./imagenes/CleverSCA.png', './imagenes/LogoCleverSoft.png', 'CleverSCA', 'Gestion Corporativa Institucional', 'Conoce Mas', '22.7rem', '14rem');
      $soluciones = new Soluciones('./imagenes/CleverCRM.png', './imagenes/LogoCleverSoft.png',  'CleverCRM', 'Relaciones con los Clientes', 'Conoce Mas', '22.7rem', '14rem');
      $soluciones = new Soluciones('./imagenes/VerTodos.png', './imagenes/LogoCleverSoft.png', '', '', 'Ver todo', '22.7rem', '14rem');
      echo '</div>';
    echo '</div>';    

    require('nosotros.php');
    $nosotros = new Nosotros(' Quiénes somos', 'NUESTRA HISTORIA', 'Desde 1986 Clever Soft S.A. se ha especializado en brindar soluciones informáticas a las empresas, buscando de forma constante optimizar los tiempos de las tareas que hacen a la gestión del negocio. <br><br>Nuestros productos son de fácil adaptabilidad a cualquier tipo de necesidad del negocio. <br><br>El staff de profesionales que integran Clever Soft S.A. posee los conocimientos y cuenta con la tecnología para enfrentar los requerimientos más rigurosos del mercado actual.', 'Ser líderes en el mercado empresarial, aplicando inteligencia al desarrollo, ofreciendo confianza y responsabilidad de los proyectos, trascendiendo y disfrutando en cada paso.', 'Desarrollar y potenciar el mejor software de gestión empresarial del mercado, simple, eficiente y flexible. Ofreciendo instalaciones Cloud, In-Company e Híbridas. Proveer soluciones compitiendo con los mejores del sector.', 'Brindar a nuestros clientes herramientas que facilite y complemente el desarrollo de sus operaciones, acercándoles soluciones innovadoras, prácticas y confiables para su constante evolución.');
    ?>
  </header>
</body>

</html>