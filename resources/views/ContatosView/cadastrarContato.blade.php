@extends ('layouts.main')

@section ('title', 'Cadastro de Contatos')

@section ('content')

<body>
    <div class="container">
        <header>
            <img src="/images/logo.png" alt="" class="logo">
            <p class="headerText">CADASTRO DE CONTATOS</p>
        </header>
    </div>
    <div class="CorpoCadastro">
        <div class="contentCadastro">
            <form method="POST" action="{{route('contatos.store')}}">
                @csrf
                <div class="botaoVoltar">
                <a href="{{ url('contatos/'. $pessoa['id']) }}" class="h2botao" id="CadastroPessoa">
                    Voltar
                </a>
            </div>
                <div class="form-group">
                    <input type="hidden" name="id_pessoa" value="{{$pessoa->id}}">
                    <p class="formText seperate" style="font-weight:750">Criando contato para: <span > {{$pessoa->nome}} </span></p>
                    <label for="tipo" class="formText seperate" style="font-weight: 750;">Tipo de Contato:</label>
                    <select name="tipo" id="tipo" class="form-select formText seperate">
                    <option value="1">Telefone</option>
                    <option value="2">Email</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cpf" class="formText seperate" style="font-weight: 750;">Descrição:</label>
                    <input type="text" id="descricao" class="form-control formText seperate" placeholder="" name="descricao">
                </div>

                <button type="submit" class="botaoCadastroPessoa h2botao">Submit</button>
            </form>
        </div>
    </div>
</body>

@endsection