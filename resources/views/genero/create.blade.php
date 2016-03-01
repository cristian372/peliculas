@extends('layouts.principal')
	@section('content')
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           BASIC  FORM ELEMENTS
                        </div>
                        <div class="panel-body">
                        {!!Form::open()!!}
                        	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                        	<strong> Genero agregado Correctamente </strong>
							</div>
                            <div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
                            <strong id="msj"> </strong>
                            </div>
                        	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"></input>
                        	@include('genero.form.genero')
                        	{!!link_to('#', $title='Registrar', $attributes=['id'=>'registro', 'class'=>'btn btn-primary', $secure = null ])!!}
                        {!!Form::close()!!}       
						</div>
						</div>
					</div>
        		</div>
        	</div>
        </div>
	@endsection

    @section('scripts')        
        {!!Html::script('js/script.js')!!}
    @endsection