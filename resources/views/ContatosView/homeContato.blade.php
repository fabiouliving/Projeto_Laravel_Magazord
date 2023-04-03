@extends ('layouts.main')

@section('title', 'homeContato')

@section('content')

<body>
    <div class="container">
        <header>
            <img src="/images/logo.png" alt="" class="logo">
            <p class="headerText">CONSULTA DE CONTATOS</p>

        </header>
    </div>
    <div class="CorpoConsulta">
        <div class="Corpo1Contato">
            <p class="formText seperate">
                Contatos de: <span style="font-weight: bold;"> {{$pessoa->nome}} </span>
            </p>
            <div class="botaoCadastroPessoa">
                <a href="{{ url('contatos/create/' . $pessoa['id']) }}" class="h2botao" id="CadastroPessoa">
                    Cadastrar
                </a>
            </div>
            <div class="botaoVoltar">
                <a href="{{ url('pessoas/') }}" class="h2botao" id="CadastroPessoa">
                    Voltar
                </a>
            </div>
        </div>
        <div class="Corpo2Contato">
            <div class="tabelaPessoa">
                </table>
                <table class="table table-hover" style="background-color:#c9c9c9;">
                    <thead>
                        <tr>
                        <th scope="col" class="tableText" style="font-size: 30px; position: sticky; top: 0; background-color: #F49191;">ID</th>
                            <th scope="col" class="tableText" style="font-size: 30px; position: sticky; top: 0; background-color: #F49191;">Tipo</th>
                            <th scope="col" class="tableText" style="font-size: 30px; position: sticky; top: 0; background-color: #F49191">Descrição</th>
                            <th scope="col" class="tableText" style="font-size: 30px; position: sticky; top: 0; background-color: #F49191">OPERAÇÕES</th>
                        </tr>
                    </thead>
                    <tbody style="overflow-x: auto;">
                        @foreach ($contatos as $contato)
                        @method('delete')
                        <tr>
                            <td class="tableText">{{ $contato->id_contato }}</td>
                            @if($contato->tipo == 1)
                            <td class="tableText">Telefone</td>
                            @else
                            <td class="tableText">Email</td>
                            @endif
                            <td class="tableText">{{ $contato->descricao }}</td>
                            <td class="tableText">
                                <button class="btn btn-danger btn-sm">
                                <a href="{{ url('deleteContato/' . $contato['id_contato']) }}" style="color: #fafafa; font-weight:400; text-decoration: none; font-size:30px;">
                                        APAGAR
                                    </a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

@endsection