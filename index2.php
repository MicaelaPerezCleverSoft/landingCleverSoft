<?php

	if (isset($_POST["submit"]) && $_POST["secur"]=="58n72309cm5230952cm934875n398v59038m" ){

		$name= $_POST["name"];
		$destinatario = 'info@cleversoftsolutions.com';
		$remitente = $_POST["email"];
		$asunto =  $_POST["subject"]; 
		$mensaje = $_POST["message"]; 
		$headers= $_POST["email"];
		//para el envío en formato HTML 
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		
		//dirección del remitente 
		$headers .= "From: $name <$remitente>\r\n"; 
			
		//Mensaje
		$cuerpo = '"Este mensaje fue enviado atraves de la pagina CleverSoft Solutions  "'; 
		$cuerpo .= "\n <br> $mensaje"; 
		mail($destinatario,$asunto,$cuerpo,$headers) ;
		
		
		printf("<script type='text/javascript'>alert('Gracias por tu mensaje, te estaremos respondiendo lo mas pronto posible'); </script>");
	
	} 
		
	?>
	<!doctype html>
<html>

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-RD79BJ0H7M"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-RD79BJ0H7M');
	</script>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<title>CleverSoft | Sistemas de Gestión | Club | Erp | Mrp | Educación | Salud | Software</title>
	<link rel="icon" href="img/logoiso.png" type="image/png">

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css?c=1904011" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	  <!-- Bootstrap core CSS -->

  <!-- Custom fonts for this template -->

	
	<style>
	.portfolio-item .portfolio-image img {
		padding: 15px;
		max-width: 100%;
		max-height: initial;
	}
	.project-info {
		width: 100%;
	}
	.project-name {
		font-size: 14px;
	}
	
	
	</style>


	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>

<script type="text/javascript">
		$(document).ready(function(e) {
			$('.res-nav_click').click(function() {
				$('ul.toggle').slideToggle(600)
			});

			$(document).ready(function() {
				$(window).bind('scroll', function() {
					if ($(window).scrollTop() > 0) {
						$('#header_outer').addClass('fixed');
					} else {
						$('#header_outer').removeClass('fixed');
					}
				});

			});


		});

		function resizeText() {
			var preferredWidth = 767;
			var displayWidth = window.innerWidth;
			var percentage = displayWidth / preferredWidth;
			var fontsizetitle = 25;
			var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
			$(".divclass").css("font-size", newFontSizeTitle)
		}
	</script>
</head>

