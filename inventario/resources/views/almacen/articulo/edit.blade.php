@extends('layouts.admin')

@section('contenido')

<div class="row">
	<div class="col-xs-6">
		<h3>Editar Artículo:{{$articulo->nombre}}</h3>
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

		{!!Form::model($articulo,['method'=>'PATCH','route'=>['almacen.articulo.update',$articulo->idarticulo],'files'=>'true'])!!}
		{{Form::token()}}
		<div class="row">
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" required="true" value="{{$articulo->nombre}}" class="form-control">
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="categoria">Categoria</label>
					<select name="idcategoria" class="form-control" id="">
						@foreach($categorias as $cat)
							@if($cat->idcategoria==$articulo->idcategoria)
							  <option value="{{$cat->idcategoria}}" selected>{{$cat->nombre}}</option>

							@else
							  <option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>

							@endif
						@endforeach
					</select>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<label for="codigo">Código</label>
				<input type="text" name="codigo" required="true" value="{{$articulo->codigo}}" class="form-control" ">
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<label for="stock">Stock</label>
				<input type="text" name="stock" required="true" value="{{$articulo->stock}}" class="form-control" ">
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion"  value="{{$articulo->descripcion}}" class="form-control" placeholder="Descripción del articulo....">
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<label for="imagen">Imágen</label>
				<input type="file" name="imagen"  class="form-control" >
				@if( ($articulo->imagen)!="")
				 <img src="{{asset('imagenes/articulo/'.$articulo->imagen)}}" height="300px" width="300px" alt="">
				@endif
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
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
