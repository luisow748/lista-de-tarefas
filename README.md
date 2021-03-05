<h1 align="center"> 🔗 Lista de Tarefas - Pulses</h1>

Tabela de conteúdos
=================
<!--ts-->
   * [Descrição](#descricao)
   * [Tabela de Conteudo](#tabela-de-conteudo)
   * [Instalação](#instalacao)
   * [Como usar](#como-usar)
      * [Pre Requisitos](#pre-requisitos)
      * [Local files](#local-files)
      * [Remote files](#remote-files)
      * [Multiple files](#multiple-files)
      * [Combo](#combo)
   * [Tests](#testes)
   * [Tecnologias](#tecnologias)
<!--te-->

## descricao
<p align="center">
Este é um projeto que consiste na criação de uma Lista de Tarefas para que cada colaborador possa controlar suas prioridades diárias. Estas podem ser criadas, editadas, marcadas como concluídas ou alteradas.
</p>

## Dependências para instalação:
<p align="center">
Para a instalação em um ambiente de desenvolvimento local, são necessárias duas dependências principais:
<ul>
<li>Node.js > 10 (<a href="https://nodejs.org/en/">Instalação do Node.js</a>), </li>
<li>Composer (<a href="https://getcomposer.org/download/">Instalação do Composer</a>) e</li>
<li>Servidor XAMPP ( <a href="https://www.apachefriends.org/pt_br/download.html">Instalação do XAMPP</a></li>
</ul>
</p>

## Instalação da Lista de Tarefas:
<p align="center">
Após instaladas as duas dependências principais, os próximos passos são:
<ul>
    <li>1- No prompt de comando, digitar o seguinte código: <br>
        $<code>git clone https://github.com/luisow748/pulses.git</code><br>
        $<code>cd pulses</code><br>
        $<code>npm install</code><br>
        $<code>npm run dev</code><br>
        $<code>composer install</code><br>
        $<code>cp .env.example .env</code><br>
        $<code>php artisan key:generate</code><br>
    </li>
    <li>2- No arquivo .env gerado, atualizar a seguinte variável 
    com o valor indicado:<br>
        <code>DB_DATABASE=pulses</code>
    </li>
    <li>Iniciar o Servidor XAMPP (Mysql e PHP) (<a href="https://pt.wikihow.com/Iniciar-o-XAMPP-na-Inicializa%C3%A7%C3%A3o-do-Windows">Como inicializar o XAMPP</a></li>
    <li>3- Novamente no prompt de comando (ainda na pasta pulses), digitar o seguinte código:<br>
    <code>php artisan migrate:fresh</code><br>
    <code>php artisan serve</code>
    </li>
    <li>4- Pronto. A aplicação pode ser acessada via browser no endereço localhost:8000</li>
</ul>
</p>

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
