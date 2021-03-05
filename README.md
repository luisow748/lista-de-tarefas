<h1 align="center"> 🔗 Lista de Tarefas - Pulses</h1>

Tabela de conteúdos
=================
<!--ts-->
   * [Descrição](#descricao)
   * [Dependências para instalação](#dependencias-para-instalacao)
   * [Instalação da Lista de Tarefas](#instalacao)
   * [Features](#Features)
      
   * [Status](#Status)
   * [Tecnologias](#Tecnologias)
<!--te-->

## Descrição
<p id="descricao" align="center">
Este é um projeto que consiste na criação de uma Lista de Tarefas para que cada colaborador possa controlar suas prioridades diárias. Estas podem ser criadas, editadas, marcadas como concluídas ou alteradas.
</p>

## Dependências para instalação:
<p id="dependencias-para-instalacao" align="center">
Para a instalação em um ambiente de desenvolvimento local, são necessárias duas dependências principais:
<ul>
<li>Node.js > 10 (<a href="https://nodejs.org/en/">Instalação do Node.js</a>), </li>
<li>Composer (<a href="https://getcomposer.org/download/">Instalação do Composer</a>) e</li>
<li>Servidor XAMPP ( <a href="https://www.apachefriends.org/pt_br/download.html">Instalação do XAMPP</a></li>
</ul>
</p>

## Instalação da Lista de Tarefas:
<p id="instalacao" align="center">
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

### Features

- [x] Cadastro, alteração e exclusão de Tarefa
- [x] Cadastro, alteração e exclusão de Tipo de Tarefa


## Status

<h4 align="center"> 
	🚧  Lista de Tarefas Em construção...  🚧
</h4>



## Tecnologias

<ul>
    <li><a ref="https://laravel.com/">Laravel 8</a> </li>
    <li><a ref="https://vuejs.org/">Vue.js 2.X</a> </li>
    <li><a ref="https://inertiajs.com/">Inertia.js V0.8.5</a> </li>
    <li><a ref="https://bootstrap-vue.org/">Bootstrap-Vue V2.21.2</a> </li>
    <li><a ref="https://fontawesome.com/">Font Awesome</a> </li>
</ul>
