
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Minicurso Criação de Sites e Sistemas com Laravel

## Academicos responsáveis: [Matheus Honorato](https://github.com/MatheusHonorato) e [Daniel Porto](https://github.com/DanielSPF)

Minicurso ministrado na IV semana de integração do DCC da Universidade Estadual De Montes Claros (UNIMONTES). O projeto introduz os principais conceitos utilizados pelo framework.

## Previews

| Site | Dashboard |
| --- | --- |
| [![Site](https://github.com/DanielSPF/miniCursoLaravel/blob/master/public/previews-site.PNG)](https://github.com/DanielSPF/miniCursoLaravel/blob/master/public/previews-site.PNG) | [![Dashboard](https://github.com/DanielSPF/miniCursoLaravel/blob/master/public/previews-dashboard.PNG)](https://github.com/DanielSPF/miniCursoLaravel/blob/master/public/previews-dashboard.PNG)

| Register | Login | Profile  |
| --- | --- | ---  |
| [![Register](https://github.com/DanielSPF/miniCursoLaravel/blob/master/public/previews-register.PNG)](https://github.com/DanielSPF/miniCursoLaravel/blob/master/public/previews-register.PNG) | [![Login](https://github.com/DanielSPF/miniCursoLaravel/blob/master/public/previews-login.PNG)](https://github.com/DanielSPF/miniCursoLaravel/blob/master/public/previews-login.PNG) | [![Profile](https://github.com/DanielSPF/miniCursoLaravel/blob/master/public/previews-profile.PNG)](https://github.com/DanielSPF/miniCursoLaravel/blob/master/public/previews-profile.PNG) 

## Roteiro

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
    - php artisan key:generate
- Rode as migrations
    - php artisan migrate --seed

## Recursos utilizados

### Templates
- [Site Oficial - Paper Kit 2](https://www.creative-tim.com/product/paper-kit-2)
- [GitHub - Paper Kit 2](https://github.com/creativetimofficial/paper-kit-2)
- [Site Oficial - Paper Dashbaord 2](https://www.creative-tim.com/product/paper-dashboard-2)
- [GitHub - Paper Dashboard 2](https://github.com/creativetimofficial/paper-dashboard)

### Ferramentas/Frameworks
- [Font-awesome](https://fontawesome.com)
- [Bootstrap v4](https://getbootstrap.com)

### Plugins
- [Perfect-scrollbar](https://github.com/mdbootstrap/perfect-scrollbar)
- [Chart JS](https://www.chartjs.org)
- [Bootstrap-notify](http://bootstrap-notify.remabledesigns.com)

### Pacotes Laravel
- [Localização pt_BR](https://github.com/esjdev/laravel-5.7-ptBR-localization)

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
