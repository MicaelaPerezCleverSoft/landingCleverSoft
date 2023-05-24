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

    require('cards.php');

    echo '<section class="contenedor-cards" id="soluciones">';
    echo '<h1 class="tituloCards">SOLUCIONES</h1>';

    echo '<div class="wrapperCards">';
    echo '<div class="fila-superior">';
    $soluciones = new Cards('./imagenes/Soluciones/Card1.png', './imagenes/LogoCleverSoft.png', 'CLEVER ERP', 'Gestion Corporativa Institucional', 'Conoce Más', '42rem', '19rem', '/landingCleversoft/soluciones/soluciones.php', 'ERP');
    echo '
    <div class="cards" style="background-image: url(' . $soluciones->getImagen() . '); width:' . $soluciones->getWidth() . '; height:' . $soluciones->getHeight() . '; filter=blur(2px);">
        <img src="' . $soluciones->getLogo() . '"></img>    
        <h2>' . $soluciones->getTitulo() . '</h2>
        <p>' . $soluciones->getSubtitulo() . '</p>
        <a href="' . $soluciones->getEnlace() . '?tarjeta=' . $soluciones->getIdentificador() . '"><button class="botonSoluciones">' . $soluciones->getBoton() . '</button></a>
    </div>';
    $soluciones2 = new Cards('./imagenes/Soluciones/Card2.png', './imagenes/LogoCleverSoft.png', 'CLEVER CLUB', 'Gestión de Clubes Sociales y Deportivos', 'Conoce Más', '42rem', '19rem', '/landingCleversoft/soluciones/soluciones.php', 'CLUB');
    echo '
    <div class="cards" style="background-image: url(' . $soluciones2->getImagen() . '); width:' . $soluciones2->getWidth() . '; height:' . $soluciones2->getHeight() . '">
        <img src="' . $soluciones2->getLogo() . '"></img>    
        <h2>' . $soluciones2->getTitulo() . '</h2>
        <p>' . $soluciones2->getSubtitulo() . '</p>
        <a href="' . $soluciones2->getEnlace() . '?tarjeta=' . $soluciones2->getIdentificador() . '"><button class="botonSoluciones">' . $soluciones2->getBoton() . '</button></a>
    </div>';
    echo '</div>';

    echo '<div class="fila-inferior">';
    $soluciones3 = new Cards('./imagenes/Soluciones/Card3.png', './imagenes/LogoCleverSoft.png', 'CLEVER SCA', 'Gestion Corporativa Institucional', 'Conoce Más', '27.5rem', '14.5rem', '/landingCleversoft/soluciones/soluciones.php', 'SCA');
    echo '
    <div class="cards" style="background-image: url(' . $soluciones3->getImagen() . '); width:' . $soluciones3->getWidth() . '; height:' . $soluciones3->getHeight() . '">
        <img src="' . $soluciones3->getLogo() . '"></img>    
        <h2>' . $soluciones3->getTitulo() . '</h2>
        <p>' . $soluciones3->getSubtitulo() . '</p>
        <a href="' . $soluciones3->getEnlace() . '?tarjeta=' . $soluciones3->getIdentificador() . '"><button class="botonSoluciones">' . $soluciones3->getBoton() . '</button></a>
    </div>';
    $soluciones4 = new Cards('./imagenes/Soluciones/Card4.png', './imagenes/LogoCleverSoft.png', 'CLEVER CRM', 'Relaciones con los Clientes', 'Conoce Más', '27.5rem', '14.5rem', '/landingCleversoft/soluciones/soluciones.php', 'CRM');
    echo '
    <div class="cards" style="background-image: url(' . $soluciones4->getImagen() . '); width:' . $soluciones4->getWidth() . '; height:' . $soluciones4->getHeight() . '">
        <img src="' . $soluciones4->getLogo() . '"></img>    
        <h2>' . $soluciones4->getTitulo() . '</h2>
        <p>' . $soluciones4->getSubtitulo() . '</p>
        <a href="' . $soluciones4->getEnlace() . '?tarjeta=' . $soluciones4->getIdentificador() . '"><button class="botonSoluciones">' . $soluciones4->getBoton() . '</button></a>
    </div>';
    $soluciones5 = new Cards('./imagenes/Soluciones/Card5.png', './imagenes/LogoCleverSoft.png', '', '', 'Ver todo', '27.5rem', '14.5rem', '/landingCleversoft/soluciones/soluciones.php', 'TODOS');
    echo '
    <div class="cards" style="background-image: url(' . $soluciones5->getImagen() . '); width:' . $soluciones5->getWidth() . '; height:' . $soluciones5->getHeight() . '">
        <img src="' . $soluciones5->getLogo() . '"></img>    
        <h2>' . $soluciones5->getTitulo() . '</h2>
        <p>' . $soluciones5->getSubtitulo() . '</p>
        <a href="' . $soluciones5->getEnlace() . '?tarjeta=' . $soluciones5->getIdentificador() . '"><button class="botonSoluciones">' . $soluciones5->getBoton() . '</button></a>
    </div>';
    echo '</div>';

    echo '</div>';
    echo '</section>';


    require('nosotros.php');
    $nosotros = new Nosotros(' Quiénes somos', 'NUESTRA HISTORIA', 'Desde 1986 Clever Soft S.A. se ha especializado en brindar soluciones informáticas a las empresas, buscando de forma constante optimizar los tiempos de las tareas que hacen a la gestión del negocio. <br><br>Con el paso del tiempo hemos desarrollado una amplia gama de productos que se adaptan fácilmente a las necesidades de cualquier tipo de negocio. Los mismos están diseñados para ser flexibles y personalizables, lo que permite a las empresas utilizarlos de manera efectiva en función de sus requerimientos específicos.<br><br>El staff de profesionales que integran Clever Soft S.A. poseen un profundo conocimiento en el campo de la informática y están constantemente actualizados sobre las últimas tecnologías y tendencias del mercado. Esto nos permite hacer frente a los requerimientos más exigentes de la actualidad y ofrecer soluciones innovadoras y eficientes.', 'Ser líderes en el mercado empresarial, aplicando inteligencia al desarrollo, ofreciendo confianza y responsabilidad de los proyectos, trascendiendo y disfrutando en cada paso.', 'Desarrollar y potenciar el mejor software de gestión empresarial del mercado, simple, eficiente y flexible. Ofreciendo instalaciones Cloud, In-Company e Híbridas. Proveer soluciones compitiendo con los mejores del sector.', 'Brindar a nuestros clientes herramientas que facilite y complemente el desarrollo de sus operaciones, acercándoles soluciones innovadoras, prácticas y confiables para su constante evolución.');

    echo '<section class="contenedor-cards" id="servicios">';
    echo '<h1 class="tituloCards">SERVICIOS</h1>';

    echo '<div class="wrapperCards">';
    
    echo '<div class="fila-superior">';
    $cards1 = new Cards('./imagenes/Consultoria.png', './imagenes/LogoCleverSoft.png', 'Consultoría de Sistemas', '', 'Conoce Más', '42rem', '19rem', '/landingCleversoft/servicios.php', 'Consultoria');
    echo '
      <div class="cards" style="background-image: url(' . $cards1->getImagen() . '); width:' . $cards1->getWidth() . '; height:' . $cards1->getHeight() . '">
          <img src="' . $cards1->getLogo() . '"></img>    
          <h2>' . $cards1->getTitulo() . '</h2>
          <p>' . $cards1->getSubtitulo() . '</p>
          <a href="' . $cards1->getEnlace() . '?tarjeta=' . $cards1->getIdentificador() . '"><button class="botonCards">' . $cards1->getBoton() . '</button></a>
      </div>';
    $cards2 = new Cards('./imagenes/Implementacion.png', './imagenes/LogoCleverSoft.png', 'Implementación de Software', '', 'Conoce Más', '42rem', '19rem', '/landingCleversoft/servicios.php', 'Implementacion');
    echo '
      <div class="cards" style="background-image: url(' . $cards2->getImagen() . '); width:' . $cards2->getWidth() . '; height:' . $cards2->getHeight() . '">
          <img src="' . $cards2->getLogo() . '"></img>    
          <h2>' . $cards2->getTitulo() . '</h2>
          <p>' . $cards2->getSubtitulo() . '</p>
          <a href="' . $cards2->getEnlace() . '?tarjeta=' . $cards2->getIdentificador() . '"><button class="botonCards">' . $cards2->getBoton() . '</button></a>
      </div>';
    echo '</div>';
    echo '<div class="fila-inferior">';
    $cards3 = new Cards('./imagenes/Tercearizacion.png', './imagenes/LogoCleverSoft.png', 'Tercerización del área de sistemas', '', 'Conoce Más', '27.5rem', '14.5rem', '/landingCleversoft/servicios.php', 'Tercearizacion');
    echo '
      <div class="cards" style="background-image: url(' . $cards3->getImagen() . '); width:' . $cards3->getWidth() . '; height:' . $cards3->getHeight() . '">
          <img src="' . $cards3->getLogo() . '"></img>    
          <h2>' . $cards3->getTitulo() . '</h2>
          <p>' . $cards3->getSubtitulo() . '</p>
          <a href="' . $cards3->getEnlace() . '?tarjeta=' . $cards3->getIdentificador() . '"><button class="botonCards">' . $cards3->getBoton() . '</button></a>
      </div>';
    $cards4 = new Cards('./imagenes/Desarrollo.png', './imagenes/LogoCleverSoft.png', 'Desarrollo de Aplicaciones a Medida', '', 'Conoce Más', '27.5rem', '14.5rem', '/landingCleversoft/servicios.php', 'Desarrollo');
    echo '
      <div class="cards" style="background-image: url(' . $cards4->getImagen() . '); width:' . $cards4->getWidth() . '; height:' . $cards4->getHeight() . '">
          <img src="' . $cards4->getLogo() . '"></img>    
          <h2>' . $cards4->getTitulo() . '</h2>
          <p>' . $cards4->getSubtitulo() . '</p>
          <a href="' . $cards4->getEnlace() . '?tarjeta=' . $cards4->getIdentificador() . '"><button class="botonCards">' . $cards4->getBoton() . '</button></a>
      </div>';
    $cards5 = new Cards('./imagenes/Capacitacion.png', './imagenes/LogoCleverSoft.png', 'Capacitacion en Tecnologías de la Información', '', 'Conoce Más', '27.5rem', '14.5rem', '/landingCleversoft/servicios.php', 'Todos');
    echo '
      <div class="cards" style="background-image: url(' . $cards5->getImagen() . '); width:' . $cards5->getWidth() . '; height:' . $cards5->getHeight() . '">
          <img src="' . $cards5->getLogo() . '"></img>    
          <h2>' . $cards5->getTitulo() . '</h2>
          <p>' . $cards5->getSubtitulo() . '</p>
          <a href="' . $cards5->getEnlace() . '?tarjeta=' . $cards5->getIdentificador() . '"><button class="botonCards">' . $cards5->getBoton() . '</button></a>
      </div>';
    echo '</div>';

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


const updateActiveClass = () => {
    const index = getCurrentSectionIndex();
    document.querySelectorAll('.navbarList a').forEach(link => {
        link.classList.remove('active');
    });
    document.querySelectorAll('.navbarList a')[index].classList.add('active');
};

window.addEventListener('scroll', updateActiveClass);
window.addEventListener('resize', updateActiveClass);
</script>