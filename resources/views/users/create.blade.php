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
                <h3>CREAR NUEVO USUARIO</h3>
                <!--grid-->
                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('users.store') }}" enctype="multipart/form-data" method="POST" name="form1" id="form1">
                            {!! csrf_field() !!}


                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre de usuario<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Nombre de Usuario" name="name" value="{{ old('name') }}">
                                 </div>


                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Contraseña<span class="text-danger">*</span></label>
                                    <input type="password" placeholder="Contraseña" name="pwd" >
                                 </div>

                            </div>




                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Email<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Email" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="vali-form form-last">
                                    <label for="logo">Imagen</label>
                                    <input type="file" id="logo" name="avatar" >
                                    <p class="help-block">Adjunte una imagen o ávatar</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>






                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <a href="{{URL::Previous()}}" class="btn btn-default">Volver</a>
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