<body>

	<div id="myDiv">
	  <!--HEADER-->
	  <div class="header" id="index">
		<div class="bg-color">
		  <header id="main-header">
			<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
				<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a href="index.php"><img src="img/isologonuevo.png" width="220px" height="50px" margin-top="2px" alt=""></a>  
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				  <ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#index">Inicio</a></li>
					<li><a href="#soluciones">Soluciones</a></li>
					<!--<li><a href="#servicio">Servicio</a></li>-->
					<li><a href="#Portfolio">Portafolio</a></li>
					<li><a href="#partners">Partners</a></li>
					<!-- <li><a href="#nosotros">Nosotros</a></li> -->
					<li><a href="#contacto">Contacto</a></li>
					<li><a href="https://clients.cleversoftsolutions.com/login.php" target="_blank">Acceso Clientes</a></li>

					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SAC <span class="caret"></span></a>
					<ul class="dropdown-menu">
					<li><a target="_blank" href="https://cleversoft-301.homeip.net/kb/faq.php?a=search&topicId=11">Centro de Ayuda</a></li>
					<li><a target="_blank" href="https://cleversoft-301.homeip.net">Iniciar Ticket de Soporte</a></li>
					<li><a target="_blank" href="https://cleversoft-301.homeip.net/pwreset.php">Generar o recuperar contaseña del centro de ayuda</a></li>			
					<li><a target="_blank" href="https://cleversoftsolutions.com/descargas/soporte-remoto/Clever-RemoteSupport.exe">Iniciar Soporte Remoto</a></li>
					<li><a target="_blank" href="https://cleversoftsolutions.com/descargas/">Descargas</a></li>
					<li><a target="_blank" href="/CleverSoft-SLA.pdf">SLA</a></li>
					</ul>

					</li>

					
				  </ul>
				</div>
			  </div>
			</nav>
		  </header>

		  
		  <div>
			<div class="container">
			  <div class="row">
				<div class="banner-info text-center wow fadeIn delay-05s">
				 <img src="img/logonuevo.png" width="90%">
				  <br>
				  <div class="brn-btn">
					<a href="#soluciones" class="btn btn-more">Soluciones</a>
					<a href="#nosotros" class="btn btn-download">Nosotros</a>
				  </div>
				  <div class="overlay-detail">
					<a href="#nosotros"><i class="fa fa-angle-down"></i></a>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <!--/ HEADER-->


	<!--Service-->
	<section id="soluciones">
		<div class="container">
			<h2>Soluciones</h2>
			<div class="service_area">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="service_block">
							<img class="img-fluid rounded-circle mb-3" src="img/ERP.jpg" alt="">
							<h3 class="animated fadeInUp wow">ERP</h3>
							<p class="animated fadeInDown wow" style="text-align: justify">Sistema de gestion empresarial coorporativo diseñado para facilitar la estructura administrativa, financiera e integrar todos los circuitos y datos de su empresa o institucion en una sola herramienta, accediendo a la información en forma ágil e inmediata en todo momento.</p>
							<a href="" class="animated fadeInDown wow"  data-toggle="modal" data-target="#ERP">leer mas...</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="service_block">
						<img class="img-fluid rounded-circle mb-3" src="img/CLUB.jpg" width="85%" alt="">
							<h3 class="animated fadeInUp wow">Club</h3>
							<p class="animated fadeInDown wow" style="text-align: justify">Está diseñado para facilitar la estructura administrativa y financiera de Clubes, Gimnasios, Entidades Sociales y Deportivas.</p>
							<a href="" class="animated fadeInDown wow"  data-toggle="modal" data-target="#Club">leer mas...</a>
							<iframe width="280" height="157" src="https://www.youtube.com/embed/wSpTnrf6Bvc?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<br><br>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="service_block">
							<img class="img-fluid rounded-circle mb-3" src="img/PC-salud.jpg" alt="">
							<h3 class="animated fadeInUp wow">Salud</h3>
							<p class="animated fadeInDown wow" style="text-align: justify">Gestión de Clínicas y Hospitales, Incluye módulos de Turnos, Internación, Facturación a Obras Sociales y Pacientes.</p>
							<a href="" class="animated fadeInDown wow"  data-toggle="modal" data-target="#Salud">leer mas...</a>
						</div>
					</div>

				</div>			
			<br>
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="service_block">
							<img class="img-fluid rounded-circle mb-3" src="img/MRP.jpg" alt="">
							<h3 class="animated fadeInUp wow">MRP</h3>
							<p class="animated fadeInDown wow" style="text-align: justify">Sistema de Gestion de la produccion.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="service_block">
							<img class="img-fluid rounded-circle mb-3" src="img/pyme.jpg" width="85%" alt="">
							<h3 class="animated fadeInUp wow">PYME</h3>
							<p class="animated fadeInDown wow" style="text-align: Center">
								Gestion Comercial para empresas pyme</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="service_block">
							<img class="img-fluid rounded-circle mb-3" src="img/OSyPREPAGAS.jpg"  width="99%"  alt="">
							<h3 class="animated fadeInUp wow">HMO </h3>
							<p class="animated fadeInDown wow" style="text-align: Center">
							 Gestion de Obras Sociales y Prepagas</p>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-3 col-md-3">
							<div class="service_block">
								<img class="img-fluid rounded-circle mb-3" src="img/controlacceso.jpg"    alt="">
								<h3 class="animated fadeInUp wow">SCA </h3>
								<p class="animated fadeInDown wow" style="text-align: Center">
										Sistema de Control de Accesos</p>
							</div>
						</div>
					<div class="col-lg-3 col-md-3">
						<div class="service_block">
							<img class="img-fluid rounded-circle mb-3" src="img/CRM.jpg"  width="85%"  alt="">
							<h3 class="animated fadeInUp wow">CRM</h3>
							<p class="animated fadeInDown wow" style="text-align: Center">
								 Gestion de Relaciones con los clientes.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-3">
						<div class="service_block">
							<img class="img-fluid rounded-circle mb-3" src="img/banking.jpg"  
							  alt="">
							<h3 class="animated fadeInUp wow">BANKING </h3>
							<p class="animated fadeInDown wow" style="text-align: Center">
								Gestion de Mutuales y Finacieras.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-3">
						<div class="service_block">
							<img class="img-fluid rounded-circle mb-3" src="img/Punto-de-Venta.jpg" width="80%" alt="">
							<h3 class="animated fadeInUp wow">Pos</h3>
							<p class="animated fadeInDown wow" style="text-align: Center">
								 Punto de Venta.</p>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="service_block">
							<h3 class="animated fadeInUp wow">App de Clubes miClub </h3>
							<img src="img/miclub.png" style="height: 80px; margin-right: 45px;">
							<a href="https://play.google.com/store/apps/details?id=com.cleversoft.miclub" target="_blank"><img src="img/app_google.png" style="height: 80px; margin-right: 30px;"></a>
							<a href="https://apps.apple.com/ar/app/miclub-info/id1576368089" target="_blank"><img src="img/app_apple.png" style="height: 80px;"></a>
						</div>
					</div>
				</div>
