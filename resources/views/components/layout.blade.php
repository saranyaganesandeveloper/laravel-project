<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <h1>Ninja Home</h1>
            <a href="/ninjas">Ninja list</a>
            <a href="/ninjas/create">Create New Ninja</a>
        </nav>
        <main class="container">
            {{$slot}}
        </main>
    </header>
</body>
</html>