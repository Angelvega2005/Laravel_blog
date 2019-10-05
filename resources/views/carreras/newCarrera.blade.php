@extends('plantillas.plantilla1')
@section ('titulo,carrera')
@section('contenido')
<div class="row">
	<div class="col">
		<br> <br><br>
		<h2>Nueva Carrera</h2>
		<form method="post"  action="/carreras" enctype="multipart/form-data">
      @csrf
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Carrera">
  </div>
    <div class="form-group">
    <label for="logo">Logo</label>
    <input type="file" class="form-control-file" id="logo" name="logo" placeholder="Logo">
  </div>
  <div class="form-group">
    <label for="numero">Numero</label>
    <input type="text" class="form-control" id="numero" name="numero" placeholder="Nombre Carrera">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
	</div>
</div>

@endsection