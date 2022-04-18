@extends('template.main')

@section('title' , 'Clientes')

@section('content')

<div class="container">
    <h2>Clientes</h2>
    <div class="col-md-12">
        <form name="search" action="" method="get">
        <input type="text" name="search" class="form-control" placeholder="Buscar nome cliente" />
        </form>
    </div>
    <div class="col-md-12">
       <a href="/dashboard/clientes/create"> <button class="btn btn-success">Cadastrar Cliente</button> </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Cadastro em:</th>
                <th>Cliente</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Produto</th>
                <th>Mensalidade</th>
                <th>Dia Pgto</th>
                <th>Status</th>
                <th>Cobranças</th>
                <th>Editar</th>
            </tr>
        </thead>

        <tbody>
            @php
            $resultado = 0;
            @endphp

            @foreach($clientes as $valor)

            @php

            $data = date('d/m/Y' , strtotime($valor->created_at));
            $preco = number_format($valor->price , 2,'.',',');
     
            $resultado += $preco;

            $resultadoView = number_format($resultado , 2,',','.');

            if($valor->status == 1){
                $status = "btn btn-success";
                $texto = "ATIVO";
            }
            if($valor->status == 0){
                $status = "btn btn-danger";
                $texto = "INATIVO";
            }

            @endphp
            <tr>
                <td><small>{{$data}}</small></td>
                <td>{{$valor->company}}</td>
                <td>{{$valor->phone}}</td>
                <td>{{$valor->email}}</td>
                <td>{{$valor->product}}</td>
                <td>{{$preco}}</td>
                <td>{{$valor->day_payment}}</td>
                <td><p class="{{$status}}">{{$texto}}</p></td>
                <td><a href="/dashboard/clientes/cobranca/{{$valor->id}}"><button class="btn btn-info">Cobranças</button></a></td>
                <td><a href="/dashboard/clientes/update/{{$valor->id}}"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-md-12"><h3>Cobrança Total R$ {{$resultadoView}} </h3></div>
    
</div>

@endsection