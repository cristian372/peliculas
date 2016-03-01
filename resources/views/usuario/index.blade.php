@extends('layouts.principal')


@if (Session::has('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		{{Session::get('message')}}
	</div>
@endif

@section('content')
	        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <div class="panel-body">
                        @if(Auth::user()->id >= 1)
                            <div class="table-responsive">\
                                <div class="users">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    @foreach($users as $user)
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                            	{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                                {!!$users->render()!!}
                                @section('scripts')        
                                    {!!Html::script('js/script3.js')!!}
                                @endsection 
                                </div>     
                            </div>
                        </div>
                        @endif 
                    </div>
                </div>
            </div>
         </div>
    </div>
@endsection