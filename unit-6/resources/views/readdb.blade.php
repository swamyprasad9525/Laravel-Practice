<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Detail Card</h2>
    <a href="/abc/create">Add New</a>
    <table border="6" cellpadding="7" cellspacing="7">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->name }}</td>
            <td>{{ $d->email }}</td>
            <td>
                <a href="/abc/{{ $d->id }}/edit">Edit</a>
                <a href="/abc/{{ $d->id }}/show">Show</a>
                <form action="/abc/{{$d->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>