
<!DOCTYPE HTML>
<html>
<head>
<title>Banco de Datos Industria y Comercio - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="temaAdmin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="temaAdmin/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="temaAdmin/css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="temaAdmin/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="temaAdmin/js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="temaAdmin/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- tables -->
<link rel="stylesheet" type="text/css" href="temaAdmin/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="temaAdmin/css/basictable.css" />
<script type="text/javascript" src="temaAdmin/js/jquery.basictable.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.20/b-1.6.0/b-colvis-1.6.0/b-flash-1.6.0/b-html5-1.6.0/b-print-1.6.0/r-2.2.3/datatables.min.css"/>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.20/b-1.6.0/b-colvis-1.6.0/b-flash-1.6.0/b-html5-1.6.0/b-print-1.6.0/r-2.2.3/datatables.min.js"></script>

<!--
<link rel="stylesheet" href="js/plugins/datatables/dataTables.bootstrap4.css">
<link rel="stylesheet" href="js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css"> -->

<script src="https://kit.fontawesome.com/615ae397eb.js" crossorigin="anonymous"></script>

<!-- TAGS -->

<link rel="stylesheet" type="text/css" href="{{ asset('js/tags/src/jquery.tagsinput.css') }}" />
<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js'></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js'></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/start/jquery-ui.css" /> -->


<!-- DATA TABLES -->
<script type="text/javascript">
$(document).ready(function() {
  $('#mytable').DataTable( {
      dom: 'Bfrtip',
      buttons: [
          'copy','excel', 'pdf'
      ],

      "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
              }
  } );
} );
</script>

<!-- <script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script> -->
<!-- //tables -->
<script type="text/javascript" src="js/charts/dist/Chart.js"></script>
</head>
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
             <!--header start here-->
				<div class="header-main">







						<div class="profile_details w3l">
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">
											@if(Auth::user()->avatar)
												<span class="prfil-img"><img src="/images/avatar/{{ Auth::user()->avatar }}" alt=""> </span>
											@else
												<span class="prfil-img"><img src="/images/avatar/perfil.png" alt=""> </span>
											@endif
												<div class="user-name">
													<p>{{ Auth::user()->name }}</p>
													<span>Administrador</span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>
											</div>
										</a>
										<ul class="dropdown-menu drp-mnu">

											<li> <a href="{{ route('users.edit') }}" onclick="event.preventDefault(); document.getElementById('perfil-form').submit();"><i class="fa fa-user"></i> Perfil</a>
												<form id="perfil-form" action="{{ route('users.edit') }}" method="GET" style="display: none;">
													<input type="hidden" name="id" value="{{Auth::user()->id}}">
												</form>
											</li>
											<li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
                                        			{{ __('Salir') }}</a>
	                                        	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                        	@csrf
	                                    		</form>

                                    		</li>

										</ul>
									</li>
								</ul>
							</div>

				     <div class="clearfix"> </div>
				</div>
<!--heder end here-->


	  <!--//w3-agileits-pane-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop();
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });

		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
	@include('layout._mensajes')
	@include('layout._errors')
	@yield('content')
</div>
<!--inner block end here-->

</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="{{route('home')}}"><i class="fa fa-tachometer"></i> <span>Inicio</span><div class="clearfix"></div></a>
										</li>

										<li id="menu-academico" ><a href="{{ route('comercio.index')  }}"><i class="fa fa-list-alt" aria-hidden="true"></i><span> Comercios</span> <div class="clearfix"></div></a>

										</li>

                    <li><a href="{{route('barrios.index')}}"><i class="fa fa-table"></i>  <span>Barrios</span><div class="clearfix"></div></a></li>

                    <li><a href="{{route('crudImpuestos.index')}}"><i class="fas fa-tasks"></i>  <span>Impuestos</span><div class="clearfix"></div></a></li>

                    <li><a href="{{route('requisitos.index')}}"><i class="fas fa-edit"></i>  <span>Requisitos</span><div class="clearfix"></div></a></li>

										<li id="menu-academico" ><a href="{{ route('reportes.index') }}"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>Reportes</span><div class="clearfix"></div></a></li>

                    <li id="menu-academico" ><a href="{{ route('indicadores.index') }}"><i class="fas fa-chart-bar" aria-hidden="true"></i><span>Indicadores</span><div class="clearfix"></div></a></li>

										@can('users.index')
										<li id="menu-academico" ><a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>Usuarios</span><div class="clearfix"></div></a></li>
										@endcan
										<li id="menu-academico" ><a href="{{route('config.index')}}"><i class="fa fa-cogs" aria-hidden="true"></i><span> Configuración</span><div class="clearfix"></div></a>

										</li>
								  </ul>
								</div>
								<!--copy rights start here-->
								<div >
	 								<p>Powered by  <a href="http://adhesdigital.com/" target="_blank">Adhes Digital</a> </p>
								</div>
								<!--COPY rights end here-->
							  </div>
							  <div class="clearfix"></div>

							</div>
							<script>
							var toggle = true;

							$(".sidebar-icon").click(function() {
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }

											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="temaAdmin/js/jquery.nicescroll.js"></script>
<script src="temaAdmin/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="temaAdmin/js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
<!-- morris JavaScript -->
<script src="temaAdmin/js/raphael-min.js"></script>
<script src="temaAdmin/js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });




	});
	</script>

  <script src="js/tags/src/jquery.tagsinput.js" type="text/javascript"></script>
    <script >
      $('#tags').tagsInput();
    </script>


  <!-- <script src="js/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
  <script src="js/plugins/datatables/buttons/buttons.print.min.js"></script>
  <script src="js/plugins/datatables/buttons/buttons.html5.min.js"></script>
  <script src="js/plugins/datatables/buttons/buttons.flash.min.js"></script>
  <script src="js/plugins/datatables/buttons/buttons.colVis.min.js"></script> -->

  <!-- Page JS Code -->
  <!-- <script src="js/pages/be_tables_datatables.min.js"></script> -->
</body>
</html>
