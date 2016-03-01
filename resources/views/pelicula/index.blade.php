@extends('layouts.principal')
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
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Genero</th>
                                            <th>Direccion</th>
                                            <th>Caratula</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    @foreach($movies as $movie)
                                        <tbody>
                                            <tr>
                                                <td>{{$movie->name}}</td>
                                                <td>{{$movie->genero}}</td>
                                                <td>{{$movie->direccion}}</td>
                                                <td>
                                                    <img src="movies/{{$movie->duracion}}" alt="" style="width: 100px" />
                                                </td>
                                                <td>
                                                    {!!link_to_route('pelicula.edit', $title = 'Editar', $parameters = $movie->id, $attributes = ['class'=>'btn btn-primary'])!!}
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
    @endsection