@extends('layouts.segundo')

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
                        {!!Form::open(['url'=>'password/reset'])!!}
							<div class="form-group">
                        		{!!Form::hidden('token', $token, null)!!}
                        		{!!Form::text('email', null, ['value'=>"{{old('email')}}"])!!}
                        		{!!Form::password('password')!!}
                        		{!!Form::password('password_confirmation')!!}
							</div>
							{!!Form::submit('Restablecer')!!}
                        {!!Form::close()!!}       
						</div>
						</div>
					</div>
        		</div>
        	</div>
        </div>
@endsection