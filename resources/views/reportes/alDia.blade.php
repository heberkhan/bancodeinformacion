
<!DOCTYPE html>
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

</head>
  <body>
    <!--four-grids here-->
        <div class="four-grids">
            <div class="col-md-3 four-grid">

            </div>
            <div class="col-md-3 four-grid">

            </div>
            <div class="col-md-3 four-grid">

            </div>
            <div class="col-md-3 four-grid">

            </div>
            <div class="clearfix"></div>
        </div>
        <!--//four-grids here-->

    <div class="agile-grids">
    				<!-- tables -->

    				<div class="agile-tables">
    					<div class="w3l-table-info">
                            <div class="panel-heading">
                            <h2>Listado de Comercios al Día barrio {{$barrio->name}}</h2>

                            <!-- BOTON CREAR -->
                            <div class="form-group">
                                	<div class="clearfix"></div>
                                </div>
                            </div>

    					    <table id="mytable">
    						<thead>
    						  <tr>
    							<th>Nombre</th>
    							<th>Dirección</th>
    							<th>Actividad Comercial</th>
    							<th>Categoría</th>


    						  </tr>
    						</thead>
    						<tbody>
    						  @foreach($comercios as $comercio)
    						  <tr>

    							<td><a href="{{route('comercio.show', $comercio->id)}}">{{$comercio->nombre}}</a></td>
    							<td>{{$comercio->dirEstablecimiento}}</td>
    							<td>{{$comercio->actComercial}}</td>
    							<td>{{$comercio->categoria}}</td>
    						  </tr>
    						 @endforeach
    						</tbody>
    					  </table>
    					</div>
    				<!--   <code class="js">
    					$('#table').basictable();
    				  </code> -->



    				</div>
    				<!-- //tables -->
    			</div>
  </body>
</html>
