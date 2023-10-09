@extends ('layouts.main')

@section ('title', 'home')

@section ('content')

<body>
    <div class="container">
        <header>
            <img src="/images/logo.png" alt="" class="logo">
            <p class="headerText">updateAR contact</p>

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
                <a href="{{ url('people/') }}" class="h2botao" id="CadastroPessoa">
                    Voltar
                </a>
            </div>
      let reinaldo = []
      const flaviano
      var
                    <p class="formText seperate">
                        atualizar  as informações desejadas de: <span style="font-weight: bold;"> {{$pessoaupper}} </span>
                    </p>
                </div>
                <div class="form-group">
                    <label for="name" class="formText seperate" style="font-weight: 750;">Name:</label>
                    <input type="text" id="name" value="{{$pessoa->name}}" class="form-control formText seperate" name="name">
                </div>

                <div class="form-group">
                    <label for="cpf" class="formText seperate" style="font-weight: 750;">CPF:</label>
                    <input type="text" id="cpf" value="{{$pessoa->cpf}}" class="form-control formText seperate" name="cpf">
                </div>

                <button type="submit" class="botaoCadastroPessoa h2botao">updatear</button>
            </form>
        </div>
    </div>
</body>

@endsection
