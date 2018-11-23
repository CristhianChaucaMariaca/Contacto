<div class="form-group">
	{{ Form::label('name', 'Nombre de usuario') }}
	{{ Form::text('name',null,['class'=>'form-control','id'=>'name']) }}
</div>
<div class="form-group">
	{{ Form::label('email', 'Nombre de usuario') }}
	{{ Form::text('email',null,['class'=>'form-control','id'=>'email']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class'=>'form-control btn btn-sm btn-primary']) }}
</div>