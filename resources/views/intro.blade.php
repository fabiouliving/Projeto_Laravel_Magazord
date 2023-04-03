@extends('layouts.main')

@section('title', 'intro')

@section('content')

<body>
    <div class="container">
        <header>
            <img src="/images/logo.png" alt="" class="logo">
            <p class="headerText">Teste BackEnd Magazord</p>
        </header>
        <div class="content">
            <p class="introText">Esse website foi feito por Filipe Conte Zulian, para o Teste Back-End da Magazord.</p>

            <p class="introText">O website é um simples sistema de contatos, ultilizando PHP no backend, alem do uso da framework Laravel.</p>

            <p class="introText">Laravel é uma framework para PHP, que ultiliza o Padrão MVC, e ultiliza Blade para o front-end.</p>

            <p class="introText">Foi escolhido laravel pela praticidade e conhecimento previo de uso.</p>

            <p class="introText">Para o front foi usado HTML CSS basico.</p>

            <div class="botaoWebsite">
                <a href="{{route('pessoas.index')}}" class="h2botao" id="welcome">
                    website
                </a>
            </div>
        </div>

    </div>

</body>
@endsection