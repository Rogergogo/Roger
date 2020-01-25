@extends('layout')

@section('content')
<div class="col-sm-8">
	<h2>
		
	Nuevo 
	<a href="{{route('proyectoempresarial.index')}}" class="btn btn-default pull-right">Listado</a>
	</h2>
	{!! Form::open(['route'=>'proyectoempresarial.store'])!!}


	@include('Proyecto.partials.form')
		{!!Form::close()!!}
</div>

	<div class="col-sm-4">
		@include('Proyecto.partials.aside')
	</div>

	@endsection