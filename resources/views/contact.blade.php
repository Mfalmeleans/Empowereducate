<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Educate and Empower Organization</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Contact Educate and Empower Organization</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <main>
        <form action="/contact" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Send</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2025 Educate and Empower Organization. All rights reserved.</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> d511d87c066948865308bff0c864270aefb7d31f
