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
                <h3>REGISTRAR GESTIÓN DE MERCADO</h3>
                <!--grid-->
                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('gestion.store') }}" enctype="multipart/form-data" method="POST" name="form1" id="form1">
                            {!! csrf_field() !!}

                            <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                            <input type="hidden" name="comercio_id" value="{{$comercio->id}}">

                            <label style="color:red;">GESTIÓN DE MERCADO</label>

                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Conoce que es la economía digital?</label>
                                    <select name="economiaDigital" for="economiaDigital" >
                                        <option selected="" value="{{$comercio->economiaDigital}}">{{$comercio->economiaDigital}} </option>
                                        <option for="economiaDigital" value="Si" >Si </option>
                                        <option for="economiaDigital" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Considera que el Internet puede ayudarle a mejorar sus ventas?</label>
                                    <select name="internetAyuda" for="internetAyuda">
                                        <option selected="" value="{{$comercio->internetAyuda}}">{{$comercio->internetAyuda}} </option>
                                        <option for="internetAyuda" value="Si" >Si </option>
                                        <option for="internetAyuda" value="No" >No </option>
                                    </select>
                                </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Su empresa cuenta con un equipo de ventas?</label>
                                    <select name="equipoVentas" for="equipoVentas">
                                        <option selected="" value="{{$comercio->equipoVentas}}">{{$comercio->equipoVentas}} </option>
                                        <option for="equipoVentas" value="Si" >Si </option>
                                        <option for="equipoVentas" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Su empresa maneja un software en el que se realice la contabilidad, facturación, compras o gastos, nomina, inventario, marketing, flujo de caja, etc?</label>

                                    <select name="manejaSoftware" for="manejaSoftware" >
                                        <option selected="" value="{{$comercio->manejaSoftware}}">{{$comercio->manejaSoftware}} </option>
                                        <option for="manejaSoftware" value="Si" >Si </option>
                                        <option for="manejaSoftware" value="Si" >No </option>
                                    </select>
                                </div>
                               <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form">
                                <label for="checkbox" class="col-sm-12 control-label">Medios por los cuales realizan publicidad o difusión de sus productos o servicios.</label>
                                <div class="clearfix"> </div>
                                    <div class="col-sm-12">
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="radio" {{ $comercio->radio ? 'checked':'1' }}> Radio</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="volantes" {{ $comercio->volantes ? 'checked':'1' }}> Carteleras, Volantes, Afiches</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="web" {{ $comercio->web ? 'checked':'1' }}> Sitio Web</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="mFacebook" {{ $comercio->mFacebook ? 'checked':'1' }}> Facebook</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="mTwitter" {{ $comercio->mTwitter ? 'checked':'1' }}> Twitter</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="mInstagram" {{ $comercio->mInstagram ? 'checked':'1' }}> Instagram</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="mYoutube" {{ $comercio->mYoutube ? 'checked':'1' }}> Youtube</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="mWhatsapp" {{ $comercio->mWhatsapp ? 'checked':'1' }}> Whatsapp</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="ferias" {{ $comercio->ferias ? 'checked':'1' }}> Ferias o eventos</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="noHace" {{ $comercio->noHace ? 'checked':'1' }}> No hace publicidad</label></div>
                                    </div>
                                    <div class="clearfix"> </div>
                            </div>
                             <div class="vali-form">
                                <label for="checkbox" class="col-sm-12 control-label">De las siguientes herramientas, ¿cuales utiliza?.</label>
                                <div class="clearfix"> </div>
                                    <div class="col-sm-12">
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="Email" {{ $comercio->Email ? 'checked':'1' }}> Email</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="facebookD" {{ $comercio->facebookD ? 'checked':'1' }}> Facebook</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="twitterD" {{ $comercio->twitterD ? 'checked':'1' }}> Twitter</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="instagramD" {{ $comercio->instagramD ? 'checked':'1' }}> Instagram</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="youtubeD" {{ $comercio->youtubeD ? 'checked':'1' }}> Youtube</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="whatsappD" {{ $comercio->whatsappD ? 'checked':'1' }}> Whatsapp</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="otroD" {{ $comercio->otroD ? 'checked':'1' }}> Otro</label></div>
                                    </div>
                                    <div class="clearfix"> </div>
                            </div>
                           <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Considera en un plazo de 6 meses ampliar su negocio?</label>
                                    <select name="ampliarNegocio" for="ampliarNegocio" >
                                        <option selected="" value="{{$comercio->ampliarNegocio}}">{{$comercio->ampliarNegocio}} </option>
                                        <option for="ampliarNegocio" value="Si" >Si </option>
                                        <option for="ampliarNegocio" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Le interesaría hacer publicidad de su negocio por medio de Internet y Redes Sociales?</label>
                                    <select name="interesaPublicidadRedes" for="interesaPublicidadRedes" >
                                        <option selected="" value="{{$comercio->interesaPublicidadRedes}}">{{$comercio->interesaPublicidadRedes}} </option>
                                        <option for="interesaPublicidadRedes" value="Si" >Si </option>
                                        <option for="interesaPublicidadRedes" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <label>¿Con qué frecuencia usa estas herramientas?</label>
                            <div class="clearfix"> </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Internet</label>
                                    <select name="usaInternet" for="usaInternet">
                                        <option selected="" value=""> </option>
                                        <option for="usaInternet" value="Nunca" >Nunca </option>
                                        <option for="usaInternet" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaInternet" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaInternet" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaInternet" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaInternet" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Correo electrónico</label>
                                    <select name="usaEmail" for="usaEmail" >
                                        <option selected="" value=""> </option>
                                        <option for="usaInternet" value="Nunca" >Nunca </option>
                                        <option for="usaInternet" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaInternet" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaInternet" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaInternet" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaInternet" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Dropbox, Drive</label>
                                    <select name="usaDrive" for="usaDrive">
                                        <option selected="" value=""> </option>
                                        <option for="usaInternet" value="Nunca" >Nunca </option>
                                        <option for="usaInternet" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaInternet" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaInternet" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaInternet" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaInternet" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Facebook</label>
                                    <select name="usaFacebook" for="usaFacebook" >
                                        <option selected="" value=""> </option>
                                        <option for="usaInternet" value="Nunca" >Nunca </option>
                                        <option for="usaInternet" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaInternet" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaInternet" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaInternet" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaInternet" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Twitter</label>
                                    <select name="usaTwitter" for="usaTwitter" >
                                        <option selected="" value=""> </option>
                                        <option for="usaInternet" value="Nunca" >Nunca </option>
                                        <option for="usaInternet" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaInternet" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaInternet" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaInternet" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaInternet" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Instagram</label>
                                    <select name="usaInstagram" for="usaInstagram" >
                                        <option selected="" value=""> </option>
                                        <option for="usaInternet" value="Nunca" >Nunca </option>
                                        <option for="usaInternet" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaInternet" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaInternet" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaInternet" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaInternet" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Youtube</label>
                                    <select name="usaYoutube" for="usaYoutube" >
                                        <option selected="" value=""> </option>
                                        <option for="usaInternet" value="Nunca" >Nunca </option>
                                        <option for="usaInternet" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaInternet" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaInternet" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaInternet" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaInternet" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Whatsapp</label>
                                    <select name="usaWhatsapp" for="usaWhatsapp" >
                                        <option selected="" value=""> </option>
                                        <option for="usaInternet" value="Nunca" >Nunca </option>
                                        <option for="usaInternet" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaInternet" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaInternet" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaInternet" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaInternet" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Algún programa de retoque de imagenes/videos</label>
                                    <select name="usaEditores" for="usaEditores" >
                                        <option selected="" value=""> </option>
                                        <option for="usaInternet" value="Nunca" >Nunca </option>
                                        <option for="usaInternet" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaInternet" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaInternet" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaInternet" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaInternet" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Word/Excel</label>
                                    <select name="usaWord" for="usaWord" >
                                        <option selected="" value=""> </option>
                                        <option for="usaInternet" value="Nunca" >Nunca </option>
                                        <option for="usaInternet" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaInternet" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaInternet" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaInternet" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaInternet" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                   <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Cuanto invierte ud mensualmente en publicidad?</label>
                                    <select name="inversionPublicidad" for="inversionPublicidad" >
                                        <option selected="" value=""> </option>
                                        <option for="inversionPublicidad" value="0" >$ 0 </option>
                                        <option for="inversionPublicidad" value="$50.000" >$ 50.000 </option>
                                        <option for="inversionPublicidad" value="$100.000" >$ 100.000 </option>
                                        <option for="inversionPublicidad" value="$100.000 +" >$ 100.000 + </option>
                                    </select>
                                </div>
                                 <div class="clearfix"> </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <a href="{{route('comercio.show', $comercio->id)}}" class="btn btn-default">Volver</a>
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
