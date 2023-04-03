@extends ('layouts.main')

@section ('title', 'home')

@section ('content')

<body>
    <div class="container">
        <header>
            <img src="/images/logo.png" alt="" class="logo">
            <p class="headerText">EDITAR CONTATO</p>

        </header>
    </div>
    <div class="CorpoCadastro">
        <div class="contentCadastro">
            <form method="POST" action="{{url('update')}}">
                @csrf
                @method('PUT')
                <input type="hidden" value="{{$pessoa->id}}" name="id">
                <div>
                <div class="botaoVoltar">
                <a href="{{ url('pessoas/') }}" class="h2botao" id="CadastroPessoa">
                    Voltar
                </a>
            </div>
                    <p class="formText seperate">
                        Editar as informações desejadas de: <span style="font-weight: bold;"> {{$pessoaupper}} </span>
                    </p>
                </div>
                <div class="form-group">
                    <label for="nome" class="formText seperate" style="font-weight: 750;">Nome:</label>
                    <input type="text" id="nome" value="{{$pessoa->nome}}" class="form-control formText seperate" name="nome">
                </div>

                <div class="form-group">
                    <label for="cpf" class="formText seperate" style="font-weight: 750;">CPF:</label>
                    <input type="text" id="cpf" value="{{$pessoa->cpf}}" class="form-control formText seperate" name="cpf">
                </div>

                <button type="submit" class="botaoCadastroPessoa h2botao">Editar</button>
            </form>
        </div>
    </div>
</body>

@endsection