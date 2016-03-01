@extends('layouts.principal')

@section('content')
    @if(count('$errors')>0)
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{!!$error!!}</li>
                @endforeach
            </ul>
        </div>
    @endif
	<!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           BASIC  FORM ELEMENTS
                        </div>
                        <div class="panel-body">
                        {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
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
							{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                        {!!Form::close()!!}       
						</div>
						</div>
					</div>
        		</div>
        	</div>
        </div>
@stop
