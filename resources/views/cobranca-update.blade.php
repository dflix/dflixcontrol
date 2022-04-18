@extends('template.main')

@section('title' , 'Cobranças')

@section('content')

<div class="container">
    <h2>Editar Cobrança {{$invoice->id}}</h2>

    <form action="/dashboard/clientes/cobranca/update" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <label>Descrição</label>
                <input type="text" name="description" value="Manutenção {{$invoice->company}}" class="form-control" />
            </div>
            <div class="col-md-4">
                <label>Valor</label>
                <input type="text" name="price" value="{{$invoice->price}}" class="form-control" />
            </div>
            <div class="col-md-3">
                <label>Data Vencimento</label>
                <input type="date" id="date" name="day_payment" value="{{$invoice->day_payment}}" class="form-control" />
            </div>
            <div class="col-md-3">
                <label>Tipo</label>
                <select name="type" class="form-control">
                    <option value="{{$invoice->type}}">{{$invoice->type}}</option>
                        <option value="1">Unica</option>
                        <option value="2">Parcelas</option>
                </select>
            </div>
            <div class="col-md-3">
                <label>Parcelas</label>
                <select name="quote" class="form-control">
                    <option value="{{$invoice->quote}}"> {{$invoice->quote}}</option>
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

            <div class="col-md-3">
                <label>Status</label>
                <select name="status" class="form-control">
                <option value="{{$invoice->status}}">{{$invoice->status}}</option>
                    <option value="paid">Paid</option>
                    <option value="unpaid">UnPaid</option>
                </select>
            </div>
            <div class="col-md-12">
                <input type="hidden" name="customer" value="{{$invoice->customer}}" />
                <input type="hidden" name="id" value="{{$invoice->id}}" />
                <input type="hidden" name="mode" value="1" />
                <input type="submit" class="btn btn-success" value="CADASTRAR" />
            </div>
        </div>
    </form>

</div>


@endsection