# Sistema de Contatos

Este é um sistema de contatos simples desenvolvido em PHP utilizando o framework Laravel. Com ele, você pode adicionar, editar e excluir pessoas, bem como adicionar e excluir contatos vinculados a essas pessoas.

# Tecnologias Utilizadas

Back-End: PHP 8.1.12 com Laravel
Front-End: HTML, CSS
Banco de Dados: MySQL 8.0.31
Gerenciador de Pacotes: Composer 2.4.4

## Requisitos

Certifique-se de que o seu ambiente atenda aos seguintes requisitos antes de executar o projeto:

-   PHP 8.1.12 ou uma versão mais recente
-   Composer 2.4.4 ou uma versão mais recente
-   MySQL 8.0.31 ou uma versão mais recente

Recomenda-se o uso do VSCode como ambiente de desenvolvimento.

## Como Executar o Projeto

Siga estas etapas para executar o projeto em seu ambiente:

￼
Stop generating

1. Baixe o projeto e extraia os arquivos para uma pasta em sua área de trabalho.

2. Abra a pasta do projeto no VSCode.

3. Crie um novo arquivo chamado `.env` na pasta do projeto.

4. Copie o conteúdo do arquivo `.env.example` e cole-o no arquivo `.env` que você acabou de criar.

5. Abra o terminal no VSCode e navegue até a pasta do projeto usando o comando:

```json
cd SeuDiretorio/Project-Test-Magazord-PHP
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

### Desenvolvimento

Este projeto foi desenvolvido utilizando o framework Laravel, que segue o padrão MVC (Model-View-Controller) para uma organização eficiente do código.

O back-end foi construído em PHP, com a utilização do Composer como gerenciador de pacotes para facilitar a gestão das dependências.

O front-end foi desenvolvido com HTML e CSS básico para uma interface simples e amigável.

### Autor

Desenvolvido por Reinaldo Flaviano
Aproveite o projeto e sinta-se à vontade para personalizá-lo e usá-lo como base para seus próprios desenvolvimentos!
