@extends('template.main')

@section('title' , "Produtos")

@section('content')

<div class="container">
    <h2 class="borda">Produtos</h2>
    <div class="row">

    <div class="col-md-4">
        <h1><i class="fa-solid fa-screwdriver-wrench"></i></h1>
        <h2>Auto Center</h2>
        <h5>Website + Sistema de Gestão</h5>
        <ul>
            <li>Site Responsivo</li>
            <li>Cadastro de Clientes</li>
            <li>Cadastro de Fornecedores</li>
            <li>Cadastro de Funcionários</li>
            <li>Contas a Pagar</li>
            <li>Contas a Receber</li>
            <li>Geração documentos, garantias e ordem de serviços</li>
            <li>Histórico de Ordem de Serviços</li>
            <li>Agenda de Eventos</li>
            <li>e muito mais...</li>
        </ul>
       <a href="/produtos/auto-center"> <p class="btn btn-warning"> Saiba Mais</p></a>
    </div>

    </div>
</div>


@endsection