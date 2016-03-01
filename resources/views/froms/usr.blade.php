<div class="form-group">
        {!!Form::label('Nombre:')!!}
        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
</div>
<div class="form-group">
	{!!Form::label('Email:')!!}
 	{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'email'])!!}
</div>
<div class="form-group">
	{!!Form::label('Passowrd:')!!}
	{!!Form::password('password',['class'=>'form-control','placeholder'=>'password'])!!}
</div>