<!DOCTYPE HTML>
<html>
<head>
<title>Banco de Datos Industria y Comercio</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link rel="icon" href="favicon.ico" type="image/x-icon" >
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<link href="css/bootstrap.min.css" rel="stylesheet">
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<link href="css/demo-page.css" rel="stylesheet" media="all">
<link href="css/hover.css" rel="stylesheet" media="all">
<!-- //DROPDOWN -->
<script src="js/dropdown.js"></script>
<!-- maps -->
<link href="css/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
<!-- //maps -->
 <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="js/gmaps.js"></script>
		<link rel="stylesheet" type="text/css" href="css/examples.css" />


</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class="sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" id="cbp-spmenu-s1">
					<div class="scrollbar scrollbar1">
						<ul class="nav" id="side-menu">
							<li>
								<a href="{{route('inicio')}}" class="active"><i class="fa fa-home nav_icon"></i>Inicio</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-list-ul nav_icon"></i>Comercial <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">

									<li>
										<a href="{{ route('mostrarComercio', ['categoria'=> 'Restaurantes'])}}">Restaurantes</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Ferreterias'])}}">Ferreterias</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Droguerias'])}}">Droguerías</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Casas de Cambio'])}}">Casas de Cambio</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Agencias de Viaje'])}}">Agencias de Viaje</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Moteles'])}}">Moteles</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Floristerias'])}}">Floristerías</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Inmobiliarias'])}}">Inmobiliarias</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Disfraces'])}}">Disfraces</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Librerias'])}}">Librerías</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Telefonos'])}}">Teléfonos</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Papelerias'])}}">Papelerías</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Cades, Supercades y Rapicades'])}}">Cades, Supercades y Rapicades</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Peluquerias'])}}">Peluquerías</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Tiendas Naturistas'])}}">Tiendas Naturistas</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Restaurante a Domicilio'])}}">Restaurante a Domicilio</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Centro de Belleza y Estetica'])}}">Centro de Belleza y Estética</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Supermercados'])}}">Supermercados</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Opticas'])}}">Ópticas</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Vidrios'])}}">Vidrios</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Productos Quimicos'])}}">Productos Químicos</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Repuestos para Motocicletas'])}}">Repuestos para Motocicletas</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Fundaciones'])}}">Fundaciones</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Materiales Electricos'])}}">Materiales Eléctricos</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Panaderias'])}}">Panaderías</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Bicicletas'])}}">Bicicletas</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Agencia de Publicidad'])}}">Agencia de Publicidad</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Instrumentos Musicales'])}}">Instrumentos Musicales</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Pasteleria'])}}">Pastelería</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Maderas'])}}">Maderas</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Constructoras'])}}">Constructoras</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Llantas'])}}">Llantas</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Dotaciones para empresa'])}}">Dotaciones para empresa</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Comida Rapida'])}}">Comida Rápida</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Viveros'])}}">Viveros</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Asaderos'])}}">Asaderos</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Articulos Ortopedicos'])}}">Artículos Ortopédicos</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Articulos para Adultos'])}}">Artículos para Adultos ( ͡° ͜ʖ ͡°)</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Reciclaje'])}}">Reciclaje</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Estampados'])}}">Estampados</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Radiodifusoras'])}}">Radiodifusoras</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Farmacias'])}}">Farmacias</a>
									</li>



								</ul>
								<!-- /nav-second-level -->

							</li>
							<!-- FIN COMERCIAL -->
							<!-- FINANCIEROS -->
							<li>
								<a href="#"><i class="fa fa-list-ul nav_icon"></i>Financieros <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Bancos'])}}">Bancos</a>
									</li>

								</ul>
								<!-- /nav-second-level -->
							</li>
							<!-- FIN FINANCIEROS -->



							<!-- INDUSTRIAL -->
							<li>
								<a href="#"><i class="fa fa-list-ul nav_icon"></i>Industrial<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Plasticos'])}}">Plásticos</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Telas'])}}">Telas</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Repuestos Automotrices'])}}">Repuestos Automotrices</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Confecciones'])}}">Confecciones</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Uniformes'])}}">Uniformes</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Aire Acondicionado'])}}">Aire Acondicionado</a>
									</li>
								</ul>
								<!-- //nav-second-level -->
							</li>

							<!-- FIN INDUSTRIAL -->

							<!-- SERVICIOS -->

							<li>
								<a href="#"><i class="fa fa-list-ul nav_icon"></i>Servicios<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Hoteles'])}}">Hoteles</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Transporte Terrestre de Pasajeros'])}}">Transporte Terrestre de Pasajeros</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Fondo de Pensiones y Cesantias'])}}">Fondo de Pensiones y Cesantías</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Clinicas Veterinarias'])}}">Clínicas Veterinarias</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Taxis'])}}">Taxis</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Agencias de Empleo'])}}">Agencias de Empleo</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Laboratorio Clinico'])}}">Laboratorio Clínico</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Notarias'])}}">Notarías</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Salones para Recepciones'])}}">Salones para Recepciones</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Clinicas'])}}">Clínicas</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Iglesias y Parroquias Catolicas'])}}">Iglesias y Parroquias Católicas</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Iglesias'])}}">Iglesias</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Centros de Rehabilitacion'])}}">Centros de Rehabilitación</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Empleados Temporales'])}}">Empleados Temporales</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Ecografias'])}}">Ecografías</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Abogados'])}}">Abogados</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Terminales de Transporte Terrestre'])}}">Terminales de Transporte Terrestre</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Cooperativas'])}}">Cooperativas</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Salud Ocupacional'])}}">Salud Ocupacional</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Laboratorios Farmaceuticos'])}}">Laboratorios Farmacéuticos</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Mariachis'])}}">Mariachis</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Clinicas Odontologicas'])}}">Clínicas Odontológicas</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Alquiler de Lavadoras'])}}">Alquiler de Lavadoras</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Alquiler de Ropa'])}}">Alquiler de Ropa</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Transporte Puerta a Puerta'])}}">Transporte Puerta a Puerta</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Centros Medicos'])}}">Centros Médicos</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Spa'])}}">Spa</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Hospitales'])}}">Hospitales</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Trasteos'])}}">Trasteos</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Estaciones de Policia'])}}">Estaciones de Policía</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Transporte Terrestre de Carga'])}}">Transporte Terrestre de Carga</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Transporte Especial de Pasajeros'])}}">Transporte Especial de Pasajeros</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Hogares Geriatricos'])}}">Hogares Geriátricos</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Comisarias de Familia'])}}">Comisarías de Familia</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Caja de Compensacion Familiar'])}}">Caja de Compensación Familiar</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Iglesias Cristianas'])}}">Iglesias Cristianas</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Guarderias Infantiles'])}}">Guarderías Infantiles</a>
									</li>
									<li>
										<a href="{{ route('mostrarComercio', ['actComercial'=> 'Servicios de Formación'])}}">Servicios de Formación</a>
									</li>
								</ul>
								<!-- //nav-second-level -->
							</li>
							<!-- FIN SERVICIOS -->

							<!-- OTROS -->
							<li>

								<a href="{{ route('mostrarComercio', ['actComercial'=> 'Otros'])}}" class="chart-nav"><i class="fa fa-list-ul nav_icon"></i>Otros<span class="fa arrow"></span></a>
							</li>
							<!-- FIN OTROS -->

						</ul>
					</div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--logo -->
				<div class="logo">
					<a href="{{route('inicio')}}">
						<ul>
							<li><img src="images/identidad/logo1.jpg" alt="" /></li>
							<li><img src="images/identidad/logo2.png" alt="" /></li>
							<li><h1>Banco de Información</h1>
									<h4>Alcaldía de Castilla</h4>
							</li>

							<div class="clearfix"> </div>
						</ul>
					</a>
				</div>
				<!--//logo-->






			</div>
			<!--search-box-->
				<div class="search-box">

					<form class="input" method="GET" action="{{route('buscador')}}">
						<input class="sb-search-input input__field--madoka" placeholder="Buscar..." type="search" id="input-31" name="buscar" />
					</form>
				</div>
				<!--//end-search-box-->
			<div class="header-right">

				<div class="profile_details">
					<ul>
						<li class="dropdown head-dpdn">
							<a href="{{ route('contacto') }}" class="dropdown-toggle"  aria-expanded="false">
								Contacto
							</a>

						</li>
						<li class="dropdown head-dpdn">
							<a href="{{route('home')}}" class="dropdown-toggle"  aria-expanded="false">Acceder</a>

						</li>
					</ul>
				</div>
				<!--notification menu end -->

				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			@include('layout._mensajes')
			@include('layout._errors')
			@yield('contenido')

		</div>

		<!--footer-->
		 <div class="dev-page">

			<!-- page footer -->
			<!-- dev-page-footer-closed dev-page-footer-fixed -->
            <div class="dev-page-footer dev-page-footer-fixed">
				<!-- container -->
				<div class="container">

					<div class="copyright">
						<p>©2019 Banco de datos Industria y Comercio. Todos los derechos reservados. Powered by <a href="http://adhesdigital.com/">Adhes Digital</a></p>
					</div>

				<!-- page footer buttons -->
					<!-- <ul class="dev-page-footer-buttons">
						<li><a href="#footer_content_1" class="dev-page-footer-container-open"><span class="glyphicon glyphicon glyphicon-sort" aria-hidden="true"></span></a></li>

					</ul> -->
					<!-- //page footer buttons -->
                <!-- page footer container -->
					<div class="dev-page-footer-container">

						<!-- loader and close button -->
						<div class="dev-page-footer-container-layer">
							<a href="#" class="dev-page-footer-container-layer-button"></a>
						</div>
						<!-- //loader and close button -->

						<!-- informers -->
						<div class="dev-page-footer-container-content" id="footer_content_1">
							<div class="block-hdnews">
								  <div class="list-wrpaaer" style="height:200px;">
									 <ul class="list-aggregate" id="marquee-horizontal">
									   <li class="fat-l" style="width:300px">
										<a href="#">Contacto</a>
										<p>
										   Dirección: Calle 1 No 2-3
										   Teléfonos: 5555555 - 5555555
										   email: email@email.com
										 </p>
									   </li>

									   <li class="fat-l" style="width:300px">
										<a href="#">Consectetur</a>
										<p>
										   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										 </p>
									   </li>

									   <li class="fat-l" style="width:300px">
										 <a href="#">Adipiscing elit</a>
										 <p>
										   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										 </p>
									   </li>

									   <li class="fat-l" style="width:300px">
										<a href="#">Lorem ipsum dolor</a>
										 <p>
										   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										 </p>
									   </li>
										<li class="fat-l" style="width:300px">
										<a href="#">Consectetur</a>
										 <p>
										   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										 </p>
									   </li>

									   <li class="fat-l" style="width:300px">
										 <a href="#">Adipiscing elit</a>
										 <p>
										   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										 </p>
									   </li>

									 </ul>
								  </div><!-- list-wrpaaer -->

							  </div> <!-- block-hdnews -->

						<script type="text/javascript">

						  $(function(){


						  $('#marquee-vertical').marquee();
						  $('#marquee-horizontal').marquee({direction:'horizontal', delay:0, timing:50});

						});

						</script>
						</div>
						<!-- //informers -->




					</div>
                </div>
				<!-- //container -->
            </div>
            <!-- /page footer -->
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};


			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- Bootstrap Core JavaScript -->

        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/dev-loaders.js"></script>
        <script type="text/javascript" src="js/dev-layout-default.js"></script>
		<script type="text/javascript" src="js/jquery.marquee.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">



</body>
</html>
