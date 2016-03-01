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
                        {!!Form::model($user,['route'=>['usuario.update', $user->id], 'method'=>'PUT'])!!}
                        	@include('usuario.usr')
							{!!Form::submit('actualizar',['class'=>'btn btn-primary'])!!}
                        {!!Form::close()!!}
                        
                        {!!Form::open(['route'=>['usuario.destroy', $user->id], 'method'=>'DELETE'])!!}
                            {!!Form::submit('ELiminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!}      
						</div>
						</div>
					</div>
        		</div>
        	</div>
        </div>
@stop