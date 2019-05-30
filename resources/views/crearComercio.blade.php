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
                <h3>CREAR NUEVO COMERCIO</h3>
                <!--grid-->
                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('crearComercio') }}" enctype="multipart/form-data" method="POST" name="form1" id="form1">
                            {!! csrf_field() !!}
                            <label>INFORMACIÓN DEL ESTABLECIMIENTO</label>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Tipo de Persona</label>
                                    <select for="tipoPersona" name="tipoPersona" required="">
                                        <option selected="" > </option>
                                        <option for="tipoPersona" value="Natural">Natural</option>
                                        <option for="tipoPersona" value="Jurídica">Jurídica</option>
                                        <option for="tipoPersona" value="Consorcio o Unión Temporal">Consorcio o Unión Temporal</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">CC o NIT</label>
                                    <input type="text" placeholder="CC o NIT" required="" name="nit" value="{{ old('nit') }}">
                                </div>
                            </div>
                            <div class="vali-form">    
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre del Establecimiento</label>
                                    <input type="text" placeholder="Nombre del Establecimiento" required="" name="nombreEstablecimiento" value="{{ old('nombreEstablecimiento') }}">
                                 </div>   
                               
                            
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Dirección del Notificaciones</label>
                                    <input type="text" placeholder="Dirección del Notificaciones" required="" name="dirNotificaciones" value="{{ old('dirNotificaciones') }}">
                                 </div>   
                                 
                            </div>
                       
                            <div class="vali-form"> 
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Dirección de Establecimiento</label>
                                    <input type="text" placeholder="Dirección del Establecimiento" required="" name="dirEstablecimiento" value="{{ old('dirEstablecimiento') }}">
                                </div>   
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Barrio</label>
                                    <select name="barrio" for="barrio" required="">
                                        <option selected="" value=""> </option>
                                        @foreach($barrios as $barrio)
                                        <option for="barrio" value="{{ $barrio->name }}" >{{ $barrio->name }}, {{ $barrio->upz }} </option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                                
                            </div>    
                             <div class="vali-form">
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Teléfono Fijo</label>
                                    <input type="text" placeholder="Teléfono Fijo" name="telefono" value="{{ old('telefono') }}">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Celular</label>
                                    <input type="text" placeholder="Celular" name="celular" value="{{ old('celular') }}">
                                </div>
                                
                            </div>
                            <div class="vali-form">
                            
                                <div class="col-md-6 form-group2 group-mail">
                                    <label class="control-label">Actividad Comercial</label>
                                    <select name="actComercial" for="actComercial" required="">
                                        <option selected="" value=""> </option>
                                        <option for="actComercial" value="Comercial" >Comercial </option>
                                        <option for="actComercial" value="Industrial" >Industrial </option>
                                        <option for="actComercial" value="Servicios" >Servicios </option>
                                        <option for="actComercial" value="Financiero" >Financiero </option>
                                        <option for="actComercial" value="Otro" >Otro </option>
                                        
                                    </select>
                                    

                                </div>

                                <div class="col-md-6 form-group2 group-mail">
                                    
                                    <label class="control-label">Categoría</label>
                                    <select name="categoria" for="categoria" required="">
                                        <option selected="" value=""> </option>
                                        <optgroup label="Comercial">
                                            <option for="categoria" value="Ferreterías" >Ferreterías </option>
                                            <option for="categoria" value="Droguerías" >Droguerías </option>
                                            <option for="categoria" value="Casas de Cambio" >Casas de Cambio </option>
                                            <option for="categoria" value="Restaurantes" >Restaurantes </option>
                                            <option for="categoria" value="Agencias de Viaje" >Agencias de Viaje </option>
                                            <option for="categoria" value="Moteles" >Moteles </option>
                                            <option for="categoria" value="Floristerías" >Floristerías </option>
                                            <option for="categoria" value="Inmobiliarias" >Inmobiliarias </option>
                                            <option for="categoria" value="Disfraces" >Disfraces </option>
                                            <option for="categoria" value="Librerías" >Librerías </option>
                                            <option for="categoria" value="Teléfonos" >Teléfonos </option>
                                            <option for="categoria" value="Papelerías" >Papelerías </option>
                                            <option for="categoria" value="Cades, Supercades y Rapicades" >Cades, Supercades y Rapicades </option>
                                            <option for="categoria" value="Peluquerías" >Peluquerías </option>
                                            <option for="categoria" value="Tiendas Naturistas" >Tiendas Naturistas </option>
                                            <option for="categoria" value="Restaurante a Domicilio" >Restaurante a Domicilio </option>
                                            <option for="categoria" value="Centro de belleza y estética" >Centro de belleza y estética </option>
                                            <option for="categoria" value="Supermercados" >Supermercados </option>
                                            <option for="categoria" value="Ópticas" >Ópticas </option>
                                            <option for="categoria" value="Vidrios" >Vidrios </option>
                                            <option for="categoria" value="Productos Químicos" >Productos Químicos </option>
                                            <option for="categoria" value="Repuestos para motocicletas" >Repuestos para motocicletas </option>
                                            <option for="categoria" value="Fundaciones" >Fundaciones </option>
                                            <option for="categoria" value="Materiales eléctricos" >Materiales eléctricos </option>
                                            <option for="categoria" value="Panaderías" >Panaderías </option>
                                            <option for="categoria" value="Bicicletas" >Bicicletas </option>
                                            <option for="categoria" value="Agencias de publicidad" >Agencias de publicidad </option>
                                            <option for="categoria" value="Instrumentos musicales" >Instrumentos musicales </option>
                                            <option for="categoria" value="Pastelería" >Pastelería </option>
                                            <option for="categoria" value="Maderas" >Maderas </option>
                                            <option for="categoria" value="Constructoras" >Constructoras </option>
                                            <option for="categoria" value="Llantas" >Llantas </option>
                                            <option for="categoria" value="Dotaciones para empresas" >Dotaciones para empresas </option>
                                            <option for="categoria" value="Comidas rápidas" >Comidas rápidas </option>
                                            <option for="categoria" value="Viveros" >Viveros </option>
                                            <option for="categoria" value="Asaderos" >Asaderos </option>
                                            <option for="categoria" value="Artículos ortopédicos" >Artículos ortopédicos </option>
                                            <option for="categoria" value="Artículos para adultos" >Artículos para adultos </option>
                                            <option for="categoria" value="Reciclajes" >Reciclajes </option>
                                            <option for="categoria" value="Estampados" >Estampados </option>
                                            <option for="categoria" value="Radiodifusoras" >Radiodifusoras </option>
                                            <option for="categoria" value="Farmacias" >Farmacias </option>
                                        </optgroup>
                                        <optgroup label="Industrial">
                                            <option for="categoria" value="Plásticos" >Plásticos </option>
                                            <option for="categoria" value="Telas" >Telas </option>
                                            <option for="categoria" value="Repuestos automotrices" >Repuestos automotrices </option>
                                            <option for="categoria" value="Confecciones" >Confecciones </option>
                                            <option for="categoria" value="Uniformes" >Uniformes </option>
                                            <option for="categoria" value="Aire acondicionado" >Aire acondicionado </option>
                                        </optgroup>
                                        <optgroup label="Servicios">
                                            <option for="categoria" value="Hoteles" >Hoteles </option>
                                            <option for="categoria" value="Transporte terrestre de pasajeros" >Transporte terrestre de pasajeros </option>
                                            <option for="categoria" value="Fondo de pensiones y cesantías" >Fondo de pensiones y cesantías </option>
                                            <option for="categoria" value="Clínicas veterinarias" >Clínicas veterinarias </option>
                                            <option for="categoria" value="Taxis" >Taxis </option>
                                            <option for="categoria" value="Agencias de empleo" >Agencias de empleo </option>
                                            <option for="categoria" value="Laboratorio Clínico" >Laboratorio Clínico </option>
                                            <option for="categoria" value="Notarías" >Notarías </option>
                                            <option for="categoria" value="Salones para recepciones" >Salones para recepciones </option>
                                            <option for="categoria" value="Clínicas" >Clínicas </option>
                                            <option for="categoria" value="Escuelas de fútbol" >Escuelas de fútbol </option>
                                            <option for="categoria" value="Iglesias y parroquias católicas" >Iglesias y parroquias católicas </option>
                                            <option for="categoria" value="Iglesias" >Iglesias </option>
                                            <option for="categoria" value="Centros de rehabilitación" >Centros de rehabilitación </option>
                                            <option for="categoria" value="Empleos temporales" >Empleos temporales </option>
                                            <option for="categoria" value="Ecografías" >Ecografías </option>
                                            <option for="categoria" value="Abogados" >Abogados </option>
                                            <option for="categoria" value="Terminales de transporte terrestre" >Terminales de transporte terrestre </option>
                                            <option for="categoria" value="Cooperativas" >Cooperativas </option>
                                            <option for="categoria" value="Salud ocupacional" >Salud ocupacional </option>
                                            <option for="categoria" value="Laboratorios farmacéuticos" >Laboratorios farmacéuticos </option>
                                            <option for="categoria" value="Mariachis" >Mariachis </option>
                                            <option for="categoria" value="Clínicas odontológicas" >Clínicas odontológicas </option>
                                            <option for="categoria" value="Alquiler de lavadoras" >Alquiler de lavadoras </option>
                                            <option for="categoria" value="Alquiler de ropa" >Alquiler de ropa </option>
                                            <option for="categoria" value="Transporte puerta a puerta" >Transporte puerta a puerta </option>
                                            <option for="categoria" value="Centros médicos" >Centros médicos </option>
                                            <option for="categoria" value="Spa" >Spa </option>
                                            <option for="categoria" value="Hospitales" >Hospitales </option>
                                            <option for="categoria" value="Trasteos" >Trasteos </option>
                                            <option for="categoria" value="Estaciones" >Estaciones </option>
                                            <option for="categoria" value="Transporte terrestre de carga" >Transporte terrestre de carga </option>
                                            <option for="categoria" value="Transporte especial de pasajeros" >Transporte especial de pasajeros </option>
                                            <option for="categoria" value="Hogares geriátricos" >Hogares geriátricos </option>
                                            <option for="categoria" value="Comisarías de familia" >Comisarías de familia </option>
                                            <option for="categoria" value="Cajas de compensación familiar" >Cajas de compensación familiar </option>
                                            <option for="categoria" value="Iglesias cristianas" >Iglesias cristianas </option>
                                            <option for="categoria" value="Guarderías infantiles" >Guarderías infantiles </option>
                                            <option for="categoria" value="Servicios de formación" >Servicios de formación </option>
                                        </optgroup>
                                        <optgroup label="Financiero">
                                            <option for="categoria" value="Bancos" >Bancos </option>        
                                        </optgroup>
                                        <optgroup label="Otros">
                                            <option for="categoria" value="Otros" >Otros </option>
                                        </optgroup>
                                    </select>

                                </div>
                                
                            </div>
                            <div class="vali-form"> 
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Se encuentra sobre una vía principal o de alto tránsito?</label>
                                    <select name="viaPrincipal" for="viaPrincipal" required="">
                                        <option selected="" value=""> </option>
                                        <option for="viaPrincipal" value="Si" >Si </option>
                                        <option for="viaPrincipal" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿El dueño trabaja en el establecimiento?</label>
                                    <select name="duenoTrabaja" for="duenoTrabaja" required="">
                                        <option selected="" value=""> </option>
                                        <option for="duenoTrabaja" value="Si" >Si </option>
                                        <option for="duenoTrabaja" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="clearfix"> </div>
                            </div>   
                            <div class="vali-form">
                                <label for="checkbox" class="col-sm-2 control-label">Días de atención al público</label>
                                    <div class="col-sm-8">
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="lunes"> Lunes</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="martes"> Martes</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="miercoles"> Miércoles</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="jueves"> Jueves</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="viernes"> Viernes</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="sabado"> Sábado</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="domingo"> Domingo</label></div>
                                    </div>
                                    <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form">
                                  <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Horario de atención al público</label>
                                    <input type="text" placeholder="Horario de atención al público" name="horario" value="{{ old('horario') }}" required="">
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Tipo de local</label>
                                    <select name="tipoLocal" for="tipoLocal" required="">
                                        <option selected="" value=""> </option>
                                        <option for="tipoLocal" value="Local en Arriendo" >Local en Arriendo </option>
                                        <option for="tipoLocal" value="Local Propio" >Local Propio </option>
                                        <option for="tipoLocal" value="Móvil" >Móvil </option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Cantidad de trabajadores</label>
                                    <input type="text" placeholder="Cantidad de trabajadores" name="cantTrabajadores" value="{{ old('cantTrabajadores') }}" required="">
                                </div>
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Área total del establecimiento (metros cuadrados)</label>
                                    <input type="text" placeholder="Área total del establecimiento" name="areaLocal" value="{{ old('areaLocal') }}" required="">
                                </div>
                                
                            </div>
                            <div class="vali-form">
                                  <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Ventas promedio mensuales</label>
                                    <input type="text" placeholder="Ventas promedio mensuales" name="ventasPromedio" value="{{ old('ventasPromedio') }}" required="">
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Tiene instalados avisos y tableros?</label>
                                    <select name="avisos" for="avisos" required="">
                                        <option selected="" value=""> </option>
                                        <option for="avisos" value="Si" >Si </option>
                                        <option for="avisos" value="No" >No </option>
                                       
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Fecha de Inicio de Actividades</label>
                                    <input type="date" name="inicioActividades" required="">
                                </div>
                                <div class="col-md-6 form-group2">
                                 <label class="control-label">Consumo de Energía</label>
                                    <select name="consumoEnergia" for="consumoEnergia" required="">
                                        <option selected="" value=""> </option>
                                        <option for="consumoEnergia" value="150kw" >Hasta 150 KW </option>
                                        <option for="consumoEnergia" value="151-350kw" >Entre 151 y 350 KW </option>
                                        <option for="consumoEnergia" value="351+" >Más de 350 KW </option>
                                        
                                        
                                    </select>
                                </div>    
                                <div class="clearfix"> </div>
                            </div>
                            <label>DATOS BÁSICOS DEL PROPIETARIO</label>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre</label>
                                    <input type="text" placeholder="Nombre" required="" name="nombreRepresentante" value="{{ old('nombreRepresentante') }}">
                                 </div>   
                               
                            
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Cédula de Ciudadania</label>
                                    <input type="text" placeholder="Cédula de Ciudadania" required="" name="cc" value="{{ old('cc') }}">
                                 </div>   
                                
                            </div>
                            <div class="vali-form"> 
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Dirección de Notificaciones</label>
                                    <input type="text" placeholder="Dirección del Notificaciones" required="" name="dirNotificacionRep" value="{{ old('dirNotificacionRep') }}">
                                </div>   
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Nivel de Estudios</label>
                                    <select name="nivelEstudio" for="nivelEstudio" required="">
                                        <option selected="" value=""> </option>
                                        <option for="nivelEstudio" value="Primaria" >Primaria </option>
                                        <option for="nivelEstudio" value="Secundaria" >Secundaria </option>
                                        <option for="nivelEstudio" value="Técnico" >Técnico </option>
                                        <option for="nivelEstudio" value="Tecnólogo" >Tecnólogo </option>
                                        <option for="nivelEstudio" value="Profesional" >Profesional </option>
                                        <option for="nivelEstudio" value="Especialización" >Especialización </option>
                                        <option for="nivelEstudio" value="Maestría" >Maestría </option>
                                    </select>
                                </div>
                                
                            </div> 
                            <div class="vali-form">    
                                <div class="col-md-4 form-group1">
                                    <label class="control-label">Teléfono fijo</label>
                                    <input type="text" placeholder="Teléfono fijo" required="" name="telRepresentante" value="{{ old('telRepresentante') }}">
                                 </div>   
                               
                            
                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Celular</label>
                                    <input type="text" placeholder="Celular" required="" name="celRepresentante" value="{{ old('celRepresentante') }}">
                                 </div>   
                                 <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Whatsapp</label>
                                    <input type="text" placeholder="Whatsapp" required="" name="waRepresentante" value="{{ old('waRepresentante') }}">
                                 </div>   
                                 <div class="clearfix"> </div>
                            </div>   
                            <label>REDES SOCIALES E INTERNET</label>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Facebook</label>
                                    <input type="text" placeholder="Facebook"  name="facebook" value="{{ old('facebook') }}">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Twitter</label>
                                    <input type="text" placeholder="Twitter" name="twitter" value="{{ old('twitter') }}">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form vali-form1">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Instagram</label>
                                    <input type="text" placeholder="Instagram" name="instagram" value="{{ old('instagram') }}">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Website</label>
                                    <input type="text" placeholder="URL" name="url" value="{{ old('url') }}">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form vali-form1">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Latitud</label>
                                    <input type="text" placeholder="Latitud" name="lat" required="" value="{{ old('lat') }}">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Longitud</label>
                                    <input type="text" placeholder="Longitud" name="long" required="" value="{{ old('long') }}">
                                </div>
                                 
                                <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form vali-form1">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Email</label>
                                    <input type="text" placeholder="Email" name="email" required="" value="{{ old('email') }}">
                                </div>
                                <div class="clearfix"> </div>    
                            </div>
                            <label>DESCRIPCIÓN DEL ESTABLECIMIENTO</label>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Descripción del establecimiento</label>
                                    <div class="col-sm-8"><textarea name="descripcion" id="txtarea1" cols="50" rows="4" class="form-control1" required=""></textarea></div>
                                </div>
                                <div class="vali-form form-last">
                                    <label for="logo">Imagen o logo</label>
                                    <input type="file" id="logo" name="logo" required="">
                                    <p class="help-block">Adjunte una imagen o logo</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <label>ESTADO DEL CONTRIBUYENTE</label>
                            <div class="vali-form"> 
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Se encuentra inscrito en el registro único tributario RUT?</label>
                                    <select name="rut" for="rut" required="">
                                        <option selected="" value=""> </option>
                                        <option for="rut" value="Si" >Si </option>
                                        <option for="rut" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Se Encuentra Inscrito En El Registro Mercantil De Cámara De Comercio?</label>
                                    <select name="camaraComercio" for="camaraComercio" required="">
                                        <option selected="" value=""> </option>
                                        <option for="camaraComercio" value="Si" >Si </option>
                                        <option for="camaraComercio" value="No" >No </option>
                                    </select>
                                </div>
                               
                            </div> 
                            <div class="vali-form"> 
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Se encuentra inscrito en el Registro Tributario de Industria y Comercio?</label>
                                    <select name="rtiyc" for="rtiyc" required="">
                                        <option selected="" value=""> </option>
                                        <option for="rtiyc" value="Si" >Si </option>
                                        <option for="rtiyc" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Certificado de Uso de Suelos?</label>
                                    <select name="usoSuelos" for="usoSuelos" required="">
                                        <option selected="" value=""> </option>
                                        <option for="usoSuelos" value="Si" >Si </option>
                                        <option for="usoSuelos" value="No" >No </option>
                                    </select>
                                </div>
                                
                            </div>     
                            <div class="vali-form"> 
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Declaración Impuesto Industria y Comercio y complementarios</label>
                                    <select name="diiyc" for="diiyc" required="">
                                        <option selected="" value=""> </option>
                                        <option for="diiyc" value="Si" >Si </option>
                                        <option for="diiyc" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Se Encuentra Inscrito En El Registro De Sayco Y Acinpro?</label>
                                    <select name="saycoAcinpro" for="saycoAcinpro" required="">
                                        <option selected="" value=""> </option>
                                        <option for="saycoAcinpro" value="Si" >Si </option>
                                        <option for="saycoAcinpro" value="No" >No </option>
                                    </select>
                                </div>
                                
                            </div>   
                            <div class="vali-form"> 
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Cuenta Con Revisión De Sanidad Vigente?</label>
                                    <select name="sanidad" for="sanidad" required="">
                                        <option selected="" value=""> </option>
                                        <option for="sanidad" value="Si" >Si </option>
                                        <option for="sanidad" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Cuenta Con Certificación De Manejo De Alimentos Vigente?</label>
                                    <select name="manejoAlimentos" for="manejoAlimentos" required="">
                                        <option selected="" value=""> </option>
                                        <option for="manejoAlimentos" value="Si" >Si </option>
                                        <option for="manejoAlimentos" value="No" >No </option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="vali-form"> 
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Cuenta Con Certificación De Seguridad De Bomberos?</label>
                                    <select name="bomberos" for="bomberos" required="">
                                        <option selected="" value=""> </option>
                                        <option for="bomberos" value="Si" >Si </option>
                                        <option for="bomberos" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Lleva Control Mediante Libro De Diario?</label>
                                    <select name="libroDiario" for="libroDiario" required="">
                                        <option selected="" value=""> </option>
                                        <option for="libroDiario" value="Si" >Si </option>
                                        <option for="libroDiario" value="No" >No </option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="vali-form"> 
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Contribuye Con El Impuesto De Industria Y Comercio Municipal?</label>
                                    <select name="ciyc" for="ciyc" required="">
                                        <option selected="" value=""> </option>
                                        <option for="ciyc" value="Si" >Si </option>
                                        <option for="ciyc" value="No" >No </option>
                                    </select>
                                </div>
                                
                                <div class="clearfix"> </div>
                            </div>

                            <label>GESTIÓN DE MERCADO</label>

                            <div class="vali-form"> 
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Conoce que es la economía digital?</label>
                                    <select name="economiaDigital" for="economiaDigital" required="">
                                        <option selected="" value=""> </option>
                                        <option for="economiaDigital" value="Si" >Si </option>
                                        <option for="economiaDigital" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Considera que el Internet puede ayudarle a mejorar sus ventas?</label>
                                    <select name="internetAyuda" for="internetAyuda" required="">
                                        <option selected="" value=""> </option>
                                        <option for="internetAyuda" value="Si" >Si </option>
                                        <option for="internetAyuda" value="No" >No </option>
                                    </select>
                                </div>
                                
                            </div>

                            <div class="vali-form"> 
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Su empresa cuenta con un equipo de ventas?</label>
                                    <select name="equipoVentas" for="equipoVentas" required="">
                                        <option selected="" value=""> </option>
                                        <option for="equipoVentas" value="Si" >Si </option>
                                        <option for="equipoVentas" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Su empresa maneja un software en el que se realice la contabilidad, facturación, compras o gastos, nomina, inventario, marketing, flujo de caja, etc?</label>

                                    <select name="manejaSoftware" for="manejaSoftware" required="">
                                        <option selected="" value=""> </option>
                                        <option for="manejaSoftware" value="Si" >Si </option>
                                        <option for="manejaSoftware" value="No" >No </option>
                                    </select>
                                </div>
                               <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form">
                                <label for="checkbox" class="col-sm-12 control-label">Medios por los cuales realizan publicidad o difusión de sus productos o servicios.</label>
                                <div class="clearfix"> </div>
                                    <div class="col-sm-12">
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="radio"> Radio</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="volantes"> Carteleras, Volantes, Afiches</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="web"> Sitio Web</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="mFacebook"> Facebook</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="mTwitter"> Twitter</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="mInstagram"> Instagram</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="mYoutube"> Youtube</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="mWhatsapp"> Whatsapp</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="ferias"> Ferias o eventos</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="noHace"> No hace publicidad</label></div>
                                    </div>
                                    <div class="clearfix"> </div>
                            </div>
                             <div class="vali-form">
                                <label for="checkbox" class="col-sm-12 control-label">De las siguientes herramientas, ¿cuales utiliza?.</label>
                                <div class="clearfix"> </div>
                                    <div class="col-sm-12">
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="Email"> Email</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="facebookD"> Facebook</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="twitterD"> Twitter</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="instagramD"> Instagram</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="youtubeD"> Youtube</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="whatsappD"> Whatsapp</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" name="otroD"> Otro</label></div>
                                    </div>
                                    <div class="clearfix"> </div>
                            </div>
                           <div class="vali-form"> 
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Considera en un plazo de 6 meses ampliar su negocio?</label>
                                    <select name="ampliarNegocio" for="ampliarNegocio" required="">
                                        <option selected="" value=""> </option>
                                        <option for="ampliarNegocio" value="Si" >Si </option>
                                        <option for="ampliarNegocio" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Le interesaría hacer publicidad de su negocio por medio de Internet y Redes Sociales?</label>
                                    <select name="interesaPublicidadRedes" for="interesaPublicidadRedes" required="">
                                        <option selected="" value=""> </option>
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
                                    <select name="usaInternet" for="usaInternet" required="">
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
                                    <select name="usaEmail" for="usaEmail" required="">
                                        <option selected="" value=""> </option>
                                        <option for="usaEmail" value="Nunca" >Nunca </option>
                                        <option for="usaEmail" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaEmail" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaEmail" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaEmail" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaEmail" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                 
                            </div>

                            <div class="vali-form"> 
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Dropbox, Drive</label>
                                    <select name="usaDrive" for="usaDrive" required="">
                                        <option selected="" value=""> </option>
                                        <option for="usaDrive" value="Nunca" >Nunca </option>
                                        <option for="usaDrive" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaDrive" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaDrive" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaDrive" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaDrive" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Facebook</label>
                                    <select name="usaFacebook" for="usaFacebook" required="">
                                        <option selected="" value=""> </option>
                                        <option for="usaFacebook" value="Nunca" >Nunca </option>
                                        <option for="usaFacebook" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaFacebook" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaFacebook" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaFacebook" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaFacebook" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                  
                            </div>
                            <div class="vali-form"> 
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Twitter</label>
                                    <select name="usaTwitter" for="usaTwitter" required="">
                                        <option selected="" value=""> </option>
                                        <option for="usaTwitter" value="Nunca" >Nunca </option>
                                        <option for="usaTwitter" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaTwitter" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaTwitter" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaTwitter" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaTwitter" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Instagram</label>
                                    <select name="usaInstagram" for="usaInstagram" required="">
                                        <option selected="" value=""> </option>
                                        <option for="usaInstagram" value="Nunca" >Nunca </option>
                                        <option for="usaInstagram" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaInstagram" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaInstagram" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaInstagram" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaInstagram" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                  
                            </div>

                            <div class="vali-form"> 
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Youtube</label>
                                    <select name="usaYoutube" for="usaYoutube" required="">
                                        <option selected="" value=""> </option>
                                        <option for="usaYoutube" value="Nunca" >Nunca </option>
                                        <option for="usaYoutube" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaYoutube" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaYoutube" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaYoutube" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaYoutube" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Whatsapp</label>
                                    <select name="usaWhatsapp" for="usaWhatsapp" required="">
                                        <option selected="" value=""> </option>
                                        <option for="usaWhatsapp" value="Nunca" >Nunca </option>
                                        <option for="usaWhatsapp" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaWhatsapp" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaWhatsapp" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaWhatsapp" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaWhatsapp" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                  
                            </div>
                            <div class="vali-form"> 
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Algún programa de retoque de imagenes/videos</label>
                                    <select name="usaEditores" for="usaEditores" required="">
                                        <option selected="" value=""> </option>
                                        <option for="usaEditores" value="Nunca" >Nunca </option>
                                        <option for="usaEditores" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaEditores" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaEditores" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaEditores" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaEditores" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Word/Excel</label>
                                    <select name="usaWord" for="usaWord" required="">
                                        <option selected="" value=""> </option>
                                        <option for="usaWord" value="Nunca" >Nunca </option>
                                        <option for="usaWord" value="Una vez al mes" >Una vez al mes </option>
                                        <option for="usaWord" value="Una vez cada 15 días" >Una vez cada 15 días </option>
                                        <option for="usaWord" value="Una vez a la semana" >Una vez a la semana </option>
                                        <option for="usaWord" value="Dos veces a la semana" >Dos veces a la semana </option>
                                        <option for="usaWord" value="Todos los días" >Todos los días </option>
                                    </select>
                                </div>
                                   <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Cuanto invierte ud mensualmente en publicidad?</label>
                                    <select name="inversionPublicidad" for="inversionPublicidad" required="">
                                        <option selected="" value=""> </option>
                                        <option for="inversionPublicidad" value="0" >$ 0 </option>
                                        <option for="inversionPublicidad" value="50.000" >$ 50.000 </option>
                                        <option for="inversionPublicidad" value="100.000" >$ 100.000 </option>
                                        <option for="inversionPublicidad" value="100.000 +" >$ 100.000 + </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Etiquetas</label>
                                    <input type="text" placeholder="Etiquetas" required="" name="etiquetas" value="{{ old('etiquetas') }}">
                                </div>
                                 <div class="clearfix"> </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Registrar</button>
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
