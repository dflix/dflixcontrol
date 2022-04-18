@extends('template.main');

@section('title' , 'Cobranças');

@section('content')

<div class="container">
    <h2>Cobranças {{ $clientes->company }}</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Vencimento</th>
                <th>Cliente</th>
                <th>Valor</th>
                <th>Status</th>
                <th>Editar</th>
                <th>Remover</th>
            </tr>
        </thead>

        <tbody>
            @foreach($invoices as $valor)

            @php
            $data = date("d/m/Y",strtotime($valor->day_payment));
            $preco = number_format($valor->price,2,".",",");

            if($valor->status == 'paid'){
                $status = "btn btn-success";
                $texto = "PAGO";

            }
            
            if($valor->status == 'unpaid'){
                $status = "btn btn-danger";
                $texto = "NÃO PAGO";

            }

            @endphp
            <tr>
                <td>{{$data}}</td>
                <td>{{$valor->description}}</td>
                <td>{{$preco}}</td>
                <td><p class="{{$status}}"> {{$texto}} </p></td>
                <td><a href="/dashboard/clientes/cobranca/update/{{$valor->id}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href="/dashboard/clientes/cobranca/destroy/{{$valor->id}}"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>
            @endforeach
        </tbody>

    </table>

    <form action="/dashboard/clientes/cobranca/store" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <label>Descrição</label>
                <input type="text" name="description" value="Manutenção {{$clientes->company}}" class="form-control" />
            </div>
            <div class="col-md-4">
                <label>Valor</label>
                <input type="text" name="price" value="{{$clientes->price}}" class="form-control" />
            </div>
            <div class="col-md-4">
                <label>Data Vencimento</label>
                <input type="date" id="date" name="day_payment" class="form-control" />
            </div>
            <div class="col-md-4">
                <label>Tipo</label>
                <select name="type" class="form-control">
                        <option value="1">Unica</option>
                        <option value="2">Parcelas</option>
                </select>
            </div>
            <div class="col-md-4">
                <label>Parcelas</label>
                <select name="quote" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                </select>
            </div>
            <div class="col-md-12">
                <input type="hidden" name="customer" value="{{$clientes->id}}" />
                <input type="hidden" name="mode" value="1" />
                <input type="submit" class="btn btn-success" value="CADASTRAR" />
            </div>
        </div>
    </form>

    
</div>

@endsection