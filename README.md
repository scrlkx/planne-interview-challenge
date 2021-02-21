# Planne Interview Challenge

Essa é a solução que eu ([@scrlkx](https://github.com/scrlkx)) construí durante o processo seletivo de uma vaga
na [@planne](https://www.planne.com.br/). Este é um CRUD básico para gerenciamentos de notas com interface 100% SPA.

## Stack

O back-end foi construído com a stack PHP 8 + Laravel 8, pensando em rodar sobre uma base de dados MySQL. O front-end
foi construído com Inertia.js, uma adaptação de Vue.js para aplicações monolíticas e Tailwind CSS. Para ambientes de
desenvolvimento utiliza-se o [Laravel Sail](https://laravel.com/docs/8.x/sail) que roda
sobre [Docker](https://www.docker.com) e também querer [docker-compose](https://docs.docker.com/compose).

### Setup

1. Clone o repositório
2. Crie uma cópia de `.env` com `cp .env.example .env`
3. Instale as dependências com `composer install` (isso requer o [Composer](https://getcomposer.org))
4. Instale mais dependências com `npm install` (isso requer o [npm](https://www.npmjs.com))
4. Construa a estrutura com `sail up -d`
5. Acesse o container principal com `sail shell`
6. Crie a sua chave com `php artisan key:generate`
7. *Rode migrations e seeds com `php artisan migrate:refresh --seed`
8. Compile o front-end com `npm run dev`
9. Me avise se algo sair errado

Sobre o passo 8: o comando `php artisan migrate:refresh --seed` insere dados fictícios na base de dados para os
testes. Para evitar este comportamento substitua o comando por `php artisan migrate:refresh`.