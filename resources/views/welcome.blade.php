<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Maturidade Digital</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200&display=swap" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Início</a></li>
                <li><a href="{{ route('learnmore') }}">Saiba mais</a></li>
                <li><a href="{{ route('aboutus') }}">Sobre nós</a></li>
            </ul>
        </nav>
    </header>

    <div class="overlay"></div>

    <section id="maturidade-digital">
        <h1 class="titulo-maturidade">Maturidade</h1>
        <h2 class="titulo2-maturidade">Digital</h2>
        <p class="texto-maturidade">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <a href="{{ route('forms.show') }}" class="botao-teste">Preencher o formulário</a>
    </section>

</body>


</html>
