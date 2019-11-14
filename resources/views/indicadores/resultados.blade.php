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

<script type="text/javascript" src="js/charts/dist/Chart.js"></script>

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
        <div class="inner-block">
          <div class="agile-tables">
            <div class="w3l-table-info">
              <div class="panel-heading">

              <h2 style="color:red;">PATRONES DE COMPORTAMIENTO DE LEGALIDAD</h2>
                @if($data =='Industria y Comercio')
                <h2>IMPUESTO: {{$data}}</h2>
                @else
                <h2>REQUISITO: {{$data}}</h2>
                @endif
              @if($barrio != null)
                <h2>SECTOR: {{$barrio->name}}</h2>
              @else
              <h2>SECTOR: TODOS LOS BARRIOS</h2>
              @endif

              <div class="form-group">
                    <div class="clearfix"></div>
                  </div>
              </div>
              <div class="content">
                  <div class="row justify-content-center">
                      <div class="col-md-6 col-xl-6 col-xs-12 col-sm-12">
                          <div class="block">
                              <div class="block-content block-content-full">
                                <canvas id="myChart" width="600" height="300"></canvas>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-xl-6 col-xs-12 col-sm-12">
                          <div class="block">
                              <div class="block-content block-content-full">
                                <img src="images/identidad/logo_bdi.png" alt="" style="width:100%; height:auto;">
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>


          <script>
          var ctx = document.getElementById('myChart');
          var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: ['{{$data}}'],
                  datasets: [{
                      label: 'Cumple',
                      data: [{{$comercios}}],
                      backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)'


                      ],
                      borderColor: [
                          'rgba(255, 99, 132, 1)',
                          'rgba(255, 99, 132, 1)',
                          'rgba(255, 99, 132, 1)',
                          'rgba(255, 99, 132, 1)',
                          'rgba(255, 99, 132, 1)',
                          'rgba(255, 99, 132, 1)',
                          'rgba(255, 99, 132, 1)',
                          'rgba(255, 99, 132, 1)',
                          'rgba(255, 99, 132, 1)',
                          'rgba(255, 99, 132, 1)'

                      ],
                      borderWidth: 1
                  },
                  {
                      label: 'No Cumple',
                      data: [{{$noComercios}}],
                      backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)'

                      ],
                      borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)'

                      ],
                      borderWidth: 1
                  }]


              },



              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero: true
                          }
                      }]
                  }
              }
          });
          </script>




  </body>
</html>
