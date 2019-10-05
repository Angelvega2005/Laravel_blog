@extends('plantillas.plantilla1')

@section('titulo','Nueva Categoria')

@section('contenido')


<div class="row">
	<div class="col">


<br><br><br>
<h2>Edit Libros</h2>

		<form method="post" action="/libros/{{$libro->id}}">
			@csrf
			<input type="hidden" name="_method" value="PUT">

		  <div class="form-group">
		    <label for="libro">Tutulo de libro</label>
		    <input type="text"  class="form-control" id="libro" name="nombre" value="{{$libro->titulo}}" >
		  </div>
		  <div class="form-group">
		    <label for="isbn">ISBN</label>
		    <input type="text"  class="form-control" id="isbn" name="isbn" value="{{$libro->isbn}}" >
		  </div>
		  <div class="form-group">
		    <label for="autor">Autor</label>
		    <input type="text"  class="form-control" id="autor" name="autor" value="{{$libro->autor}}" >
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

		  <button type="submit" class="btn btn-primary">Editar</button>
		</form>

	</div>
</div>

@endsection