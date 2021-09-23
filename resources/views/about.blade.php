<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_name }}</title>
</head>
<body>
    <h1>{{ $page_name}}</h1>
    <p>{{$page_description}}</p>
    <form action="/pizza" method="POST">
        @csrf
        <input type="text" name="usernamee"/>
        <input type="submit" value="save" />
    </form>
</body>
</html>