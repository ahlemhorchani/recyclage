<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <!-- Feuilles de style CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- Scripts JavaScript -->
    <script src="{{ asset('js/admin.js') }}" defer></script>
</head>
<body>
    <!-- Barre de navigation -->
    <nav>
        <!-- Contenu de la barre de navigation -->
    </nav>

    <!-- Contenu principal -->
    <main>
        @yield('content')
    </main>

    <!-- Pied de page -->
    <footer>
        <!-- Contenu du pied de page -->
    </footer>
</body>
</html>
