<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acticle</title>
</head>
<body>
    @foreach($fruits as $fruit)
     <li>{{$fruit}}</li>
    @endforeach

    <form action="{{ url('read') }}" method="post">
        {{ csrf_field() }}
        <input name="fruit" type="text">
        <input type="submit" value="send">
    </form>
</body>
</html>