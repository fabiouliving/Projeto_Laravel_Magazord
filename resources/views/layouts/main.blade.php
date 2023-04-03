<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Fontes do google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS da aplicação -->
    <!-- CSS Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <style>
        .botaoVoltar{
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            width: 200px;
            height: 100px;
            left: 190px;
            bottom: 120px;
            background: #F49191;
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 25px;
        }
        .Corpo2Contato{
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 75%;
            height: 900px;

        }

        .Corpo1Contato {
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 25%;
            height: 900px;

        }
        .contentCadastro {
            align-items: left;
            justify-content: center;
            display: flex;
            flex-direction: column;
            width: 50%;
            min-height: 800px;
            max-height: 900px;
            padding: 0px;
            margin: 0px;
            background-color: #6c6c6c;
        }

        .seperate {
            margin: 10px;
        }

        .formText {
            color: #2b2b2b;
            font-weight: 500;
            font-size: 25px;
        }

        .tableText {
            text-align: center;
            color: #2b2b2b;
            font-weight: 500;
            font-size: 25px;
        }

        .CorpoCadastro {
            align-content: center;
            justify-content: center;
            display: flex;
            flex-direction: row;
            width: 100%;
            min-height: 800px;
            height: 900px;
        }

        .formCadastroPessoa {
            position: relative;
            display: flex;
            align-content: center;
            flex-direction: column;
        }

        .botaoCadastroPessoa {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            width: 200px;
            height: 100px;
            right: 190px;
            bottom: 120px;
            background: #F49191;
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 25px;
        }

        .table {
            position: relative;
            flex-direction: column;
            padding: 25px;
        }

        .h2botao {
            font-size: 30px;
            color: #2b2b2b;
            font-weight: 600;
            text-decoration: none;
        }

        .tabelaPessoa {
            display: flex;
            flex-direction: column;
            width: 90%;
            height: 500px;
            background-color: #c9c9c9;
            overflow-y: scroll;
            border-radius: 10px;
        }

        .Corpo2 {
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 80%;
            height: 900px;

        }

        .Corpo1 {
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 20%;
            height: 900px;

        }

        .CorpoConsulta {
            display: flex;
            flex-direction: row;
            width: 100%;
            min-height: 800px;
            height: 900px;
        }

        .botaoWebsite {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            width: 200px;
            height: 100px;
            right: 100px;
            bottom: 150px;
            background: #F49191;
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 25px;
        }

        .introText {
            position: relative;
            color: #fafafa;
            font-size: 25px;
            margin: 10px;
        }

        .content {
            align-items: left;
            justify-content: center;
            display: flex;
            flex-direction: column;
            width: 100%;
            min-height: 800px;
            height: 900px;
            padding: 0px;
            margin: 0px;
            background-color: #6c6c6c;
        }

        .logo {
            position: absolute;
            left: 200px;
            top: 15px;
            height: 70px;
            width: 60px;
        }

        header {
            left: 0;
            position: fixed;
            width: 100%;
            height: 100px;
            line-height: 100px;
            background-color: #2b2b2b;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 80px;
            line-height: 80px;
            background-color: #2b2b2b;
        }

        .headerText {
            color: #fafafa;
            font-size: 30px;
            padding-left: 20px;
            text-align: center;
        }

        .container {
            width: 100%;
            min-width: 500px;
            margin: auto;

        }

        .copyright {
            color: #fafafa;
            font-size: 15px;
            display: flex;
            justify-content: center;
        }

        body,
        html {
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: auto;
            background-color: #6c6c6c;
        }
    </style>

</head>

<body>
    @yield('content')
    <footer>
        <p class=copyright> Desenvolvido por FILIPE CONTE ZULIAN, como teste para a empresa MAGAZORD &copy; 2023 </p>
    </footer>
</body>

</html>