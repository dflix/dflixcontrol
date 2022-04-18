@extends('template.main')

@section('title' , "Dashboard")

@section('content')

<div class="container">
    <h1>Contatos</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>Data</th>
                <th>Cliente</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Mensagem</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shape as $valor)
    <tr>
        @php
        $data = date("d/m/Y",strtotime($valor->date));
        @endphp
        <td>{{$data}}</td>
        <td>{{$valor->name}}</td>
        <td>{{$valor->email}}</td>
        <td>{{$valor->phone}}</td>
        <td>{{$valor->message}}</td>
    </tr>

        @endforeach
        </tbody>
    </table>

    {{ $shape->links() }}
</div>

@endsection