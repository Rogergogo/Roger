@extends('layout')

@section('content')

<div class="col-sm-8">
	<h3>
		
	{{ $proyecto->nombre }}
	</h3>
	<br>
	<strong>Descripcion:</strong>
	<p>
	{{ $proyecto->descripcion }}
		</P>
	<br>
	<strong>Etapa:</strong>
	{{ $proyecto->etapa_proyecto->nombre }}
	<br>
	<strong>Fecha inicio:</strong>
	{{ $proyecto->fecha_inicio }}
	<br>
	<strong>Actividad Economica:</strong>
	{{ $proyecto->actividad_economicas->nombre }}
	<br>
	<strong>Cantidad Empleados:</strong>
	{{ $proyecto->cantidad_empleados }}
	<br>
	<strong>Facturacion mensual aproximada:</strong>
	{{ $proyecto->facturacion_mensaul_aprox }}
	<br>
	<strong>Productos:</strong>
	{{ $proyecto->productos }}
	<br>
	<strong>Servicios:</strong>
	{{ $proyecto->servicios }}
	<br>
	<strong>Tipo Mercado:</strong>
	{{ $proyecto->tipo_mercado }}
	<br>
	<strong>Numero Integrantes:</strong>
	{{ $proyecto->numero_integrantes }}
	<br>
	<strong>Persona Contacto:</strong>
	{{ $proyecto->persona_contacto->nombre_completo }}

	

</div>

	<div class="col-sm-4">
		<a href="{{route('proyectoempresarial.edit',$proyecto->id)}}"   class="btn btn-primary pull-right">Editar</a>
	</div>

	@endsection