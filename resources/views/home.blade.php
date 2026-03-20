<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina di Home</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href={{ route('home') }}>Home</a></li>
                <li><a href={{ route('profilo') }}>Pagina profilo</a></li>
                <li><a href={{ route('carrello') }}>Carrello</a></li>
            </ul>
        </nav>

        <h3>{{ $testo_prova }}</h3>
    </header>
    <main></main>
    <footer></footer>

</body>

</html>
