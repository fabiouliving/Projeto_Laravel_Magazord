@extends ('layouts.main')

@section ('title', 'Cadastro de contact')

@section ('content')

<body>
    <div class="container">
        <header>
            <img src="/images/logo.png" alt="" class="logo">
            <p class="headerText">CADASTRO DE contact</p>
        </header>
    </div>
    <div class="CorpoCadastro">
        <div class="contentCadastro">
            <form method="POST" action="{{route('contact.store')}}">
                @csrf
                <div class="botaoVoltar">
                <a href="{{ url('contact/'. $pessoa['id']) }}" class="h2botao" id="CadastroPessoa">
                    Voltar
                </a>
            </div>
                <div class="form-group">
                    <input type="hidden" name="id_people" value="{{$pessoa->id}}">
                    <p class="formText seperate" style="font-weight:750">Criando contact para: <span > {{$pessoa->nome}} </span></p>
                    <label for="type" class="formText seperate" style="font-weight: 750;">type de contact:</label>
                    <select name="type" id="type" class="form-select formText seperate">
                    <option value="1">Telefone</option>
                    <option value="2">Email</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cpf" class="formText seperate" style="font-weight: 750;">description:</label>
                    <input type="text" id="description" class="form-control formText seperate" placeholder="" name="description">
                </div>

                <button type="submit" class="botaoCadastroPessoa h2botao">Submit</button>
            </form>
        </div>
    </div>
</body>

@endsection