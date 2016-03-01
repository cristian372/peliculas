<div class="form-group">
        {!!Form::label('Nombre','Nombre: ')!!}
        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la pelicula'])!!}
</div>
<div class="form-group">
        {!!Form::label('Elenco','Elenco: ')!!}
        {!!Form::text('cast',null,['class'=>'form-control','placeholder'=>'Ingrese el elenco'])!!}
</div>
<div class="form-group">
        {!!Form::label('Direccion','Direccion: ')!!}
        {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingrese al director'])!!}
</div>
<div class="form-group">
        {!!Form::label('Poster','Poster: ')!!}
        {!!Form::file('duracion')!!}
</div>
<div class="form-group">
        {!!Form::label('Genero','Genero: ')!!}
        {!!Form::select('genero_id', $genero)!!}
</div>