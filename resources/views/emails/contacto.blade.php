<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template</title>

    {!!Html::style('assets/css/bootstrap.css')!!}
    {!!Html::style('assets/css/font-awesome.css')!!}
    {!!Html::style('assets/css/style.css')!!}

</head>
<body>
    <p><strong>Nombre: </strong>{{!!$name!!}}</p>
    <p><strong>Email: </strong>{{!!$email!!}}</p>
    <p><strong>Mensaje: </strong>{{!!$mensaje!!}}</p>

    <footer >
    </footer>
    {!!Html::script('assets/js/jquery-1.11.1.js')!!}
    {!!Html::script('assets/js/bootstrap.js')!!}
    {!!Html::script('assets/js/jquery.metisMenu.js')!!}
    {!!Html::script('assets/js/custom.js')!!}
    @section('scripts')
    @show
</body>
</html>