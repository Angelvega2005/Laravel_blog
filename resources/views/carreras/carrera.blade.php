@extends('plantillas.plantilla1')
@section('contenido')


<div class="row">
	<div class="col">
		<br><br><br>
		<table class="table">
			<tr>
				<th>#</th>
				<th>Carrera</th>
			</tr>
@foreach($carrera as $carrera)

<tr>
	<td>{{$carrera->nombre}}</td>
	<td>
		<img class="img-fluid" src="{{asset('img/'.$carrera->logo)}}">
	</td>
	<td>{{$carrera->numero}}</td>
	<td><a class="btn btn-primary" href="/carreras/{{$carrera->id}}/edit" role="button">Editar</a></td>
	<td>
		<form method="post" action="/carreras/{{$carrera->id}}">
			@csrf
			@method('DELETE')
			 <button type="submit" class="btn btn-danger">Eliminar</button>
			
		</form>
	</td>
</tr>
@endforeach
		</table>
		
	</div>