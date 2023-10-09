@extends ('layouts.main')

@section('title', 'homecontact')

@section('content')

<body>
    <div class="container">
        <header>
            <img src="/images/logo.png" alt="" class="logo">
            <p class="headerText">CONSULTA DE contact</p>

        </header>
    </div>
    <div class="CorpoConsulta">
        <div class="Corpo1contact">
            <p class="formText seperate">
                contact de: <span style="font-weight: bold;"> {{$pessoa->nome}} </span>
            </p>
            <div class="botaoCadastroPessoa">
                <a href="{{ url('contact/create/' . $pessoa['id']) }}" class="h2botao" id="CadastroPessoa">
                    Cadastrar
                </a>
            </div>
            <div class="botaoVoltar">
                <a href="{{ url('people/') }}" class="h2botao" id="CadastroPessoa">
                    Voltar
                </a>
            </div>
        </div>
        <div class="Corpo2contact">
            <div class="tabelaPessoa">
                </table>
                <table class="table table-hover" style="background-color:#c9c9c9;">
                    <thead>
                        <tr>
                        <th scope="col" class="tableText" style="font-size: 30px; position: sticky; top: 0; background-color: #F49191;">ID</th>
                            <th scope="col" class="tableText" style="font-size: 30px; position: sticky; top: 0; background-color: #F49191;">type</th>
                            <th scope="col" class="tableText" style="font-size: 30px; position: sticky; top: 0; background-color: #F49191">description</th>
                            <th scope="col" class="tableText" style="font-size: 30px; position: sticky; top: 0; background-color: #F49191">OPERAÇÕES</th>
                        </tr>
                    </thead>
                    <tbody style="overflow-x: auto;">
                        @foreach ($contact as $contact)
                        @method('delete')
                        <tr>
                            <td class="tableText">{{ $contact->id_contact }}</td>
                            @if($contact->type == 1)
                            <td class="tableText">Telefone</td>
                            @else
                            <td class="tableText">Email</td>
                            @endif
                            <td class="tableText">{{ $contact->description }}</td>
                            <td class="tableText">
                                <button class="btn btn-danger btn-sm">
                                <a href="{{ url('deletecontact/' . $contact['id_contact']) }}" style="color: #fafafa; font-weight:400; text-decoration: none; font-size:30px;">
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