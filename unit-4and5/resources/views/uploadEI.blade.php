<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/upload" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <br><br>
        @error ('file')
            <div style="color: red;">{{ $message }}</div>   
        @enderror
        <button type="submit">Upload</button>



    </form>
</body>
</html>