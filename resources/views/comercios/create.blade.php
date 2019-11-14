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

                        <form action="{{ route('comercio.store') }}" enctype="multipart/form-data" method="POST" name="form1" id="form1">
                            {!! csrf_field() !!}
                            <label style="color:red;">INFORMACIÓN DEL ESTABLECIMIENTO</label>
                            <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                            <input type="hidden" name="pqr" value="0">
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Tipo de Persona<span class="text-danger">*</span></label>
                                    <select for="tipoPersona" name="tipoPersona" required="">
                                        <option selected="" value="">SELECCIONE UNA OPCIÓN </option>
                                        <option for="tipoPersona" value="Natural">Natural</option>
                                        <option for="tipoPersona" value="Jurídica">Jurídica</option>
                                        <option for="tipoPersona" value="Consorcio o Unión Temporal">Consorcio o Unión Temporal</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">CC o NIT<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="CC o NIT" required="" name="nit" value="{{ old('nit') }}">
                                </div>
                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre del Establecimiento<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Nombre del Establecimiento" required="" name="nombreEstablecimiento" value="{{ old('nombreEstablecimiento') }}">
                                 </div>


                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Dirección del Notificaciones</label>
                                    <input type="text" placeholder="Dirección del Notificaciones"  name="dirNotificaciones" value="{{ old('dirNotificaciones') }}">
                                 </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Dirección de Establecimiento<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Dirección del Establecimiento" required="" name="dirEstablecimiento" value="{{ old('dirEstablecimiento') }}">
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Barrio<span class="text-danger">*</span></label>
                                    <select name="barrio" for="barrio" required>
                                        <option selected="" value="">SELECCIONE UN BARRIO </option>

                                        @foreach($barrios as $barrio)
                                        <option for="barrio" value="{{ $barrio->id }}" >{{ $barrio->name }}, {{ $barrio->upz }} </option>
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
                                    <label class="control-label">Actividad Comercial<span class="text-danger">*</span></label>
                                    <select name="actComercial" for="actComercial" required="" id="actComercial" onchange="cargarCategorias();">
                                        <option selected="" value="">SELECCIONE UNA OPCIÓN </option>


                                    </select>


                                </div>

                                <div class="col-md-6 form-group2 group-mail">

                                    <label class="control-label">Categoría<span class="text-danger">*</span></label>
                                    <select name="categoria" for="categoria" required="" id="categoria">
                                        <option selected="" value=""> SELECCIONE UNA CATEGORÍA </option>
                                    </select>

                                </div>
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Email<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Email" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Etiquetas<span class="text-danger">*</span></label>
                                    <input type="text" required="" name="etiquetas" id="tags" class="form-control">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <label style="color:red;">DESCRIPCIÓN DEL ESTABLECIMIENTO</label>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Descripción del establecimiento<span class="text-danger">*</span></label>
                                    <p class="help-block">máximo 50 letras</p>
                                    <div class="col-md-12" class="form-control"><textarea name="descripcion" id="txtarea1" cols="180" rows="3" class="form-control"></textarea></div>

                                </div>
                                <div class="vali-form form-last">
                                    <label for="logo">Imagen o logo<span class="text-danger">*</span></label>
                                    <input type="file" id="logo" name="logo" required="">
                                    <p class="help-block">tamaño mínimo recomendado 300 x 300 px</p>
                                    <p class="help-block">Formatos requeridos: jpeg, png</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                          </div>
                        </div>
                        <div class="validation-system">
                          <div class="validation-form">

 <!-- ESTADO DEL CONTRIBUYENTE -->

                            <label style="color:red;">ESTADO DEL CONTRIBUYENTE</label>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2 group-mail">
                                  <label for="">Impuesto en que se encuentra al día</label>
                                  <select class="" name="impuesto_id1">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>

                                  <input type="checkbox" name="imp" value="" onclick="CheckOtros('impuesto2', this)" id="imp">
                                  <label for="imp">Añadir un nuevo impuesto</label>
                                </div>
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="impuesto2">
                                  <label for="">Impuesto en que se encuentra al día</label>
                                  <select class="" name="impuesto_id2">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>

                                  <input type="checkbox" name="imp2" value="" onclick="CheckOtros('impuesto3', this)" id="imp2">
                                  <label for="imp2">Añadir un nuevo impuesto</label>
                                </div>
                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="impuesto3">
                                  <label for="">Impuesto en que se encuentra al día</label>
                                  <select class="" name="impuesto_id3">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>

                                  <input type="checkbox" name="imp3" value="" onclick="CheckOtros('impuesto4', this)" id="imp3">
                                  <label for="imp3">Añadir un nuevo impuesto</label>
                                </div>
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="impuesto4">
                                  <label for="">Impuesto en que se encuentra al día</label>
                                  <select class="" name="impuesto_id4">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>
                                  <input type="checkbox" name="imp4" value="" onclick="CheckOtros('impuesto5', this)" id="imp4">
                                  <label for="imp4">Añadir un nuevo impuesto</label>
                                </div>
                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="impuesto5">
                                  <label for="">Impuesto en que se encuentra al día</label>
                                  <select class="" name="impuesto_id5">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>
                                  <input type="checkbox" name="imp5" value="" onclick="CheckOtros('impuesto6', this)" id="imp5">
                                  <label for="imp5">Añadir un nuevo impuesto</label>
                                </div>
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="impuesto6">
                                  <label for="">Impuesto en que se encuentra al día</label>
                                  <select class="" name="impuesto_id6">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>
                                  <input type="checkbox" name="imp6" value="" onclick="CheckOtros('impuesto7', this)" id="imp6">
                                  <label for="imp6">Añadir un nuevo impuesto</label>
                                </div>
                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="impuesto7">
                                  <label for="">Impuesto en que se encuentra al día</label>
                                  <select class="" name="impuesto_id7">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>
                                  <input type="checkbox" name="imp7" value="" onclick="CheckOtros('impuesto8', this)" id="imp7">
                                  <label for="imp7">Añadir un nuevo impuesto</label>
                                </div>
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="impuesto8">
                                  <label for="">Impuesto en que se encuentra al día</label>
                                  <select class="" name="impuesto_id8">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>

