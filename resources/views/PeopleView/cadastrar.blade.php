@extends ('layouts.main')

@section ('title', 'home')

@section ('content')

<body>people
    <div class="container">
        <header>
            <img src="/images/logo.png" alt="" class="logo">
            <p class="headerText">CADASTRO DE PEOPLE</p>

        </header>
    </div>
    <div class="CorpoCadastro">
    <div class="botaoVoltar">
                <a href="{{ url('people/') }}" class="h2botao" id="CadastroPessoa">
                    Voltar
                </a>
            </div>
        <div class="contentCadastro">
            <form method="POST" action="{{route('people.store')}}">
                @csrf
                <div class="form-group">
                    <label for="nome" class="formText seperate" style="font-weight: 750;">Name:</label>
                    <input type="text" id="nome" class="form-control formText seperate" placeholder="Maximo de 50 Caracteres" name="nome">
                    <span class="formText" style="color:#F49191">{{ $errors->has('name') ? $errors->first('name') : ''}}</span>
                </div>

                <div class="form-group">
                    <label for="cpf" class="formText seperate" style="font-weight: 750;">CPF:</label>
                    <input type="text" id="cpf" class="form-control formText seperate" placeholder="11 numeros do CPF" name="cpf">
                    <span class="formText" style="color:#F49191">{{ $errors->has('cpf') ? $errors->first('cpf') : ''}}</span>
                </div>

                <button type="submit" class="botaoCadastroPessoa h2botao">Submit</button>
            </form>
        </div>
    </div>
</body>

@endsection
