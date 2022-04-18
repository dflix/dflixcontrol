@extends('template.main')

@section('title' , "Orçamentos Admin")

@section('content')

<div class="container">
   <h1>Orçamentos</h1>

   <div id="search-container" class="col-md-12">
<h1>Busque o Orçamento</h1>
<form action="" method="get"> 
  <input type="text" class="form-control" id="search" name="search" placeholder="Procurar ..." />

</form>

<div class="col-md-12">
    <a href="/dashboard/orcamentos/create"><button class="btn btn-success">Cadastrar</button></a>
</div>
</div>

   <table class="table">
    <thead>
        <tr>
            <th>Data</th>
            <th>Empresa</th>
            <th>Cliente</th>
            <th>E-mail</th>
            <th>telefone</th>
            <th>Conteudo</th>
            <th>Preço</th>
            <th>Prazo</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        @foreach($budget as $valor)
        @php
        $preco = number_format($valor->price, 2, ",",".");
        $datas = date("m/d/Y",strtotime($valor->data));
        @endphp
        <tr>
            <td>{{$datas}}</td>
            <td>{{$valor->company}}</td>
            <td>{{$valor->name}}</td>
            <td>{{$valor->email}}</td>
            <td>{{$valor->phone}}</td>
            <td>{{$valor->content}}</td>
            <td>{{$preco}}</td>
            <td>{{$valor->time}}</td>
            <td><a href="/dashboard/orcamentos/update/{{$valor->id}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href="/dashboard/orcamentos/destroy/{{$valor->id}}"><i class="fa-solid fa-trash-can"></i></a></td>
        </tr>
        @endforeach
    </tbody>
   </table>
   
</div>


@endsection