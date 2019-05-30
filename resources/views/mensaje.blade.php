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
          <li class="active"><a href="{{route('verMensajes')}}" ><i class="fa fa-inbox"></i>Volver 
          	
          	<div class="clearfix"></div></a></li>
         
                                        
		</ul>
	</nav>
		
</div>
<!-- tab content -->
<div class="col-md-8 tab-content tab-content-in w3">
<div class="tab-pane text-style active" id="tab1">
  <div class="inbox-right">
         	
            <div class="mailbox-content">
               <div class="mail-toolbar clearfix">
			     <div class="float-left">
			       
			        
			        
			    </div>
			  
				
               </div>
                <div >
                  <label>Asunto: </label>
                  <h4>{{ $mensaje->asuntoPQR }}</h4>
                </div>
                <div>
                  	<label>Remitente: </label>
                  	<h4>{{ $mensaje->nombrePQR }} - {{ $mensaje->emailPQR }}</h4>
                </div>
                <div>
                  <label>Mensaje:</label>
                  <p>{{ $mensaje->mensajePQR }}</p>
                </div>
                <label>{{ $mensaje->created_at->diffForHumans() }} </label>

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