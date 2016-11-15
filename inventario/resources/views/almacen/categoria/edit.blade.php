@extends('layouts.admin')

@section('contenido')

<div class="row">
	<div class="col-xs-6">
		<h3>Editar Categoria:{{$categoria->nombre}} </h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		{!!Form::model($categoria,['method'=>'PATCH','route'=>['almacen.categoria.update',$categoria->idcategoria]]) !!}
		{{Form::token()}}
		<div class="form-group">
			
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" class="form-control" value="{{$categoria->nombre}} " placeholder="Nombre....">
		</div>

		<div class="form-group">
			
			<label for="descripcion">Descripción</label>
			<input type="text" name="descripcion" class="form-control" value="{{$categoria->descripcion}} " placeholder="Descripción....">
		</div>

		<div class="form-group">
			<button class="btn bg-primary" type="submit">
				Guardar
			</button>

			<button class="btn btn-danger" type="reset">Cancelar</button>
		</div>
		{!!Form::close()!!}
	</div>
</div>
@endsection
