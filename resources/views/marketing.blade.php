@extends('template.main')

@section('title' , "Marketing")

@section('content')

<div class="container">
    <h1>Marketing</h1>
    <p>site:www.facebook.com + auto center + "whatsapp" + "(11)"</p>
    <form method="post" action="/dashboard/marketing/store">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label>Termo Busca</label>
                <input type="text" name="termo" class="form-control" />
            </div>
            <div class="col-md-6">
                <label>DDD</label>
                <input type="text" name="ddd" class="form-control" />
            </div>
            <div class="col-md-12">
                <label>Conteudo</label>
                <textarea class="form-control" name="conteudo"></textarea>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success"  value="FILTRAR"/>
            </div>
        </div>

    </form>


    <hr>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Empresa</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach($marketing as $valor)
            @php
                $i++;
            @endphp
            <tr>
                <td>{{$i}}</td>
                <td>{{$valor->name}}</td>
                <td>{{$valor->phone}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>

    <h3><a href="{{route('excel')}}">Fazer Download Planilha</a></h3>

    <h3 class="btn btn-danger"><a href="{{route('truncate')}}" style="text-decoration:none;color:#fff;">Limpar Tabela</a></h3>
</div>


@endsection