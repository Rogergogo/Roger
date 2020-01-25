
<div class="form-row">
<div class="form-group col-md-12">
	{!!Form::label('nombre','Nombre del Proyecto: ')!!}
	{!!Form::text('nombre',null,['Class'=>'form-control','required','maxlength' => 60])!!}
</div>

<div class="form-group col-md-12">
	{!!Form::label('descripcion','Descripcion	: ')!!}
	{!!Form::textarea('descripcion',null,['Class'=>'form-control','required'])!!}
</div>
 <div class="form-group col-md-6">

    {!! Form::Label('etapa_id', 'Etapa proyecto: ') !!}
    {!! Form::select('etapa_id', $etapa_proyecto,null, ['class' => 'form-control','required','placeholder'=>'Seleccione una etapa del proyecto']) !!}
</div>


<div class="form-group col-md-6">
	{!!Form::label('fecha_inicio','Fecha de Inicio: ')!!}
	{!!Form::date('fecha_inicio',null,['Class'=>'form-control'])!!}
</div>

<div class="form-group col-md-6">

    {!! Form::Label('actividad_economica', 'Actividad Economica: ') !!}
    {!! Form::select('actividad_economica', $actividad_economica,null, ['class' => 'form-control','placeholder'=>'Seleccione una actividad econmica']) !!}
</div>


<div class="form-group col-md-6">
	{!!Form::label('cantidad_empleados','Cantidad de empleados: ')!!}
	{!!Form::number('cantidad_empleados',null,['Class'=>'form-control'])!!}
</div>
<div class="form-group col-md-7">
	{!!Form::label('facturacion_mensual_aprox','Facturacion mensual aproximada: ')!!}
	{!!Form::number('facturacion_mensual_aprox',null,['Class'=>'form-control'])!!}
</div>

 <div class="form-group col-md-6">
        {{Form::label('productos','Productos : ') }}
        {{Form::textarea('productos',null,['Class'=>'form-control','maxlength' => 1000]) }}

</div>

 <div class="form-group col-md-6">
        {{Form::label('servicios','Servicios : ') }}
        {{Form::textarea('servicios',null,['Class'=>'form-control','maxlength' => 1000]) }}

</div>


 <div class="form-group col-md-6">
        {{Form::label('tipo_mercado','Tipo Mercado : ') }}
        {{Form::text('tipo_mercado',null,['Class'=>'form-control']) }}

</div>

<div class="form-group col-md-6">
	{!!Form::label('numero_integrantes','Numero de integrantes: ')!!}
	{!!Form::number('numero_integrantes',null,['min' => '1', 'max' => '999','Class'=>'form-control'])!!}
</div>


<div class="form-group col-md-6">

    {!! Form::Label('persona_contacto_id', 'Persona de contacto: ') !!}
    {!! Form::select('persona_contacto_id', $persona_contacto,null, ['class' => 'form-control','required','placeholder'=>'Seleccione una persona']) !!}
</div>

<div class="form-group col-md-10">
		    {!! csrf_field() !!}
	  <button type="submit" class="btn btn-primary pull-right">
                {{ __('Registrar') }}
      </button>
	
</div>
</div>