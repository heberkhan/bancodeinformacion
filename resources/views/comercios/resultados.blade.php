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

<div class="agile-grids">
				<!-- tables -->

				<div class="agile-tables">
					<div class="w3l-table-info">
                        <div class="panel-heading">
                        <h2>Listado de Comercios</h2>

                        <!-- BOTON CREAR -->
                        <div class="form-group">
                            <div class="col-md-4 form-group1">
                            <a href="{{ route('comercio.index') }}" class="btn btn-primary">Volver</a>
                            </div>
                            <!-- BUSCADOR -->
                            <!-- <div class="col-md-6 form-group1 form-last">

	                                <form method="GET" action="{{route('buscadorAdmin')}}">

	                                    <input type="text" placeholder="Buscar..." name="buscar">
	                                </form>

                        	</div> -->
                            <!-- FIN BUSCADOR -->
                            	<div class="clearfix"></div>
                            </div>
                        </div>

					    <table id="table">
						<thead>
						  <tr>
							<th>Nombre</th>
							<th>Dirección</th>
							<th>Actividad Comercial</th>
							<th>Categoría</th>
							<th>Actualizar</th>
							<th>Borrar</th>

						  </tr>
						</thead>
						<tbody>
						  @foreach($comercios as $comercio)
						  <tr>

							<td><a href="{{route('comercio.show', $comercio->id)}}">{{$comercio->nombre}}</a></td>
							<td>{{$comercio->dirEstablecimiento}}</td>
							<td>{{$comercio->actComercial}}</td>
							<td>{{$comercio->categoria}}</td>
							<td>
                <a href="{{route('comercio.edit', $comercio->id)}}" class="btn btn-primary">Editar</a>

							</td>
							<td>
                <a href="{{route('comercio.destroy', $comercio->id)}}" class="btn btn-default" onclick="return confirm('¿Seguro desea eliminar?')">Eliminar</a>

							</td>

						  </tr>
						 @endforeach
						</tbody>
					  </table>
            {!! $comercios->render() !!}
					</div>
				<!--   <code class="js">
					$('#table').basictable();
				  </code> -->



				</div>
				<!-- //tables -->
			</div>
@endsection
