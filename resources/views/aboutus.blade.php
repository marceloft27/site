<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sobre a Equipe</title>
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

    <div class="overlay-container">
        <div class="overlay1">
            <div class="membro">
                <img class="foto-membro" src="https://images.pexels.com/photos/845457/pexels-photo-845457.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Nome do Membro 1">
                <h3>Marcelo de Rezende Pinto</h3>
                <p>É doutor e mestre em Administração pela Universidade Federal de Minas Gerais, sendo atualmente docente permanente no Programa de Pós-graduação em Administração da Pontifícia Universidade Católica de Minas Gerais (PUC Minas). Possui bolsa de Produtividade em Pesquisa nível 2 do CNPq e lidera o Grupo de Estudos em Marketing, Consumo e Sociedade (GEMACONS). </p>
            </div>
        </div>

        <div class="overlay1">
            <div class="membro">
                <img class="foto-membro" src="https://images.pexels.com/photos/1848565/pexels-photo-1848565.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Nome do Membro 1">
                <h3>Paula Karina Salume</h3>
                <p>É doutora e mestre em Administração pela Pontifícia Universidade Católica de Minas Gerais, atualmente docente na Universidade Federal de São João del-Rei (UFSJ). Seus interesses de pesquisa incluem agilidade organizacional, aglomerações produtivas locais, desenvolvimento regional, empreendedorismo, gestão de projetos, inovação, comportamento e consumo, transformação digital. </p>
            </div>
        </div>

        <div class="overlay1">
            <div class="membro">
                <img class="foto-membro" src="https://images.pexels.com/photos/762080/pexels-photo-762080.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Nome do Membro 1">
                <h3>Marcelo Werneck Barbosa</h3>
                <p>O profissional é doutor em Administração e Mestre em Ciências da Computação pela Universidade Federal de Minas Gerais. Atualmente, é docente na Faculdade de Administração e Negócios da Universidad Autónoma de Chile. Seus principais interesses de pesquisa abrangem análise de negócios, big data e transformação digital na gestão da cadeia de suprimentos, além de cadeias de suprimentos agrícolas. </p>
            </div>
        </div>
    </div>


    <!-- Outras seções e conteúdo podem ser adicionados aqui -->

    <!-- Adicione o link para seus scripts JavaScript aqui, se necessário -->

</body>

</html>
