@extends('layouts.admin')

@section('contenido')


<div class="row">
	<div class="col-xs-8">
		<h3> Listados de Usuarios 
		<a href="usuario/create">
			<button class="btn btn-success">Nuevo</button>
		</a>

		</h3>

		@include('seguridad.usuario.search')
	</div>
</div>


<div class="row">
	<div class="col-xs-12">
		<div class="table table-responsive">
			<table class=" table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>#Id</th>
					<th>Nombre</th>
					<th>Email</th>
					<th>Opciones</th>
				</thead>
				@foreach($usuarios as $usu)
				<tr>
					<td>{{$usu->id}}</td>
					<td>{{$usu->name}}</td>
					<td>{{$usu->email}}</td>
					<td>
						<a href="{{URL::action('UsuarioController@edit', $usu->id)}} "> <button class="btn btn-info">Editar</button></a>
						<a href="" data-target="#modal-delete-{{$usu->id}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('seguridad.usuario.modal')
				@endforeach
			</table>
		</div>

		{{$usuarios->render()}}
	</div>
</div>

@endsection