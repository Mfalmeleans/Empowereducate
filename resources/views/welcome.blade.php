<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Educate and Empower Organization</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to Educate and Empower Organization</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <main>
        <p>This is the homepage.</p>
    </main>
    <footer>
        <p>&copy; 2025 Educate and Empower Organization. All rights reserved.</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>