<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        This is the header
    </header>
    <img src="{{ asset('image/LOGO.png') }}" width="100" height="100" alt="Description of the image">
    <footer>
        @yield('maincontent')
        This is the footer
        <p>&copy; 2026 My Website. All rights reserved.</p>
    </footer>
</body>
</html>