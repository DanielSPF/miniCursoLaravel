<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Minicurso Criação de Sites e Sistemas com Laravel

### Academicos responsáveis: [Matheus Honorato](https://github.com/MatheusHonorato) e [Daniel Porto](https://github.com/DanielSPF)

Minicurso ministrado na IV semana de integração do DCC da Universidade Estadual De Montes Claros (UNIMONTES). O projeto introduz os principais conceitos utilizados pelo framework.

### Roteiro

- Por que Laravel?
- MVC - Revisão.
- Instalando o Laravel 6.x.
- Estrutura do framework.
- Routes.
- Controllers.
- Views.
- Models, Migrations e Seeders.
- Projeto Site OnePage e Sistema com Gestão de Usuários.

## Qual stack necessária

- PHP 7
- Mysql
- Apache
- Composer
- Git

## Como rodar o projeto na sua máquina

- Clone o projeto
    - git clone https://github.com/DanielSPF/miniCursoLaravel.git
- Intale as dependências e o framework
    - composer install --no-scripts
- Copie o arquivo .env.example
    - Se estiver utilizando linux: cp .env.example .env
    - Se estiver no windows abra o arquivo em um editor de código e o salve novamente     como .env
- Crie uma nova chave para a aplicação
    - php artisan migrate --seed
## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