<br>
			</div>
		</div>

	</section>
	<!--Service-->

	<section id="servicio"  >
		<!--main-section-start-->
		<div  class="top_cont_latest ">
			<div  class="container span3 wow pulse">
				<h2>Servicios</h2>
				<p align="justify"><b >Consultoria de sistemas </b>
					Las Tecnologías de la Información existentes en el mercado le pueden aportar ventajas competitivas. Prolongar estas ventajas depende de su continua actualización y anticipación frente a sus competidores. Conocemos las nuevas tecnologías y esto nos permite participar activamente en los procesos de transformación de sus Tecnologías de la Información, adaptándolas a las necesidades de su negocio a través de una sólida cartera de servicios profesionales de consultoría y asesoramiento.
					<br><br>
					<b>Implementación de software </b> El éxito de la puesta en marcha de CleverSoft ® en la empresa depende de varios factores; uno de los mas importantes es la implementación y parametrización.
					El hecho de ser los propios desarrolladores de CleverSoft ® nos proporciona tener el mayor conocimiento para concretar una implementación exitosa, adaptando a sus necesidades la operatoria del sistema.
					<br><br>
					<b>Tercerización del area de sistemas </b>
					Hoy en día cada vez más dependemos de los sistemas de información, las acciones, las estrategias, la toma de desiciones requieren información exacta y oportuna, por eso es necesario que el personal del area de sistemas de información este capacitado y con la actualización permanente necesaria para afrontar los desafíos del entorno actual.
					Las pequeñas y medianas empresas requieren una infraestructura para mantener sus sistemas (hardware, software, redes, etc.), pero mantener personal estable en el área de sistemas equivale a un costo privativo para ellas.
					Por esto, nuestros servicios le permiten tercerizar completamente su departamento de sistemas desde el mantenimiento del parque actual de equipamiento hasta la definición de políticas estratégicas de sistemas.
					<br><br>
		
					<b>Desarrollo de aplicaciones a medida </b>
					Los desarrollos a medida surgen a partir de la necesidad de las empresas de adaptarse rápidamente a los requerimientos específicos del negocio en un contexto dinámico; a la necesidad de contar con un sistema que contemple la forma de trabajo propia diseñada internamente que responda a las características inherentes a la actividad; y a las empresas dinámicas y de rápido crecimiento.
		
					Utilizamos las últimas tecnologías disponibles en herramientas de software y técnicas de desarrollo de aplicaciones para posibilitar la adaptación de éstas a las necesidades específicas de los clientes, siguiendo estrictas normas de análisis y programación.
		
					<br><br>
					<b>Capacitación en Tecnologías de Información: </b>Uno de los factores mas importantes para una implementación exitosa es la capacitación previa de todo el personal interviniente en el proyecto. La misma se puede realizar en nuestro centro de capacitación en forma grupal o individual. También existe la opción de realizar el entrenamiento en el mismo lugar de trabajo pero esto trae muchas veces distracciones provenientes de la operación diaria de la empresa.
					<br>Los cursos están divididos en 3 (tres) niveles, básico , medio y avanzado: 
					<br><br>
				<div class="col-md-4">
					<h5 class="center">Basico</h5>
					<p class="light" align="justify"> 
					Esta dirigido al personal de operación y tiene como finalidad proporcionar un conocimiento de nuestra tecnología, con clases teóricas- prácticas, incluye todo lo necesario para las operaciones de rutina como la carga de comprobantes dentro del sistema y los listados de control de carga.</p>         
				</div>

				<div class="col-md-4">
					<h5 class="center">Medio</h5>
					<p class="light" align="justify">
					Esta dirigido al personal jerárquico y tiene como finalidad proporcionar un conocimiento de nuestra tecnología, con clases teóricas- prácticas,incluye las técnicas de control cruzado de información, generación de reportes dinámicos y control de gestión.</p>
				</div>

				<div class="col-md-4">
					<h5 class="center">Avanzado</h5>
					<p class="light" align="justify">  
					Esta dirigido al personal del departamento de sistemas, incluye las funciones de implementación y parametrización de software.</p>
				</div>	
				
			</div>
		</div>
	</section>
	<!--main-section-end-->

	<!--new_portfolio-->

	<!-- Portfolio -->
	<section class="container">

		<!-- Container -->
		<div class="container portfolio-title">

			<!-- Section Title -->
			<div   id="Portfolio" class="section-title">
				<h2>Portfolio</h2>
			</div>
			<!--/Section Title -->

		</div>
		<!-- Container -->

		<div class="portfolio-top"></div>

		<!-- Portfolio Plus Filters -->
		<div class="portfolio">

			<!-- Portfolio Filters -->
			<div id="filters" class="sixteen columns">
				<ul class="clearfix">
					<li>
						<a id="all" href="#" data-filter="*" class="active">
							<h5>TODOS</h5>
						</a>
					</li>
					<li>
						<a class="" href="#" data-filter=".club">
							<h5>ORG / CLUB</h5>
						</a>
					</li>
					<li>
						<a class="" href="#" data-filter=".empresa">
							<h5>EMPRESAS</h5>
						</a>
					</li>
				</ul>
			</div>
			<!--/Portfolio Filters -->

			<!-- Portfolio Wrap -->
			<div class="isotope" style="position: relative; overflow: hidden; " id="portfolio-wrap">
				<div  class="portfolio-item one-four  club  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/afa.jpg" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name" align="Center" >AFA</h4>
							</div>
						</div>
					</a>
				</div>
				
				<div  class="portfolio-item one-four  club  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Atlético River Plate.png" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name" align="Center" >Club Atlético River Plate</h4>
							</div>
						</div>
					</a>
				</div>
				
				<div  class="portfolio-item one-four  empresa  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/coelsa.jpg" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">Coelsa</h4>
							</div>
						</div>
					</a>
				</div>

				<div class="portfolio-item one-four  empresa isotope-item">
					<div class="portfolio-image"> <img src="img/logo/idea.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">IDEA</h4>
						</div>
					</div>
				</div>
				
				<div  class="portfolio-item one-four club  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/logo_casla.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Club Atlético San Lorenzo de Almagro</h4>
						</div>
					</div>
				</div>
				
				<div  class="portfolio-item one-four club  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Atlético Lanus.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Club Atlético Lanus</h4>
						</div>
					</div>
				</div>
				
			

				<div class="portfolio-item one-four  club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Asociación Cristiana de Jóvenes YMCA.jpg" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Asociación Cristiana de Jóvenes YMCA</h4>
						</div>
					</div>
				</div>
				
			
				<div  class="portfolio-item one-four club  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/logo_ger.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Club Gimnasia y Esgrima de Rosario</h4>
						</div>
					</div>
				</div>

				<div class="portfolio-item one-four  club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Centro de Graduados del Liceo Naval Militar.jpg" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Centro de Graduados del Liceo Naval Militar</h4>
						</div>
					</div>
				</div>
				
				<div  class="portfolio-item one-four club  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Atlético Temperley.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Club Atlético Temperley</h4>
						</div>
					</div>
				</div>

				<div  class="portfolio-item one-four club  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Gimnasia y Esgrima de Buenos Aires GEBA.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Club Gimnasia y Esgrima de Buenos Aires GEBA</h4>
						</div>
					</div>
				</div>				

				<div class="portfolio-item one-four  club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Ciudad de Buenos Aires.jpg" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name" >Club Ciudad de Buenos Aires</h4>
						</div>
					</div>
				</div>

				<div class="portfolio-item one-four  club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Circulo de Ex Cadetes del Liceo Militar Gral. San Martin (CEC).jpg" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Circulo de Ex Cadetes del Liceo Militar Gral. San Martin (CEC)</h4>
						</div>
					</div>
				</div>				

				<div class="portfolio-item one-four  club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Atlético Chacarita Juniors.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Club Atlético Chacarita Juniors</h4>
						</div>
					</div>
				</div>

				<div class="portfolio-item one-four   club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Asociación Argentina de Polo.jpg" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">Asociación Argentina de Polo</h4>
							</div>
						</div>
				</div>				

							
				<div class="portfolio-item one-four   club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Atlético Rosario Central.png" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">Club Atlético Rosario Central</h4>
							</div>
						</div>
					</a>
				</div>

				<div class="portfolio-item one-four   club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Atlético Velez Sarsfield.jpg" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">Club Atlético Velez Sarsfield</h4>
							</div>
						</div>
				</div>

				

				<div class="portfolio-item one-four  club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club de Amigos.jpg" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Club de Amigos</h4>
						</div>
					</div>
				</div>

				

				<div  class="portfolio-item one-four  club  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Ferro Carril Oeste.jpg" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Club Ferro Carril Oeste</h4>
						</div>
					</div>
				</div>

				

				<div class="portfolio-item one-four  empresa isotope-item">
					<div class="portfolio-image"> <img src="img/logo/lifecenter.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Life Center</h4>
						</div>
					</div>
				</div>

				

				<div class="portfolio-item one-four  club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Náutico Buchardo.jpg" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Club Náutico Buchardo</h4>
						</div>
					</div>
				</div>

				

				<div  class="portfolio-item one-four club  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Náutico Zárate.jpg" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Club Náutico Zárate</h4>
						</div>
					</div>
				</div>

				

				<div  class="portfolio-item one-four  empresa  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/lh.jpg" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">LH Confort</h4>
							</div>
						</div>
					</a>
				</div>

				
				<div class="portfolio-item one-four   club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Social y Deportivo Defensa y Justicia.png" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">Club Social y Deportivo Defensa y Justicia</h4>
							</div>
						</div>
					</a>
				</div>

				
				<div class="portfolio-item one-four   club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Sportivo Independiente.png" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">Club Sportivo Independiente</h4>
							</div>
						</div>
				</div>

				

				<div class="portfolio-item one-four  club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Sportivo Villa Ballester.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Club Sportivo Villa Ballester</h4>
						</div>
					</div>
				</div>

				

				<div  class="portfolio-item one-four  club  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/CSIR.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Independiente Rivadavia de Mendoza</h4>
						</div>
					</div>
				</div>

				

				<div class="portfolio-item one-four  club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Deportiva Francesa.jpeg" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Deportiva Francesa</h4>
						</div>
					</div>
				</div>

				

				<div class="portfolio-item one-four  club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Gimnasia y Esgrima de Villa del Parque.jpg" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Gimnasia y Esgrima de Villa del Parque</h4>
						</div>
					</div>
				</div>

				

				<div  class="portfolio-item one-four club  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Instituto Atlético Central Córdoba.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Instituto Atlético Central Córdoba</h4>
						</div>
					</div>
				</div>

				

				<div  class="portfolio-item one-four  club  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/San Isidro Club.jpg" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">San Isidro Club</h4>
							</div>
						</div>
					</a>
				</div>

				
				<div class="portfolio-item one-four   club isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Sociedad Alemana de Gimnasia.png" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">Sociedad Alemana de Gimnasia</h4>
							</div>
						</div>
					</a>
				</div>

				<div  class="portfolio-item one-four  empresa  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/lody.jpg" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Lody Lingerie</h4>
						</div>
					</div>
				</div>

				

				<div class="portfolio-item one-four  empresa isotope-item">
					<div class="portfolio-image"> <img src="img/logo/martorani S A.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Droguería Martorani S.A</h4>
						</div>
					</div>
				</div>

				

				<div class="portfolio-item one-four  empresa isotope-item">
					<div class="portfolio-image"> <img src="img/logo/mas vida salud.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Mas Vida Salud</h4>
						</div>
					</div>
				</div>

				

				<div  class="portfolio-item one-four empresa  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/packers vitz Sistema de embalaje.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Packers Vitz Sistema De Embalaje</h4>
						</div>
					</div>
				</div>

				

				<div  class="portfolio-item one-four  empresa  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Pilotes y Anclajes SRL.jpg" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">Pilotes y Anclajes SRL</h4>
							</div>
						</div>
					</a>
				</div>

				
				<div class="portfolio-item one-four  empresa  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/sic transcore.png" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">SicTranscore</h4>
							</div>
						</div>
					</a>
				</div>

				
				<div class="portfolio-item one-four   empresa isotope-item">
					<div class="portfolio-image"> <img src="img/logo/logo_v3.png" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">SP Plásticos</h4>
							</div>
						</div>
				</div>

				

				<div class="portfolio-item one-four  empresa isotope-item">
					<div class="portfolio-image"> <img src="img/logo/WSP.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Watchman Seguridad Privada</h4>
						</div>
					</div>
				</div>

				

				<div  class="portfolio-item one-four  empresa  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/argentina cine.jpg" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Argentina Cine</h4>
						</div>
					</div>
				</div>

				

				<div class="portfolio-item one-four  empresa isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Aya Repuestos.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Aya Repuestos</h4>
						</div>
					</div>
				</div>

				

				<div class="portfolio-item one-four  empresa isotope-item">
					<div class="portfolio-image"> <img src="img/logo/biemme-logo.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">BIEMME ARGENTINA S.A.</h4>
						</div>
					</div>
				</div>

				

				<div  class="portfolio-item one-four empresa  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Centro Optico Casin.png" > </div>
					<div class="project-overlay">
						<div class="project-info">
							<h4 class="project-name">Centro Optico Casin</h4>
						</div>
					</div>
				</div>

				
				<div class="portfolio-item one-four   empresa isotope-item">
					<div class="portfolio-image"> <img src="img/logo/feit y olivari.png" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">Feit y Olvivari</h4>
							</div>
						</div>
					</a>
				</div>		
				

				<div  class="portfolio-item one-four  club  isotope-item">
					<div class="portfolio-image"> <img src="img/logo/Club Sirio Libanes.jpg" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">Club Sirio Libanes</h4>
							</div>
						</div>
					</a>
				</div>

				
				<div class="portfolio-item one-four   empresa isotope-item">
					<div class="portfolio-image"> <img src="img/logo/cirugiaArgentina.png" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">Cirugia Argentina</h4>
							</div>
						</div>
					</a>
				</div>	
				
				<div class="portfolio-item one-four   empresa isotope-item">
					<div class="portfolio-image"> <img src="img/logo/soubeiranchobet.png" > </div>
						<div class="project-overlay">
							<div class="project-info">
								<h4 class="project-name">Laboratorio SOUBEIRAN CHOBET</h4>
							</div>
						</div>
					</a>
				</div>				

			</div>
			<!--/Portfolio Wrap -->

		</div>
		<!--/Portfolio Plus Filters -->

		<div class="portfolio-bottom"></div>

		<!-- Project Page Holder-->
		<div id="project-page-holder">
			<div class="clear"></div>
			<div id="project-page-data"></div>
		</div>
		<!--/Project Page Holder-->

	</section>
	<!--/Portfolio -->
	<!--/Portfolio -->


	</div>
	<!--c-logo-part-end-->
	<section class="main-section team" id="partners">
		<!--main-section team-start-->
		<div class="container " style="text-align: center">
				<h2>PARTNERS & ALIANZAS</h2>
			<div class="team-leader-block clearfix">
				<div class="row">
							<div class="col-md-4 animated wow  zoomIn ">
								<img src="img/fibercorp.png " width="250px" alt="">
								<p>	<a href="http://pymes.telecom.com.ar/partners/" target="_blank"> pymes.telecom.com.ar/partners/ </a> <br>

								Tel. 0800 888 0800
								</p>
							</div>
							
							<div class="col-md-4 animated wow  zoomIn">
								<img src="img/logo/mercadopago.png" width="200" alt=""> 
								<p>									
									<a href="https://www.mercadopago.com" target="_blank">mercadopago.com</a> <br>
									<a href="https://www.mercadolibre.com.ar" target="_blank">mercadolibre.com.ar</a><br>
									<!-- info@url <br> -->
									<!-- Tel. +54 11 0000 0000 -->
								</p>
							</div>
							
							<div class="col-md-4 animated wow  zoomIn">
								<img src="img/logo/decidirsps.png" width="40" alt=""> 
								<p>									
									<a href="http://www.decidir.com.ar/home" target="_blank"> decidir.com.ar </a> <br>
									infoclientes@decidir.com.ar <br>
									Tel. +54 11 4379 3460
								</p>
							</div>
			</div>
			<br><br>
			<div class="row">
							<div class="col-md-4 animated wow  zoomIn">
								<img src="img/logo/ppt.png" width="150px" alt=""> 
								<p>									
									<a href="https://www.paypertic.com/" target="_blank"> paypertic.com </a> <br>
									info@paypertic.com  <br>
									Tel. 0810 - 220 - 5555 
								</p>
							</div>
			
							
							
							<div class="col-md-4 animated wow  zoomIn">
								<img src="img/logo/siro.png" width="150px" alt=""> 
								<p>									
									<a href="https://www.bancoroela.com.ar:8081/" target="_blank"> bancoroela.com </a> <br>
									Tel. +5491155292258
								</p>
							</div>
							

							<div class="col-md-4 animated wow  zoomIn">
								<img src="img/gire.png" width="100" alt=""> 
								<p>									
									<a href="http://www.gire.com/" target="_blank"> gire.com </a> <br>
									ventaempresas@gire.com <br>
									Tel. +54 11 4324-1500
								</p>
							</div>
			

				</div>	
				<br><br>
				<h4>Asociados a las siguientes camaras empresarias</h4>
				<br>
					<div class="row">
							<div class="col-md-6 animated wow  zoomIn ">
								<img src="img/cessi.png" width="100px" alt="">
								<p>	
									Camara de la Industria Argentina del Software<br>
									<a href="http://www.cessi.org.ar/" target="_blank"> cessi.org.ar/ </a> <br>
									Marcelo T. De Alvear 636, 4° piso <br>
									info@cessi.org.ar <br>
									Tel.: + 54 11 5217-7802 
								</p>
							</div>
							<div class="col-md-6 animated wow  zoomIn ">
								<img src="img/idea.png" width="100px" alt="">
								<p>	
									Instituto para el Desarrollo Empresarial de la Argentina<br>
									<a href="https://www.idea.org.ar" target="_blank"> idea.org.ar/ </a> <br>
									Viamonte 570 <br>
									info@idea.org.ar <br>
									Tel.: + 54 11 4130-0000
								</p>
							</div>
					</div>

	
			</div>

		</div>
	</section>
	<!--main-section team-end-->




	<!--Top_content-->
	<section id="nosotros" class="top_cont_outer">
		<div class="top_cont_inner">
			<div class="container">
				<div class="top_content">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<div class="top_left_cont flipInY wow animated">
								<h2>Nosotros</h2>
								<p style="text-align: justify;"> Desde 1986 Clever Soft S.A. se ha especializado en brindar soluciones informáticas a las empresas, buscando de forma constante optimizar los tiempos de las tareas que hacen a la gestión del negocio, ofreciendo la información necesaria para que la alta dirección posea una herramienta eficáz y eficiente para la toma de decisión. Nuestros productos son de fácil adaptabilidad a cualquier tipo de necesidad del negocio. Clever Soft S.A. cuenta con un grupo de profesionales, que brinda la más alta calidad en el desarrollo de soluciones inmediatas, creando un producto de fácil parametrización, adaptándolo a las reglas y circuitos de cada negocio. El staff de profesionales que integran Clever Soft S.A. posee los conocimientos y cuenta con la tecnología para enfrentar los requerimientos más rigurosos del mercado actual. Utilizando motores de base de datos desde sus origenes para un óptimo rendimiento de las aplicaciones, lo que redunda en seguridad, solidez y escalabilidad para su total conformidad. </p> 
								</div>
						</div>
						<div class="col-lg-7 col-sm-5"> </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Top_content-->



	</section>


		<!--c-logo-part-end-->
	<section class="main-section team" >
		<!--main-section team-start-->
		<div class="container " style="text-align: justify;">
			<div class="team-leader-block clearfix">
				<div class="row">
							<div class="col-md-4 animated wow  zoomIn ">
								<h3>Propósito</h3><p> Nuestra razón de existir.</p>
								<p>	
								Ser una empresa líder en el mercado empresarial, aplicando la inteligencia al desarrollo del software, ofreciendo a nuestros clientes confianza y responsabilidad de los proyectos encarados, trascendiendo las fronteras y disfrutando en cada paso el camino que se recorre. 
								</p>
							</div>

							<div class="col-md-4 animated wow  zoomIn">
								<h3>Visión</h3><p> Hacia donde vamos.</p>
								<p>									
									Brindar a nuestros clientes herramientas que facilite y complemente el desarrollo de sus operaciones en diferentes industrias o actividades, acercándoles soluciones innovadoras, prácticas y confiables para su constante evolución, con el respaldo de una gran empresa.

								</p>
							</div>

			
							<div class="col-md-4 animated wow  zoomIn">
								<h3>Misión</h3><p>La forma de alcanzar nuestro propósito.</p>
								<p >				
								Desarrollar y potenciar el mejor software de gestión empresarial del mercado, simple, eficiente y flexible. Ofreciendo instalaciones Cloud, In-Company e Híbridas, adaptables a cualquier dispositivo. Proveer soluciones informáticas de última generación compitiendo con los mejores del sector.

								</p>
							</div>
			

				</div>	
	
			</div>

		</div>
	</section>
	<!--main-section team-end-->

	<!--twitter-feed-end-->
	<footer class="footer_section" id="contacto">
		<div class="container">
			<section class="main-section contact" id="contact">
				<div class="contact_section">
					<h2>Contacto</h2>
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="contact_block">
								<div class="contact_block_icon rollIn animated wow"><span><i class="fa-home"></i></span></div>
								<span>  Av. Congreso 1534, Piso 11<br> C1428BUB Nuñez, <br> Buenos Aires </span> </div>
						</div>
						<div class="col-lg-4 col-md-4">
								<div class="contact_block">
									<div class="contact_block_icon icon2 rollIn animated wow"><span><i class="fa-phone"></i></span></div>
									<span>Argentina +54 11 5032-2828</span>
									<span>Chile +56 73 2452415</span>
									<span>Colombia +57 300 929 2109</span>
									<span>Estados Unidos +1 650 843 9015</span>
									<span>México +52 81 8421 6791</span>
								 
								 </div>
							</div>
						<div class="col-lg-4">
							<div class="contact_block">
								<div class="contact_block_icon icon3 rollIn animated wow"><span><i class="fa-pencil"></i></span></div>
								<span> <a href="mailto:info@cleversoftsolutions.com"> info@cleversoftsolutions.com</a> </span> </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 wow fadeInLeft">
						<div class="contact-info-box address clearfix">
							<h3>Contacto!</h3>
							<p>Para pertenecer a nuestro equipo de trabajo o solicitar información escribinos un mail a <a href="mailto:info@cleversoftsolutions.com"> info@cleversoftsolutions.com</a> </p>
						</div>
						<ul class="social-link">
							<li class="twitter animated bounceIn wow delay-02s">
								<a href="https://twitter.com/Clever_Soft" target="_blank">
									<i class="fa-twitter">
									</i>
								</a>
							</li>

							<li class="facebook animated bounceIn wow delay-03s">
								<a href="https://es-la.facebook.com/CleverSoft-1715668688662618/" target="_blank">
									<i class="fa-facebook">
									</i>
								</a>
							</li>

							<li class="instagram animated bounceIn wow delay-04s">
								<a href="https://www.instagram.com/clever_soft/" target="_blank">
									<i class="fa-instagram">
									</i>
								</a>
							</li>
						</ul>
					</div>

					<div class="col-lg-6 wow fadeInUp delay-06s">
						<div class="form">
							<div id="sendmessage">Tu mensaje ha sido enviado. Gracias!</div>
							<div id="errormessage"></div>


							<form action="index.php" method="post">

								<input type="hidden" name="secur" id="secur" value="">

								<div class="form-group">
									<input type="text" name="name" class="form-control input-text" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
									<div class="validation"></div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control input-text" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Por favor ingrese un email valido" />
									<div class="validation"></div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres" />
									<div class="validation"></div>
								</div>
								<div class="form-group">
									<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Mensaje" placeholder="Mensaje"></textarea>
									<div class="validation"></div>
								</div>

								<input type="submit" name="submit" value="Enviar información" class="btn-submit"> 
							</form>


						</div>
					</div>
				</div>
				<br>
				
				<div class="row">
					<div class="col-lg-12 justify-content-center text-center">
						<a href="/CleverSoft-PL-Calidad.pdf" target='_blank'>Política de Calidad</a>
					</div>
				</div>
				
				
				<br>
		<!--		<a href="#!">WebMail</a>
				<a href="https://cleversoftsolutions.com/soporte/scp/">Sistema de tickets</a>
				<a href="">Proyectos</a>
				<a href="https://gator760.hostgator.com:2083/">Admin. Web (CPanel)</a>
				<a href="">Control de Licencias</a> -->
			</section>

		</div>




	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.102138401144!2d-58.455859884771755!3d-34.55096923047319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb42fb2cfd66f%3A0x990ee64e58f0f4c6!2sCleverSoft+Argentina+-+Clever+Soft+SA!5e0!3m2!1ses-419!2sar!4v1530540918744" width="100%" height="300px"  frameborder="0" style="border:0" allowfullscreen>

					

	
	
	</iframe>


