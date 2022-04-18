@extends('template.main')

@section('title' , 'Contratos')

@section('content')

<div class="container">
    <h2>Contratos</h2>

    <div class="col-md-12">
       <a href="/dashboard/contratos/create"> <button class="btn btn-success">Cadastrar Contrato</button> </a>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>Contrato</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
        </thead>

        <tbody>
          @foreach($contratos as $valor)
            <tr>
                <td>{{$valor->title}}</td>
                <td><a href="/dashboard/contratos/update/{{$valor->id}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href="/dashboard/contratos/destroy/{{$valor->id}}"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>


@endsection