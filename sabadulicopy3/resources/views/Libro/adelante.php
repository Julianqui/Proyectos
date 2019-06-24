@extends('template.base')

@section('title', 'Logueate')

@section('content')
<div class="row">
  <section class="content">
    <h1>{{$libro->usuario}}</h1>
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
        <img class="logui" src="images/escudo.jpg" alt="">
        <br><br>
          <div class="pull-left"><h1 class="administracion">Administracion de usuarios</h1></div>
          <div class="pull-right">
            <div class="btn-group">

            </div>
          </div>
          <div class="table-container">


            <!-- <table id="mytable" class="table table-bordred table-striped">

             <tbody>
              @if($libros->count())
              @foreach($libros as $libro)
              <tr>
                <td><a href="libro/create"> <button class="btn btn-danger btn-lg" href="{{ route('libro.create') }}">{{$libro->usuario}}</button></a> </td>

                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>

                <td><a class="btn btn-primary btn-xs" href="{{action('LibroController@edit', $libro->id)}}" ><span class="glyphicon glyphicon-pencil"><img src="images/lapiz.png" class="icono" title="Modificar" alt="Modificar"></span></a></td>
                <td>
                  <form action="{{action('LibroController@destroy', $libro->id)}}" method="post">
                   {{csrf_field()}}

                   <input name="_method" type="hidden" value="DELETE">



                   <!-- <button onclick="myFunction()">Try it</button>
                   <script type="text/javascript">


                   function myFunction(event) {
                     $bool=confirm("¿De verdad quieres eliminar al usuario?");
                     if($bool){
                       alert("marcaste OK");
                     }else{
                       alert("marcaste Cancelar");
                     }
                   }
                 </script>

                 <p>
                   <button class="btn btn-danger btn-xs" onclick="return myFunction();" href={{action('LibroController@destroy', $libro->id)}}" type="submit"><span class="glyphicon glyphicon-trash"><img src="images/trash.png" class="icono" title="Eliminar" alt="Modificar"></span></button>
                 <!-- </p>
                 </form

                 </td>
               </tr>
               @endforeach
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table> -->

          <a href="{{ route('libro.create') }}" class="btn btn-info">Añadir Usuario</a>
        </div>
        <!-- <br><br><br><br> -->
      </div>
      <!-- <a href="/"><button class="btn btn-primary" type="submit">Salir</button></a> -->
      {{ $libros->links() }}
      <!-- <br><br>

      <a href="{{ URL::previous() }}"><button class="btn btn-primary" type="submit">Anterior</button></a> -->

    </div>
  </div>
</section>


@endsection
