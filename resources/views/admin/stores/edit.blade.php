@extends('layouts.app')
@section('content')
<h1>Editar loja</h1>
<form action="{{route('admin.stores.update',['store' => $store->id])}}" method="post">
	@csrf
	@method("PUT")
	<div class="form-group">
		<label>Nome Loja</label>
		<input type="text" name="name" class="form-control" value="{{$store->name}}">
	</div>
	<div class="form-group">
		<label>Descrição</label>
		<input type="text" name="description" class="form-control" value="{{$store->description}}">
	</div>
	<div class="form-group">
		<label>Telefone</label>
		<input type="text" name="phone" class="form-control" value="{{$store->phone}}">
	</div>
	<div class="form-group">
		<label>Celular</label>
		<input type="text" name="mobile_phone" class="form-control" value="{{$store->mobile_phone}}">
	</div>
	<div class="form-group">
		<label>Slug</label>
		<input type="text" name="slug" class="form-control" value="{{$store->slug}}">
	</div>
	<div class="form-group">
		<button type="submit" class="btn-btn-lg btn-success">Atualizar Loja</button>
	</div>
</form>
@endsection