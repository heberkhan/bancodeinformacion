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
                <h3>CONFIGURACIÓN</h3>
                <!--grid-->

                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('config.identidad') }}" enctype="multipart/form-data" method="post" name="form1">
                            {!! csrf_field() !!}
                          <label>IDENTIDAD DEL SITIO</label>
                            <div class="vali-form">

                                <div class="vali-form form-last col-md-6">
                                    <label for="logo">Logo</label>
                                    <input type="file" id="logo2" name="logo2" >
                                    <p class="help-block">Adjunte una imagen de 74 x 60 px en formatos jpg ó png</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <div class="clearfix"> </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Actualizar</button>

                            </div>
                            <div class="clearfix"> </div>
                        </form>

                        <!---->
                    </div>

                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('config.principal') }}" enctype="multipart/form-data" method="post" name="form2">
                            {!! csrf_field() !!}
                          <label>PÁGINA PRINCIPAL</label>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Título</label>
                                    <input type="text" placeholder="Título" name="titulo">
                                </div>
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Texto Principal</label>
                                    <textarea name="txtPrincipal" id="txtPrincipal" cols="50" rows="4" class="form-control1"></textarea>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <div class="vali-form">
                              <div class="vali-form form-last col-md-6">
                                  <label for="logo">Slider 1</label>
                                  <input type="file" id="slider1" name="slider1" >
                                  <p class="help-block">Adjunte una imagen para el slider</p>
                              </div>
                              <div class="vali-form form-last col-md-6">
                                  <label for="logo">Slider 2</label>
                                  <input type="file" id="slider2" name="slider2" >
                                  <p class="help-block">Adjunte una imagen para el slider</p>
                              </div>

                            </div>

                            <div class="vali-form">
                              <div class="vali-form form-last">
                                  <label for="logo">Slider 3</label>
                                  <input type="file" id="slider3" name="slider3" >
                                  <p class="help-block">Adjunte una imagen para el slider</p>
                              </div>

                            </div>




                                <div class="clearfix"> </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Actualizar</button>

                            </div>
                            <div class="clearfix"> </div>
                        </form>

                        <!---->
                    </div>

                    <div class="validation-system">

                        <div class="validation-form">
                            <!---->

                            <form action="{{ route('config.contacto') }}" method="get" name="form3">
                                {!! csrf_field() !!}
                              <label>CONTACTO</label>
                                <div class="vali-form">
                                    <div class="col-md-6 form-group1">
                                        <label class="control-label">Dirección</label>
                                        <input type="text" placeholder="Dirección" name="direccion">
                                    </div>
                                    <div class="col-md-6 form-group1">
                                        <label class="control-label">Teléfono</label>
                                        <input type="text" placeholder="Teléfono" name="telefono1">
                                    </div>

                                </div>

                                <div class="vali-form">
                                  <div class="col-md-6 form-group1">
                                      <label class="control-label">Teléfono 2</label>
                                      <input type="text" placeholder="Teléfono 2" name="telefono2">
                                  </div>
                                  <div class="col-md-6 form-group1">
                                      <label class="control-label">Email 1</label>
                                      <input type="text" placeholder="Email" name="email1">
                                  </div>

                                </div>
                                <div class="vali-form">
                                  <div class="col-md-6 form-group1">
                                      <label class="control-label">Email 2</label>
                                      <input type="text" placeholder="Email" name="email2">
                                  </div>

                                </div>
                                <div class="clearfix"> </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>

                                </div>
                                <div class="clearfix"> </div>
                            </form>

                            <!---->
                        </div>

                        <div class="validation-system">

                            <div class="validation-form">
                                <!---->

                                <form action="{{ route('config.redes') }}" method="get" name="form3">
                                    {!! csrf_field() !!}
                                  <label>REDES E INTERNET</label>
                                    <div class="vali-form">
                                        <div class="col-md-6 form-group1">
                                            <label class="control-label">Facebook</label>
                                            <input type="text" placeholder="Facebook" name="facebook">
                                        </div>
                                        <div class="col-md-6 form-group1">
                                            <label class="control-label">Twitter</label>
                                            <input type="text" placeholder="Twitter" name="twitter">
                                        </div>

                                    </div>

                                    <div class="vali-form">
                                      <div class="col-md-6 form-group1">
                                          <label class="control-label">Instagram</label>
                                          <input type="text" placeholder="Instagram" name="instagram">
                                      </div>
                                      <div class="col-md-6 form-group1">
                                          <label class="control-label">Youtube</label>
                                          <input type="text" placeholder="Youtube" name="youtube">
                                      </div>

                                    </div>

                                    <div class="clearfix"> </div>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <button type="submit" class="btn btn-primary">Actualizar</button>

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

@endsection
