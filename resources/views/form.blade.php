<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acticle</title>
</head>
<body>
{{ Form::open(array('url' => '/login')) }}
    {{Form::text('email')}}
    {{Form::password('password')}}
    {{Form::submit('Login')}}
{{ Form::close() }}
</body>
</html>