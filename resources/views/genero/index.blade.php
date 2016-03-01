@extends('layouts.principal')
	@section('content')

    @include('genero.modal')
    <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
        <strong>Genero Actualiado</strong>
    </div>

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
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="datos">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
	@endsection


    @section('scripts')        
        {!!Html::script('js/script2.js')!!}
    @endsection