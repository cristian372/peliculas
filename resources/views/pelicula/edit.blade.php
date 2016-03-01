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
                        {!!Form::model($movie,['route'=>['pelicula.update', $movie->id], 'method'=>'PUT', 'files'=> true])!!}
                        	@include('pelicula.form.pelicula')
                            {!!Form::submit('Actualizar', ['class'=>'btn btn-primary'])!!}
                        {!!Form::close()!!}
                        {!!Form::open(['route'=>['pelicula.destroy', $movie->id], 'method'=>'DELETE'])!!}
                            {!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!}      
						</div>
						</div>
					</div>
        		</div>
        	</div>
        </div>
	@endsection