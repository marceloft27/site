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

    <style>
        .overlay5 {
            position: absolute;
            top: 120px;
            left: 50%;
            transform: translateX(-50%);
            border: 1px solid #272727;
            background-color: rgba(0, 0, 0, 0.520);
            z-index: -1;
            box-sizing: border-box;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.3);
            width: 100%;
            height: 100%;
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 2s ease-in-out;
        }

        .overlay5.active {
            display: flex;
            opacity: 1;
        }
    </style>

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

    <div class="overlay5 active">
        <h3>Dimensão 1</h3>
        <p>
            <div class="question">
                <p>Nossa empresa tem implementado uma estratégia digital.</p>
                <div class="rating-buttons">
                    <form action="{{ route('rate') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button name="rating" value="1" type="submit">1</button>
                        <button name="rating" value="2" type="submit">2</button>
                        <button name="rating" value="3" type="submit">3</button>
                        <button name="rating" value="4" type="submit">4</button>
                        <button name="rating" value="5" type="submit">5</button>
                    </form>
                </div>
            </div>

            <div class="question">
                <p>A estratégia digital da nossa empresa é documentada e comunicada.</p>
                <div class="rating-buttons">
                    <form action="{{ route('rate') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button name="rating" value="1" type="submit">1</button>
                        <button name="rating" value="2" type="submit">2</button>
                        <button name="rating" value="3" type="submit">3</button>
                        <button name="rating" value="4" type="submit">4</button>
                        <button name="rating" value="5" type="submit">5</button>
                    </form>
                </div>
            </div>

            <div class="question">
                <p>A estratégia digital da nossa empresa tem significativa influência no modelo de negócios e operações.</p>
                <div class="rating-buttons">
                    <form action="{{ route('rate') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button name="rating" value="1" type="submit">1</button>
                        <button name="rating" value="2" type="submit">2</button>
                        <button name="rating" value="3" type="submit">3</button>
                        <button name="rating" value="4" type="submit">4</button>
                        <button name="rating" value="5" type="submit">5</button>
                    </form>
                </div>
            </div>

            <div class="question">
                <p>A estratégia digital está sendo continuamente avaliada e adaptada.</p>
                <div class="rating-buttons">
                    <form action="{{ route('rate') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button name="rating" value="1" type="submit">1</button>
                        <button name="rating" value="2" type="submit">2</button>
                        <button name="rating" value="3" type="submit">3</button>
                        <button name="rating" value="4" type="submit">4</button>
                        <button name="rating" value="5" type="submit">5</button>
                    </form>
                </div>
            </div>
        </p>
    </div>


    <div class="overlay5">
        <h3>Dimensão 2</h3>
        <p>Conteúdo da Dimensão 2...</p>
    </div>

    <div class="overlay5">
        <h3>Dimensão 3</h3>
        <p>Conteúdo da Dimensão 3...</p>
    </div>

    <div class="overlay5">
        <h3>Dimensão 4</h3>
        <p>Conteúdo da Dimensão 4...</p>
    </div>

    <div class="overlay5">
        <h3>Dimensão 5</h3>
        <p>Conteúdo da Dimensão 5...</p>
    </div>

    <div class="overlay5">
        <h3>Dimensão 6</h3>
        <p>Conteúdo da Dimensão 6...</p>
    </div>

    <div class="overlay5">
        <h3>Dimensão 7</h3>
        <p>Conteúdo da Dimensão 7...</p>
    </div>

    <div class="overlay5">
        <h3>Dimensão 8</h3>
        <p>Conteúdo da Dimensão 8...</p>
    </div>

    <button onclick="avancaSecao()"class="botao-avancar">Avançar</button>
    <button onclick="retrocedeSecao()" class="botao-retroceder">Retroceder</button>
    <div>
        <a href="{{ route('verificar-sessao') }}">Ver Médias</a>
    </div>
    <script>
        let currentIndex = 0;
        const overlays = document.querySelectorAll('.overlay5');

        function avancaSecao() {
            overlays[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % overlays.length;
            overlays[currentIndex].classList.add('active');
        }

        function retrocedeSecao() {
            overlays[currentIndex].classList.remove('active');
            currentIndex = (currentIndex - 1 + overlays.length) % overlays.length;
            overlays[currentIndex].classList.add('active');
        }
    </script>

</body>

</html>
