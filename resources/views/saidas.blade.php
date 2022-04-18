@extends('template.main')

@section('title' , 'Saidas')

@section('content')

<div class="container">

<h3>Saidas</h3>

<div class="col-md-12">
    <form method="GET" action="" name="search" class="form-inline">
        @csrf
        <label>Inicio</label>
    <input type="date" name="inicio" class="form-control" />
    <label>Fim</label>
    <input type="date" name="fim" class="form-control" />
    <label>Status</label>
    <select class="form-control" name="status">
        <option class="paid"> paid</option>
        <option class="unpaid"> unpaid</option>
    </select>
    <input type="submit" class="btn btn-success" />
    </form>
</div>

<div class="col-md-12">
</BR>
   <a href="/dashboard/saidas/create"><button class="btn btn-danger">SAIDAS</button></a> 
</div>

<div class="col-md-12">
    <table class="table">
        <thead>
            <tr>
                <th>Data</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Status</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>

        <tbody>
            @foreach($invoice as $valor)

            @php

            $data = date('d/m/Y' , strtotime($valor->day_payment));

            $preco = number_format($valor->price, 2,".",",");

            if($valor->status == "unpaid"){
                $classe = 'btn btn-danger';
                $texto = 'Em Aberto';
            }

            if($valor->status == "paid"){
                $classe = 'btn btn-success';
                $texto = 'Pago';
            }

            @endphp
            <tr>
                <td>{{$data}}</td>
                <td>{{$valor->description}}</td>
                <td>{{$preco}}</td>
                <td><p class="{{$classe}}">{{$texto}}</p></td>
                <td><a href="/dashboard/saidas/update/{{$valor->id}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href="/dashboard/saidas/destroy/{{$valor->id}}"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

</div>


@endsection