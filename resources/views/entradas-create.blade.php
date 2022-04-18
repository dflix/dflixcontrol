@extends('template.main')

@section('title' , 'Entradas')

@section('content')

<div class="container">
    <h3>Entradas</h3>
    <form action="/dashboard/entradas/store" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <label>Descrição</label>
                <input type="text" name="description"  class="form-control" />
            </div>
            <div class="col-md-4">
                <label>Valor</label>
                <input type="text" name="price" class="form-control" />
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
                <input type="hidden" name="customer" value="0" />
                <input type="hidden" name="mode" value="1" />
                <input type="submit" class="btn btn-success" value="CADASTRAR" />
            </div>
        </div>
    </form>
</div>


@endsection