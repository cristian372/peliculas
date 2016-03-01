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