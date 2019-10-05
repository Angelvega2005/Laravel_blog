@extends('plantillas.plantilla1')

@section('titulo','Nuevo Libro')
@section('contenido')

<div class="row">
	<div class="col">
		<br> <br><br>
		<h2>Nuevo Libro</h2>
		<form method="post"  action="/libros" >
      @csrf
  <div class="form-group">
    <label for="nombre">Titulo del Libro</label>
    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo del Libro">
  </div>
  <div class="form-group">
    <label for="numero">ISBN</label>
    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN">
  </div>
    <div class="form-group">
    <label for="numero">Autor</label>
    <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">
  </div>

      <div class="form-group">
      <label for="categorias">Categorias</label>
      <select class="custom-select" id="categorias" name="categoria_id">
  <option selected>Seleciona una categorias</option>
  @foreach($categorias as $categoria)
      <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
      @endforeach
</select>
    </div>

  	<div class="form-group">
  		<label for="carreras">Carreras</label>
  		<select class="custom-select" id="carreras" name="carrera_id">
  <option selected>Seleciona una carrera</option>
  @foreach($carreras as $carrera)
  		<option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
  		@endforeach
</select>
  	</div>


  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
	</div>
</div>
	</div>
	</div>


@endsection