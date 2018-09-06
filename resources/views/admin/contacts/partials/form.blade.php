<div class="form-group">
	{{ Form::label('type_id','Tipo de contacto') }}

	{{ Form::select('type_id', $types, null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('phone','Numero de telefono') }}
	{{ Form::text('phone',null,['class'=>'form-control', 'id'=>'phone']) }}
</div>
<div class="form-group">
	{{ Form::label('extension','Extencion') }}
	{{ Form::text('extension',null,['class'=>'form-control', 'id'=>'extension']) }}
</div>
<div class="form-group">
	{{ Form::label('email','E-mail') }}
	{{ Form::text('email',null,['class'=>'form-control', 'id'=>'email']) }}
</div>
<div class="form-group">
	{{ Form::label('people_id','Añadir a:') }}

	{{ Form::select('people_id', $peoples, null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
	{!! Form::submit('Guardar',['class'=>'form-control btn btn-sm btn-primary']) !!}
</div>