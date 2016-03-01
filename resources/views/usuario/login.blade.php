@extends('layouts.segundo')

@section('content')
        @include('usuario.alert')
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           BASIC  FORM ELEMENTS
                        </div>
                        <div class="panel-body">
                        {!!Form::open(['route'=>'log.store','method'=>'POST'])!!}
							<div class="form-group">
                        		{!!Form::label('Email:')!!}
                        		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'email'])!!}
							</div>
							<div class="form-group">
                        		{!!Form::label('Passowrd:')!!}
                        		{!!Form::password('password',['class'=>'form-control','placeholder'=>'password'])!!}
							</div>
							{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
                        {!!Form::close()!!}
                        {!!link_to('password/email', $title = 'Olvidaste tu contrasenia', $attributes =null, $secure = null )!!}       
						</div>
						</div>
					</div>
        		</div>
        	</div>
        </div>
@stop