<!--==========================
  Modal
==============================--> 
<div class="modal fade bs-example-modal-lg" id="ERP" tabindex="-1" role="dialog" aria-labelledby="myModalClub">
	<div class="modal-dialog modal-lg" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <h4 class="modal-title" id="myModalLabel">ERP</h4>
		</div>
		<div class="modal-body">
		    <li>Incluye módulos de Ventas, Facturación, Compras, Tesorería, Stock, Contabilidad y Tablas. Desarrollado en un entorno gráfico y basado en la navegación a través de botones y menús. </li>
            <li>Los circuitos lógicos de la carga de datos son de fácil acceso y entendimiento, logrando que los usuarios aprendan en tiempos record el uso de software.</li>
            <li>Utiliza las mejores tecnologías del mercado, incluyendo el desarrollo específico para Microsoft Windows y Microsoft SQL Server.</li>
            <li>Todas las operaciones generan su respectivo asiento contable integrado en línea.</li>
            <li>La interfase con el usuario esta desarrollada con especial cuidado en la facilidad de uso. </li>
            <li>Los formularios o tipos de comprobantes son definidos por el usuario, dándole el funcionamiento deseado. </li>
            <li>Cuenta con su propio generador de reportes</li>                       
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
		</div>
	  </div>
	</div>
  </div>

  <div class="modal fade bs-example-modal-lg" id="Club" tabindex="-1" role="dialog" aria-labelledby="myModalClub">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalClub">Club</h4>
		  </div>
		  <div class="modal-body">
			<li> Permite tener una base de datos con la información de los socios, grupo familiar, cuenta corriente, inscripciones a actividades, etc.</li>
			<li>Posee un módulo sencillo para el control y venta en el acceso de la entidad. Impresión de Credencial/Pasaporte con foto, datos del socio, y logo de la entidad. Impresión de comprobantes. Cobranzas por lote.</li>
			Cuenta también con los módulos de:
			<br>
			<li>Administración: permite administrar los usuarios, instituciones, programas, recursos, profesores, listas de precios.</li>
			<li>Ventas: Resumen de Venta e Ingresos, Rendición General de Boxes por programas, Ventas Receptivas, Facturación, Cobranzas, Prefacturación, Cobranza por lotes.</li>
			<li>Deportes: permite realizar las reservas de canchas y/o recursos. Administrador de Asistencia para cada actividad, obteniendo un reporte diario, mensual o de bajas para cada una de ellas.Administrador de Evaluaciones: según las necesidades del profesor y/o actividad, genera informes y evaluaciones para cada socio, quedando en la base un historial para su posterior consulta.</li>
			
			<li>Salud: esta dise˜ado para el área médica de la entidad. Permite realizar la reserva de turnos, cobro del programa, administrador de programa, administrador de profesionales/ equipos, liquidación de profesionales.</li>
			<li>Consultas: Cuenta corriente, Reporte de deuda a una fecha, Deuda por programa/producto, Cobro por programa/producto, Deuda por grupo de conceptos, Reservas, Reservas pendientes de facturación, Inscripciones, pasaportes (a vencer, emitidos, renovados), Consultas para el área de Marketing, Impresión de etiquetas de usuarios/intituciones.</li>
			<li>Herramientas: permite enviar mails a los usuarios.</li>
			<li>Todos los reportes permiten la exportación a los siguientes formatos: CSV, PDF, TXT.</li>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
		  </div>
		</div>
	  </div>
	</div>

	<div class="modal fade bs-example-modal-lg" id="Salud" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <h4 class="modal-title" id="myModalLabel">Salud</h4>
			</div>
			<div class="modal-body">
			  <li>Está diseñado para facilitar la administración de Hospitales, Sanatorios, Clínicas incluyendo los módulos de Admisión, Facturación, Turnos, Servicios y Herramientas.</li>
			  <li>Éste sistema permite tener una base de datos con la información de los pacientes y sus historias clínicas.</li>
			  <li>También posee una agenda para llevar el control de los turnos para su asignación y tiene la capacidad de generar los bonos necesarios según la entidad.</li>
			  <li>A su vez permite realizar la liquidación a los profesionales y la facturación a los prestadores.</li>
			  <li>Finalmente, cuenta con un sistema práctico para un seguimiento de las internaciones y las asignaciones de las camas utilizadas.</li>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
			</div>
		  </div>
		</div>
	  </div>

	  


