<div class="form-group">
	{!! Form::label('description', 'Tipo de etiqueta') !!}
	{!! Form::text('description',null,['class' => 'form-control', 'id' => 'description']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Guardar', ['class'=>'form-control btn btn-sm btn-primary']) !!}
</div>