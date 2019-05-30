@extends('layout.temaAdmin')

@section('content')




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
    <!--agileinfo-grap-->
    <div class="agileinfo-grap">
        <div class="agileits-box">
            <header class="agileits-box-header clearfix">
                <h3>EDITAR BARRIO</h3>
                <!--grid-->
                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('barrios.update') }}" enctype="multipart/form-data" method="get" name="form1" id="form1">
                            {!! csrf_field() !!}
                            
                            
                            <div class="vali-form">    
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre del barrio</label>
                                    <input type="text" placeholder="Nombre del barrio" name="name" value="{{ $barrio->name }}">
                                 </div>   
                               
                            
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Zona</label>
                                    <input type="text" placeholder="Zona" name="zona" value="{{ $barrio->zona }}">
                                 </div>   
                                 
                            </div>
                       
                           
                            

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">UPZ</label>
                                    <input type="text" placeholder="UPZ" name="upz" value="{{ $barrio->upz }}">
                                </div>
                                
                                <div class="clearfix"> </div>
                            </div>
                            

                           
                            <input type="hidden" name="id" value="{{ $barrio->id }}">
                           
                            
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                <button type="reset" class="btn btn-default">Cancelar</button>
                            </div>
                            <div class="clearfix"> </div>
                        </form>

                        <!---->
                    </div>

                </div>
                <!--//grid-->
            </header>
            <div class="agileits-box-body clearfix">
                <div id="hero-area"></div>
            </div>
        </div>
    </div>
    <!--//agileinfo-grap-->

    <script src="js/app.js"></script>


@endsection
