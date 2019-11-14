@extends('layout.temaAdmin')

@section('content')

<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a><i class="fa fa-angle-right"></i>Mensajería</li>
            </ol>
<div class="inbox-mail">
	<div class="col-md-4 compose w3layouts">

            <h2>Mensajería</h2>
    	<nav class="nav-sidebar">
		<ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true"><i class="fa fa-inbox"></i>PQR Comercios
          	@if($nuevosPQR !=0)
          	<span>{{ $nuevosPQR }}</span>
          	@endif
          	<div class="clearfix"></div></a></li>
          <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false"><i class="fa fa-paper-plane-o"></i>Mensajería general
          	@if($nuevosCont != 0)
			<span>{{ $nuevosCont }}</span>
			@endif
          </a>

          </li>

		</ul>
	</nav>

</div>
<!-- tab content -->
<div class="col-md-8 tab-content tab-content-in w3">
<div class="tab-pane text-style active" id="tab1">
  <div class="inbox-right">

            <div class="mailbox-content">

                <table class="table">

                    	<h1>PQR Comercios</h1>
                    <tbody>

                    	@foreach($mensajes as $mensaje)
                        <tr class="table-row">

                            <td class="table-text">
                            	<h6> {{ $mensaje->nombrePQR }}</h6>
                                <p>{{ $mensaje->asuntoPQR }}</p>
                            </td>
                            <td>
                            	@if($mensaje->leidoPQR == 0)
                            	<span class="mar">No leído</span>
                            	@else
                            	<span class="fam">Leído</span>
                            	@endif
                            </td>
                            <td class="march">
                               {{ $mensaje->created_at->diffForHumans() }}
                            </td>

                            <td class="table-text">
                  							 <form action="{{route('leerMensaje')}}">
                  							 	<input type="hidden" name="idMensaje" value="{{$mensaje->id}}">
                  							 	<button type="submit" class="btn btn-default">Leer</button>
                  							 </form>
							             </td>
                        </tr>
                       @endforeach

                    </tbody>
                </table>
               </div>
            </div>
</div>
<div class="tab-pane text-style" id="tab2">
	<div class="inbox-right">

            <div class="mailbox-content">

                <table class="table">

                			 <h1>Formulario de Contacto</h1>

                    <tbody>


                    	@foreach($mensajesCont as $mensajeCont)
                        <tr class="table-row">

                            <td class="table-text">
                            	<h6> {{ $mensajeCont->nombreCont }}</h6>
                                <p>{{ $mensajeCont->asuntoCont }}</p>
                            </td>
                            <td>
                            	@if($mensajeCont->leidoCont == 0)
                            	<span class="mar">No leído</span>
                            	@else
                            	<span class="fam">Leído</span>
                            	@endif
                            </td>
                            <td class="march">
                               {{ $mensajeCont->created_at->diffForHumans() }}
                            </td>

                             <td class="table-text">
							 <form action="{{ route('leerMsjContacto') }}">
							 	<input type="hidden" name="idMensajeCont" value="{{$mensajeCont->id}}">
							 	<button type="submit" class="btn btn-default">Leer</button>
							 </form>


                            </td>
                        </tr>
                       @endforeach
                      
                    </tbody>
                </table>
               </div>
            </div>
</div>

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

@endsection
