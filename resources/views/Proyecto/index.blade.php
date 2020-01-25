@extends('layout')

@section('content')
<div class="col-sm-8">
	<h2>
		
		Listado de Proyectos
		<a href="{{route('proyectoempresarial.create')}}" class="btn btn-primary pull-right">Nuevo</a>
	</h2>
		@include('Proyecto.partials.info')
	<table class="table table-hover table-striped">
		
		<thead class="">
			

			<tr>
				
				<th >Nombre</th>
				
				<th>Fecha inicio</th>

				<th>Etapa</th>
			</tr>
		</thead>
		<tbody>
			@if($proyecto_empresariales!=null)
			@foreach($proyecto_empresariales as $proyectoempresarial)
			<tr>
				<td>{{$proyectoempresarial->nombre}}</td>
				<td>{{$proyectoempresarial->fecha_inicio}}</td>
				<td>{{$proyectoempresarial->etapa_proyecto->nombre}}</td>
				<td><a href="{{route('proyectoempresarial.show',$proyectoempresarial->id)}}" class="btn btn-link"> Ver</a></td>
				<td>
					
					<a href="{{route('proyectoempresarial.edit',$proyectoempresarial->id)}}" class="btn btn-link"> Editar</a>
				</td>
				<td >
				<form action="{{route('proyectoempresarial.destroy',$proyectoempresarial->id)}}" method="post">
					  {{ csrf_field() }}
					  {{ method_field('DELETE') }}
						<button type="submit"class="btn btn-link">Borrar</button>
				

							</form>   
				</td>
			</tr>

			@endforeach
			@endif
		</tbody>
	</table>

	{!! $proyecto_empresariales->render()!!}
		
	</div>

	<div class="col-sm-4">
		
	</div>

	@endsection