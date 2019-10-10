# Minicurso Criação de Sites e Sistemas com Laravel

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Academicos responsáveis: [Matheus Honorato](https://github.com/MatheusHonorato) e [Daniel Porto](https://github.com/DanielSPF)

Minicurso ministrado na IV semana de integração do DCC da Universidade Estadual De Montes Claros (UNIMONTES). O projeto introduz os principais conceitos utilizados pelo framework.

## Previews

| Site | Dashboard |
| --- | --- |
| [![Paper Kit  HTML](https://raw.githubusercontent.com/creativetimofficial/public-assets/master/paper-kit-2-html/opt_pk2_thumbnail.jpg)](https://www.creative-tim.com/product/paper-kit-2)  | [![Paper Kit  Angular](https://raw.githubusercontent.com/creativetimofficial/public-assets/master/paper-kit-2-angular/opt_pk2_angular_thumbnail.jpg)](https://www.creative-tim.com/product/paper-kit-2-angular)  

| Register | Login | Profile  |
| --- | --- | ---  |
| [![Register Page](https://raw.githubusercontent.com/creativetimofficial/public-assets/master/paper-kit-2-pro-html/register-page.png)](https://demos.creative-tim.com/paper-kit-2/examples/register-page.html)  | [![Landing Page](https://raw.githubusercontent.com/creativetimofficial/public-assets/master/paper-kit-2-pro-html/landing-page.png)](https://demos.creative-tim.com/paper-kit-2/examples/landing-page.html)  | [![Profile Page](https://raw.githubusercontent.com/creativetimofficial/public-assets/master/paper-kit-2-pro-html/profile-page.png)](https://demos.creative-tim.com/paper-kit-2/examples/profile-page.html)  

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
