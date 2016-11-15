@extends('layouts.admin')

@section('contenido')

<div class="row">
	<div class="col-xs-6">
		<h3>Nuevo Proveedor</h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>
</div>
		{!!Form::open(['url'=>'compras/proveedor', 'method'=>'POST','autocomplete'=>'off']) !!}
		{{Form::token()}}
<div class="row">
	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" required="true" value="{{old('nombre')}}" class="form-control" placeholder="Nombre....">
		</div>
	</div>

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="direccion">Direccion</label>
			<input type="text" name="direccion"  value="{{old('direccion')}}" class="form-control" placeholder="Direccion....">
		</div>
	</div>

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="Documento">Documento</label>
			<select name="tipo_documento" class="form-control" id="">
				<option value="DNI">DNI</option>
				<option value="RUC">RUC</option>
				<option value="PAS">PAS</option>
			</select>
		</div>
	</div>

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="num_documento">Número de Documento</label>
			<input type="text" name="num_documento"  value="{{old('num_documento')}}" class="form-control" placeholder="Número de Documento....">
		</div>
	</div>


	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="telefono">Teléfono</label>
			<input type="text" name="telefono"  value="{{old('telefono')}}" class="form-control" placeholder="a">
		</div>
	</div>

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email"  value="{{old('email')}}" class="form-control" placeholder="Descripción del articulo....">
		</div>
	</div>




	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		<div class="form-group">
				<button class="btn bg-primary" type="submit">
					Guardar
				</button>
		
				<button class="btn btn-danger" type="reset">Cancelar</button>
		</div>
	</div>
</div>
		
{!!Form::close()!!}
@endsection
