<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/submit" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
        <br><br>
        @error('name')
        <p style="color: red;">{{ $message }}</p>
        @enderror
        @error('email')
        <p style="color: red;">{{ $message }}</p>
        @enderror
        <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
        <button type="submit">Submit</button>
    </form>
</body>
</html>