<table id="table">
 <thead>
   <tr>
                 <th>id</th>
   <th>Nombre</th>
   <th>Dirección</th>
   <th>Teléfono</th>
   <th>Representante Legal</th>


   </tr>
 </thead>
 <tbody>
   @foreach($comercios as $comercio)
   <tr>
     <td>{{$comercio->id}}</td>
   <td>{{$comercio->nombre}}</td>
   <td>{{$comercio->dirEstablecimiento}}</td>
   <td>{{ $comercio->telefono }}</td>
   <td>{{ $comercio->nombreRepresentante }}</td>


   </tr>
  @endforeach
 </tbody>
 </table>
