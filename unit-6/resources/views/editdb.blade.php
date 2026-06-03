<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add your Data</h2>
    <form action="/abc/{{$data1->id}}" method="POST">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" value="{{$data1->name}}"><br><br>
        Email: <input type="email" name="email" value="{{$data1->email}}"><br><br>
    </form>
    <button type="submit">Insert Value</button>
</body>
</html>