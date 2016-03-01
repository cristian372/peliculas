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
                        {!!Form::open(['route'=>'pelicula.store', 'method'=>'POST', 'files'=> true])!!}
                        	@include('pelicula.form.pelicula')
                            {!!Form::submit('Registrar', ['class'=>'btn btn-primary'])!!}
                        {!!Form::close()!!}       
						</div>
						</div>
					</div>
        		</div>
        	</div>
        </div>
	@endsection