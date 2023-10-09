# Sistema de Contatos

Este é um sistema de contatos simples desenvolvido em PHP utilizando o framework Laravel. Com ele, você pode adicionar, editar e excluir pessoas, bem como adicionar e excluir contatos vinculados a essas pessoas.

## Requisitos

Certifique-se de que o seu ambiente atenda aos seguintes requisitos antes de executar o projeto:

- PHP 8.1.12 ou uma versão mais recente
- Composer 2.4.4 ou uma versão mais recente
- MySQL 8.0.31 ou uma versão mais recente

Recomenda-se o uso do VSCode como ambiente de desenvolvimento.

## Como Executar o Projeto

Siga estas etapas para executar o projeto em seu ambiente:

1. Baixe o projeto e extraia os arquivos para uma pasta em sua área de trabalho.

2. Abra a pasta do projeto no VSCode.

3. Crie um novo arquivo chamado `.env` na pasta do projeto.

4. Copie o conteúdo do arquivo `.env.example` e cole-o no arquivo `.env` que você acabou de criar.

5. Abra o terminal no VSCode e navegue até a pasta do projeto usando o comando:
```json
cd SeuDiretorio/Project-Test-Magazord
```

6. Execute o comando para instalar as dependências do Composer:
```composer install
```

7. Gere uma chave de aplicativo Laravel com o comando:
```
php artisan key:generate
```

8. Execute as migrações do banco de dados com o comando:
```
php artisan migrate
```

9. Inicie o servidor de desenvolvimento com o comando:
```
php artisan serve
```