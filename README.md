# Planne Interview Challenge

Essa é a solução que eu ([@scrlkx](https://github.com/scrlkx)) construí durante o processo seletivo de uma vaga
na [@planne](https://www.planne.com.br/). Este é um CRUD básico para gerenciamentos de notas com interface 100% SPA.

## Stack

O back-end foi construído com a stack PHP 8 + Laravel 8, pensando para rodar sobre uma base de dados MySQL. O front-end
foi construído com [Tailwind CSS](https://tailwindcss.com) e [Inertia.js](https://inertiajs.com) (uma camada sobre [Vue.js](https://vuejs.org) para aplicações monolíticas). Em ambientes de desenvolvimento utiliza-se o [Laravel Sail](https://laravel.com/docs/8.x/sail) que roda
sobre [Docker](https://www.docker.com) e também querer [docker-compose](https://docs.docker.com/compose).

### Setup

1. Clone o repositório
2. Crie uma cópia de `.env` com `cp .env.example .env`
3. Instale as dependências com `composer install` (isso requer o [Composer](https://getcomposer.org))
4. Construa a estrutura com `sail up -d`
5. Acesse o container principal com `sail shell`
6. Crie a sua chave com `php artisan key:generate`
7. *Rode migrations e seeds com `php artisan migrate:refresh --seed`
8. Instale mais dependências com `npm install`
9. Compile o front-end com `npm run dev`
10. Acesse http://localhost
11. Me avise se algo sair errado

Sobre o passo 8: o comando `php artisan migrate:refresh --seed` insere dados fictícios na base de dados para os
testes. Para evitar este comportamento substitua o comando por `php artisan migrate:refresh`.
