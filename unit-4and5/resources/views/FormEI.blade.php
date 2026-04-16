<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/submit">

        @csrf

        <label>Enter Name</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div style="color:red">{{ $message }}</div>
        @enderror

        <br>
        <label>enter Email</label>
        <input type="text" name="email" value="{{ old('email') }}">
        @error('email')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <br>
        <label >Phone</label>
        <input type="text" name="phone" value="{{ old('phone') }}">
        @error('phone')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>