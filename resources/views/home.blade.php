@extends ('layouts.main')

@section('title', 'home')

@section('content')

<body>
    <div class="container">
        <header>
            <img src="/images/logo.png" alt="" class="logo">
            <p class="headerText">CONSULTA DE people</p>

        </header>
    </div>
    <div class="CorpoConsulta">pessoa
        <div class="Corpo1">
            <form type="get" action="{{url('/search')}}">
                <input class="formText seperate form-control" style="padding-right: 5px;" type="text" name="search" type="search" placeholder="Pesquisar por nome">
                <button class="btn btn-success btn-lg seperate">
                    Pesquisar
                </button>
            </form>
            <div class="botaoCadastroPessoa">
                <a href="{{ route('people.create') }}" class="h2botao" id="CadastroPessoa">
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
                            <th scope="col" class="tableText" style="font-size: 30px; position: sticky; top: 0; background-color: #F49191">contact
                            </th>
                        </tr>
                    </thead>
                    <tbody style="overflow-x: auto;">
                        @foreach ($people as $people)
                        @method('delete')
                        <tr>
                            <td class="tableText">{{ $people->id }}</td>
                            <td class="tableText">{{ $people->name }}</td>
                            <td class="tableText">{{ $people->cpf }}</td>
                            <td class="tableText">
                                <button class="btn btn-success btn-sm">
                                    <a href="{{url('update/'.$people['id'])}}" style="color: #fafafa; font-weight:400; text-decoration: none; font-size:30px;">
                                        updateAR
                                    </a>
                                </button>
                                <button class="btn btn-danger btn-sm">
                                    <a href="{{ url('delete/' . $people['id']) }}" style="color: #fafafa; font-weight:400; text-decoration: none; font-size:30px;">
                                        APAGAR
                                    </a>
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-dark" style="display: block; margin: auto;">
                                    <a href="{{ url('contact/' . $people['id']) }}" style="color: #fafafa; font-weight:400; text-decoration: none; font-size:30px;">
                                        contact
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
