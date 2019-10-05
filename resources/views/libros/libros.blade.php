@extends('plantillas.plantilla1')

@section('titulo','libro')

@section('contenido')

		<div class="row">
			<div class="col">
				<br><br><br>
				<h2>lista de libros</h2>
				<table class="table">
					<tr>
						<th>#</th>
						<th>titulo</th>
						<th>isbn</th>
						<th>autor</th>
						<th>categoria</th>
						<th>carrera</th>
						<th>editar</th>
						<th>eliminar</th>

					</tr>
					@foreach($libros as $libro)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$libro->titulo}}</td>
						<td>{{$libro->isbn}}</td>
						<td>{{$libro->autor}}</td>
						<td>{{$libro->categoria->nombre}}</td>
						<td>{{$libro->carrera->nombre}}</td>
						<td>
							<a class="btn btn-primary" href="/libros/{{$libro->id}}/edit" role="button">Editar</a>
						</td>
						<td>
								<form method="post" action="/libros/{{$libro->id}}">
									@csrf
									@method('DELETE')
									 <button type="submit" class="btn btn-danger">Eliminar</button>
								</form>
						</td>

					</tr>
					@endforeach

				</table>

			</div>
		</div>

@endsection