<!-- FIN IMPUESTOS -->
<!-- REQUISITOS -->
                            <div class="clearfix">  </div>
                            <label style="color:red;">REQUISITOS</label>


                            <div class="vali-form">
                                <div class="col-md-6 form-group2 group-mail">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id1">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>

                                  <input type="checkbox" name="req" value="" onclick="CheckOtros('requisito2', this)" id="req">
                                  <label for="req">Añadir un nuevo requisito</label>
                                </div>
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="requisito2">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id2">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>

                                  <input type="checkbox" name="req2" value="" onclick="CheckOtros('requisito3', this)" id="req2">
                                  <label for="req2">Añadir un nuevo requisito</label>
                                </div>
                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="requisito3">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id3">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>

                                  <input type="checkbox" name="req3" value="" onclick="CheckOtros('requisito4', this)" id="req3">
                                  <label for="req3">Añadir un nuevo requisito</label>
                                </div>
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="requisito4">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id4">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>
                                  <input type="checkbox" name="req4" value="" onclick="CheckOtros('requisito5', this)" id="req4">
                                  <label for="req4">Añadir un nuevo requisito</label>
                                </div>
                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="requisito5">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id5">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>
                                  <input type="checkbox" name="req5" value="" onclick="CheckOtros('requisito6', this)" id="req5">
                                  <label for="req5">Añadir un nuevo requisito</label>
                                </div>
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="requisito6">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id6">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>
                                  <input type="checkbox" name="req6" value="" onclick="CheckOtros('requisito7', this)" id="req6">
                                  <label for="req6">Añadir un nuevo requisito</label>
                                </div>
                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="requisito7">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id7">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>
                                  <input type="checkbox" name="req7" value="" onclick="CheckOtros('requisito8', this)" id="req7">
                                  <label for="req7">Añadir un nuevo requisito</label>
                                </div>
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="requisito8">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id8">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
<!-- FIN REQUISITOS -->

                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <a href="{{route('comercio.index')}}" class="btn btn-danger">Volver</a>
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

