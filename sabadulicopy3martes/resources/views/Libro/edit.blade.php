@extends('template.base')

@section('title', 'Logueate')

@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">

			@if(count($errors) > 0)
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

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title editar">Editar usuario</h3>
				</div>

				<div class="panel-body estrella">

					<div class="table-container">

						<form method="POST" action="{{ route('libro.update',$libro->id) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">

							<div class="row">

								<div class="col-xs-6 col-sm-6 col-md-6">

									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{$libro->nombre}}" required>
									</div>

								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">

									<div class="form-group">
										<input type="text" name="apellido" id="npagina" class="form-control input-sm" value="{{$libro->apellido}}" required>
									</div>

								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="usuario" id="nombre" class="form-control input-sm" placeholder="Nombre de usuario" required>
									</div>
								</div>

								<!-- <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="email" id="nombre" class="form-control input-sm" placeholder="Email" required>
									</div>
								</div> -->






								<div class="form-group row">
										<label for="email" class="col-md-4 col-form-label text-md-right"></label>

										<div class="col-md-6">
												<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-Mail" required>

												@if ($errors->has('email'))
														<span class="invalid-feedback" role="alert">
																<strong>{{ $errors->first('email') }}</strong>
														</span>
												@endif
										</div>
								</div>



							</div>


							<select name="rol" required>
								<option value="Coordinador">Coordinador</option>
								<option value="Rubricador">Rubricador</option>
							</select>

							<!-- <div class="form-group">
								<textarea name="rol" class="form-control input-sm"  placeholder="Resumen">{{$libro->rol}}</textarea>
							</div> -->

							<!-- <div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="edicion" id="edicion" class="form-control input-sm" value="{{$libro->edicion}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="precio" id="precio" class="form-control input-sm" value="{{$libro->precio}}">
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea name="autor" class="form-control input-sm" placeholder="Resumen">{{$libro->resumen}}</textarea>
							</div>
							<div class="row"> -->

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block fer">
									<a href="{{ route('libro.index') }}" class="btn btn-danger btn-block fero">Cancelar</a>
								</div>

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection
