@extends ('layouts.main')

@section('title', 'home')

@section('content')

<body>
    <div class="container">
        <header>
            <img src="/images/logo.png" alt="" class="logo">
            <p class="headerText">CONSULTA DE PESSOAS</p>

        </header>
    </div>
    <div class="CorpoConsulta">
        <div class="Corpo1">
            <form type="get" action="{{url('/search')}}">
                <input class="formText seperate form-control" style="padding-right: 5px;" type="text" name="search" type="search" placeholder="Pesquisar por nome">
                <button class="btn btn-success btn-lg seperate">
                    Pesquisar
                </button>
            </form>
            <div class="botaoCadastroPessoa">
                <a href="{{ route('pessoas.create') }}" class="h2botao" id="CadastroPessoa">
                    Cadastrar
                </a>
            </div>
        </div>
        <div class="Corpo2">
            <div class="tabelaPessoa">
                </table>
                <table class="table table-hover" style="background-color:#c9c9c9;">
                    <thead>
                        <tr>
                            <th scope="col" class="tableText" style="font-size: 30px; position: sticky; top: 0; background-color: #F49191;">ID</th>
                            <th scope="col" class="tableText" style="font-size: 30px; position: sticky; top: 0; background-color: #F49191;">Nome</th>
                            <th scope="col" class="tableText" style="font-size: 30px; position: sticky; top: 0; background-color: #F49191">CPF</th>
                            <th scope="col" class="tableText" style="font-size: 30px; position: sticky; top: 0; background-color: #F49191">OPERAÇÕES
                            </th>
                            <th scope="col" class="tableText" style="font-size: 30px; position: sticky; top: 0; background-color: #F49191">CONTATOS
                            </th>
                        </tr>
                    </thead>
                    <tbody style="overflow-x: auto;">
                        @foreach ($pessoas as $pessoa)
                        @method('delete')
                        <tr>
                            <td class="tableText">{{ $pessoa->id }}</td>
                            <td class="tableText">{{ $pessoa->nome }}</td>
                            <td class="tableText">{{ $pessoa->cpf }}</td>
                            <td class="tableText">
                                <button class="btn btn-success btn-sm">
                                    <a href="{{url('edit/'.$pessoa['id'])}}" style="color: #fafafa; font-weight:400; text-decoration: none; font-size:30px;">
                                        EDITAR
                                    </a>
                                </button>
                                <button class="btn btn-danger btn-sm">
                                    <a href="{{ url('delete/' . $pessoa['id']) }}" style="color: #fafafa; font-weight:400; text-decoration: none; font-size:30px;">
                                        APAGAR
                                    </a>
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-dark" style="display: block; margin: auto;">
                                    <a href="{{ url('contatos/' . $pessoa['id']) }}" style="color: #fafafa; font-weight:400; text-decoration: none; font-size:30px;">
                                        CONTATOS
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