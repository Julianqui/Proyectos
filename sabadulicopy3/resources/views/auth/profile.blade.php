@extends('template.base')

@section('title', 'Tu perfil')

@section('content')
<div class="container">
    <h1 class="ministerio">Buen dia {{ Auth::user()->name }}</h1>


      @csrf
      <!-- <a href="/login"><button class="btn btn-primary" type="submit">Salir</button></a> -->
	  <!--<button class="btn btn-success" type="submit">Salir</button>
	  <button class="btn btn-success" type="submit">Salir</button> -->

    <br>
	<br>


  <a href="libro"><button class="btn btn-primary hola" type="submit"><h1>Ministerio</h1></button></a>
    <!-- <h2>Seleccione al usuario</h2>
    <table class="table">
  		<tr>
  			<td><h3>Nombre</h3></td>
  			<td>Price</td>
  			<td>Image</td>
  			<td>Colors</td>
  			<td>Category</td>
  			<td>Brand</td>
  		</tr> -->
  		<!-- @forelse (Auth::user()->products as $oneProduct)
  			<tr>
  				<td>
				  <a href="{{ route('products.show', $oneProduct->id) }}"><button class="btn btn-danger btn-lg" type="submit"> -->

  					<!-- <a href="{{ route('products.show', $oneProduct->id) }}">
  						{{ $oneProduct->name }}
  					</a>

				  </button> 	</a>
  				</td>
  				<td><b>$</b>{{ $oneProduct->price }}</td>
  				<td><img src="{{ Storage::url('products/' . $oneProduct->image) }}" width="100"></td>
  				<td>
  					<ul>
  					@forelse ($oneProduct->colors as $color)
  						<li>{{ $color->name }}</li>
  					@empty
  						<li>Sin colores relaciondos</li>
  					@endforelse
  					</ul>
  				</td>
  				<td>{{ $oneProduct->category->name ?? 'No tiene categoría' }}</td>
  				<td>{{ $oneProduct->brand->name ?? 'No tiene marca' }}</td>
  			</tr>
  		@empty

  		@endforelse
  	</table>
    <a href="/login"><button class="btn btn-primary" type="submit">Salir</button></a> -->
</div>
@endsection