<!--==========================
Footer
==============================--> 

	<script type="text/javascript">
		$(document).ready(function(e) {
			$('#header_outer').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

		});
	</script>
	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
		
	
	</script>

	

	<script type="text/javascript">
		jQuery(document).ready(function($) {


			$('#secur').val("58n72309cm5230952cm934875n398v59038m");


			// Portfolio Isotope
			var container = $('#portfolio-wrap');


			container.isotope({
				animationEngine: 'best-available',
				animationOptions: {
					duration: 200,
					queue: false
				},
				layoutMode: 'fitRows'
			});

			$('#filters a').click(function() {
				$('#filters a').removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				container.isotope({
					filter: selector
				});
				setProjects();
				return false;
			});


			function splitColumns() {
				var winWidth = $(window).width(),
					columnNumb = 1;


				if (winWidth > 1024) {
					columnNumb = 4;
				} else if (winWidth > 900) {
					columnNumb = 2;
				} else if (winWidth > 479) {
					columnNumb = 2;
				} else if (winWidth < 479) {
					columnNumb = 2;
				}
				return columnNumb;
			}

			function setColumns() {

				container.find('.portfolio-item').each(function() {
					$(this).css({
						width: 110 + 'px',
						height:150 + 'px'
					});
				});
			}

			function setProjects() {
				setColumns();
				container.isotope('reLayout');
			}

			container.imagesLoaded(function() {
				setColumns();
			});


			$(window).bind('resize', function() {
				setProjects();
			});

		});
		$(window).load(function() {
			jQuery('#all').click();
			return false;
		});
	</script>


<div style='display: none;'>Ver. 190401 11.22</div>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="//www.googletagmanager.com/gtag/js?id=UA-77156638-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-77156638-2');
</script>


</body>
</html>
