<!DOCTYPE html>
<html lang="es" style="scroll-behavior: smooth;">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700;800&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="./imagenes/LogoCleverSoft.png">
  <link rel="stylesheet" type="text/css" href="./css/main.css">
  <link rel="stylesheet" type="text/css" href="./css/cards.css">

  <title>CleverSoft Argentina</title>
</head>

<body>
  <header>
    <?php

    require('navbar.php');
    $menuOptions = array('INICIO', 'SOLUCIONES', 'NOSOTROS', 'SERVICIOS', 'PORTFOLIO', 'PARTNERS', 'CONTACTO', 'ACCESO CLIENTES', 'AYUDA');
    $menuUrls = array('#', '#soluciones', '#nosotros', '#servicios', '#portfolio', '#partners', '#contacto', 'https://clients.cleversoftsolutions.com/login.php', '#');
    $navbar = new Navbar($menuOptions, $menuUrls);

    echo '<section id="inicio">';
    require('inicio.php');
    $inicio = new Inicio('./imagenes/Logo.png', 'SOLUCIONES', 'NOSOTROS');
    echo '</section>';

    echo '<section class="contenedor-cards" id="soluciones">';
    require('cards.php');
    echo '<h1 class="tituloCards">SOLUCIONES</h1>';

    echo '<div class="wrapperCards">';
    echo '<div class="fila-superior">';
    $soluciones = new Cards('./imagenes/Soluciones/Card1.png', './imagenes/LogoCleverSoft.png', 'CleverERP', 'Gestion Corporativa Institucional', 'Conoce Más', '37.5rem', '19rem');
    $soluciones = new Cards('./imagenes/Soluciones/Card2.png', './imagenes/LogoCleverSoft.png', 'CleverCLUB', 'Gestión de Clubes Sociales y Deportivos', 'Conoce Más', '37rem', '19rem');
    echo '</div>';

    echo '<div class="fila-inferior">';
    $soluciones = new Cards('./imagenes/Soluciones/Card3.png', './imagenes/LogoCleverSoft.png', 'CleverSCA', 'Gestion Corporativa Institucional', 'Conoce Más', '25rem', '14.5rem');
    $soluciones = new Cards('./imagenes/Soluciones/Card4.png', './imagenes/LogoCleverSoft.png',  'CleverCRM', 'Relaciones con los Clientes', 'Conoce Más', '24rem', '14.5rem');
    $soluciones = new Cards('./imagenes/Soluciones/Card5.png', './imagenes/LogoCleverSoft.png', '', '', 'Ver todo', '24rem', '14.5rem');
    echo '</div>';
    echo '</div>';
    echo '</section>';


    require('nosotros.php');
    $nosotros = new Nosotros(' Quiénes somos', 'NUESTRA HISTORIA', 'Desde 1986 Clever Soft S.A. se ha especializado en brindar soluciones informáticas a las empresas, buscando de forma constante optimizar los tiempos de las tareas que hacen a la gestión del negocio. <br><br>Nuestros productos son de fácil adaptabilidad a cualquier tipo de necesidad del negocio. <br><br>El staff de profesionales que integran Clever Soft S.A. posee los conocimientos y cuenta con la tecnología para enfrentar los requerimientos más rigurosos del mercado actual.', 'Ser líderes en el mercado empresarial, aplicando inteligencia al desarrollo, ofreciendo confianza y responsabilidad de los proyectos, trascendiendo y disfrutando en cada paso.', 'Desarrollar y potenciar el mejor software de gestión empresarial del mercado, simple, eficiente y flexible. Ofreciendo instalaciones Cloud, In-Company e Híbridas. Proveer soluciones compitiendo con los mejores del sector.', 'Brindar a nuestros clientes herramientas que facilite y complemente el desarrollo de sus operaciones, acercándoles soluciones innovadoras, prácticas y confiables para su constante evolución.');

    echo '<section class="contenedor-cards" id="servicios">';
    echo '<h1 class="tituloCards">SERVICIOS</h1>';
    echo '<div class="fila-superior">';
    $soluciones = new Cards('./imagenes/Consultoria.jpg', './imagenes/LogoCleverSoft.png', 'Consultoría de Sistemas', '', 'Conoce Más', '38rem', '21rem',  '', '');
    $soluciones = new Cards('./imagenes/Capacitacion.jpg', './imagenes/LogoCleverSoft.png', 'Implementación de Software', '', 'Conoce Más', '38rem', '21rem',  '', '');
    echo '</div>';
    echo '<div class="fila-inferior">';
    $soluciones = new Cards('./imagenes/Tercearizacion.jpg', './imagenes/LogoCleverSoft.png', 'Tercerización del area de sistemas', '', 'Conoce Más', '25rem', '14rem',  '', '20%');
    $soluciones = new Cards('./imagenes/Desarrollo.jpg', './imagenes/LogoCleverSoft.png',  'Desarrollo de Aplicaciones a Medida', '', 'Conoce Más', '25rem', '14rem',  '', '');
    $soluciones = new Cards('./imagenes/Implementacion.jpg', './imagenes/LogoCleverSoft.png', 'Capacitación en Tecnologías de Información', '', 'Conoce Más', '25rem', '14rem',  '', '');
    echo '</div>';
    echo '</section>';

    echo '<section id="portfolio">';
    require('clientes.php');
    echo '</section>';
    echo '<section id="partners">';
    echo '</section>';
    echo '<section id="contacto">';
    echo '</section>';
    ?>
  </header>



</body>

</html>

<script>
  const sections = document.querySelectorAll('section');

  /* devuelve el índice de la sección correspondiente a la posición actual del desplazamiento */
  const getCurrentSectionIndex = () => {
    let index = 0;
    const offset = window.pageYOffset + window.innerHeight / 2;
    sections.forEach((section, i) => {
      if (offset > section.offsetTop) {
        index = i;
      }
    });
    return index;
  };

  /* actualiza la clase 'active' en los elementos del menú de navegación */
  const updateActiveClass = () => {
    const index = getCurrentSectionIndex();
    document.querySelectorAll('.navbarList a').forEach(link => {
      link.classList.remove('active');
    });
    document.querySelectorAll('.navbarList a')[index].classList.add('active');
  };

  /* actualiza la clase cada vez que se produce el evento 'scroll' */
  window.addEventListener('scroll', updateActiveClass);
  window.addEventListener('resize', updateActiveClass);
</script>