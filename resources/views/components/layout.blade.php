<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif
    <header>
        <nav>
            <h1>Ninja Home</h1>
            <a href="/ninjas">Ninja list</a>
            <a href="/ninjas/create">Create New Ninja</a>
        </nav>
        <main class="container">
            {{ $slot }}
        </main>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var flash = document.getElementById('flash');

                if (flash) {
                    setTimeout(function() {
                        flash.remove();
                    }, 2000);
                }
            });
        </script>
    </header>
</body>

</html>
