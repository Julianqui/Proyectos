@extends('template.base')

@section('title', 'Logueate')

@section('content')
<div class="row">
	<section class="content">
		<!-- <img src="images/user.png" alt=""> -->
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<br><br>

			<div class="panel panel-default">

				<div class="panel-heading">

					<h3 class="panel-title">Nuevo Usuario</h3>

				</div>
				<div class="panel-body">
					<!-- <img src="images/user.png" alt=""> -->
					<div class="table-container">
						<form class="ola" method="POST" action="{{ route('libro.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre">
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="apellido" id="npagina" class="form-control input-sm" placeholder="Apellido">
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="usuario" id="nombre" class="form-control input-sm" placeholder="Nombre de usuario">
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="email" id="nombre" class="form-control input-sm" placeholder="Email">
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="password" id="nombre" class="form-control input-sm" placeholder="Contraseña">
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="password" id="nombre" class="form-control input-sm" placeholder="Repetir contraseña">
									</div>
								</div>

								<div class="col-xl-12 col-xl-12 col-md-12">
									<!-- <form action="/index"> -->
	  								<select name="rol">
	    								<option value="Coordinador">Coordinador</option>
	    								<option value="Rubricador">Rubricador</option>
	    							</select>
	  								<br><br>

									<!-- </form> -->

									<!-- <div class="btn-group">
	  							<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    							Elija su rol
	  							</button>
	  							<div class="dropdown-menu">
	    							<a class="dropdown-item" href="#">Coordinador</a>
	    							<a class="dropdown-item" href="#">Rubricador</a>
	    							<a class="dropdown-item" href="#">Something else here</a> -->
	    							<!-- <div class="dropdown-divider"></div>
	    							<a class="dropdown-item" href="#">Separated link</a>
	  							</div>-->
								</div>
							</div>
						</div>
						<!-- <div class="form-group">
								<textarea name="rol" class="form-control input-sm" placeholder="Rol"></textarea>
							</div> -->
							<!-- <div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="edicion" id="edicion" class="form-control input-sm" placeholder="Rol">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="precio" id="precio" class="form-control input-sm" placeholder="Precio del libro">
									</div>
								</div>
							</div> -->
							<!-- <div class="form-group">
								<textarea name="autor" class="form-control input-sm" placeholder="Autor"></textarea>
							</div>
							<div class="row"> -->

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('libro.index') }}" class="btn btn-danger btn-block" >Cancelar</a>
								</div>

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection
