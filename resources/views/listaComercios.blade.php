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
                            <a href="{{ route('crearComercioView') }}" class="btn btn-primary">Crear</a>
                            </div>
                            <!-- BUSCADOR -->
                            <div class="col-md-6 form-group1 form-last">

	                                <form method="GET" action="{{route('buscadorAdmin')}}">

	                                    <input type="text" placeholder="Buscar..." name="buscar">
	                                </form>

                        	</div>
                            <!-- FIN BUSCADOR -->
                            	<div class="clearfix"></div>
                            </div>
                        </div>

					    <table id="table">
						<thead>
						  <tr>
							<th>Nombre</th>
							<th>Representante</th>
							<th>Dirección</th>
							<th>Email</th>
							<th>Actualizar</th>
							<th>Borrar</th>

						  </tr>
						</thead>
						<tbody>
						  @foreach($comercios as $comercio)
						  <tr>

							<td>{{$comercio->nombre}}</td>
							<td>{{$comercio->nombreRepresentante}}</td>
							<td>{{$comercio->direccion}}</td>
							<td>{{$comercio->email}}</td>
							<td><form action="{{route('actualizarComercioView')}}">
									<input type="hidden" name="id" value="{{$comercio->id}}">
								 	<button type="submit" class="btn btn-primary">Actualizar</button>
								</form>
							</td>
							<td>
								<form action="">
									<input type="hidden" name="id" value="{{$comercio->id}}">
								 	<button type="submit" class="btn btn-default">Borrar</button>
								</form>
							</td>

						  </tr>
						 @endforeach
						</tbody>
					  </table>
					</div>
				<!--   <code class="js">
					$('#table').basictable();
				  </code> -->



				</div>
				<!-- //tables -->
			</div>
@endsection
