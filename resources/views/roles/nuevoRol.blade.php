@extends('plantillas.plantilla1')

@section('titulo','Nueva Categoria')

@section('contenido')

<br><br><br>
<h2>Nueva Rol</h2>
		<form method="post" action="/roles">
			@csrf
		  <div class="form-group">
		    <label for="rol">Nombre de la rol</label>
		    <input type="text"  class="form-control"  name="nombre"  id="rol">

		  </div>


		  <button type="submit" class="btn btn-primary">Guardar</button>
		</form>

	</div>
</div>

@endsection