<script type="text/javascript">
function cargarActividaes() {
  var array = ["Comercial", "Financiero", "Industrial", "Servicios", "Otros"];
  array.sort();
  addOptions("actComercial", array);
}


//Función para agregar opciones a un <select>.
function addOptions(domElement, array) {
  var selector = document.getElementsByName(domElement)[0];
  for (provincia in array) {
      var opcion = document.createElement("option");
      opcion.text = array[provincia];
      // Añadimos un value a los option para hacer mas facil escoger los pueblos
      opcion.value = array[provincia].toString()
      selector.add(opcion);
  }
}



function cargarCategorias() {
  // Objeto de provincias con pueblos
  var listaPueblos = {
    Comercial: ["Ferreterías", "Droguerías", "Casas de Cambio", "Restaurantes", "Agencias de viaje", "Moteles", "Floristerías", "Inmobiliarias", "Disfraces", "Librerías", "Teléfonos", "Papelerías", "Cades, Supercades y Rapicades", "Peluquerías", "Tiendas Naturistas", "Restaurantes a Domicilio", "Centro de belleza y estética",
     "Supermercados", "Ópticas", "Vidrios", "Productos Químicos", "Repuestos para motocicletas", "Fundaciones", "Materiales eléctricos", "Panaderías", "Bicicletas", "Agencias de publicidad", "Instrumentos musicales", "Pastelería", "Maderas", "Constructoras",
    "Llantas", "Dotaciones para empresas", "Comidas rápidas", "Viveros", "Asaderos", "Artículos ortopédicos", "Artículos para adultos", "Reciclajes", "Estampados", "Radiodifusoras", "Farmacias" ],
    Financiero: ["Bancos"],
    Industrial: ["Plásticos", "Telas", "Repuestos automotrices", "Confecciones", "Uniformes", "Aire acondicionado"],
    Servicios: ["Hoteles", "Transporte terrestre de pasajeros", "Fondo de pensiones y cesantías", "Clínicas veterinarias", "Taxis", "Agencias de empleo", "Laboratorio Clínico", "Notarías", "Salones para recepciones", "Clínicas",
                "Escuelas de fúlbol", "Iglesias y parroquias católicas", "Iglesias", "Empleos temporales", "Centros de rehabilitación", "Ecografías", "Abogados", "Terminales de transporte terrestre", "Cooperativas", "Salud ocupacional", "Laboratorios farmacéuticos",
                "Mariachis", "Clínicas odontológicas", "Alquiler de lavadoras", "Alquiler de ropa", "Transporte puerta a puerta", "Centros médicos", "Spa", "Hospitales", "Trasteos", "Transporte terrestre de carga", "Transporte especial de pasajeros", "Hogares geriátricos",
                "Comisarías de familia", "Cajas de compensación familiar", "Iglesias cristianas", "Guarderías infantiles", "Servicios de formación"],
    Otros: ["Otros"]
  }

  var provincias = document.getElementById('actComercial')
  var pueblos = document.getElementById('categoria')
  var provinciaSeleccionada = provincias.value

  // Se limpian los pueblos
  pueblos.innerHTML = '<option value="">SELECCIONE UNA CATEGORÍA</option>'

  if(provinciaSeleccionada !== ''){
    // Se seleccionan los pueblos y se ordenan
    provinciaSeleccionada = listaPueblos[provinciaSeleccionada]
    provinciaSeleccionada.sort()

    // Insertamos los pueblos
    provinciaSeleccionada.forEach(function(pueblo){
      let opcion = document.createElement('option')
      opcion.value = pueblo
      opcion.text = pueblo
      pueblos.add(opcion)
    });
  }

}

// Iniciar la carga de provincias solo para comprobar que funciona
cargarActividaes();
</script>

<script type="text/javascript">

function CheckOtros (it, box) {
    var vis = (box.checked) ? "block" : "none";
    document.getElementById(it).style.display = vis;
}
function CheckOcultar (it, box) {
    var vis = (box.checked) ? "none" : "block";
    document.getElementById(it).style.display = vis;
}

</script>



@endsection
