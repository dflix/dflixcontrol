@extends('template.main')

@section('title' , "Editar Orçamentos Admin")

@section('content')

<div class="container">
    <h1>Orçamento Editar</h1>
    <form method="post" action="/dashboard/orcamentos/update">
        @csrf
        @method('PUT')
        
        <div class="row">
        <div class="form-group col-md-6">
            <label>Empresa</label>
            <input type="text" name="company" value="{{$orcamento->company}}" class="form-control" />
        </div>
        <div class="form-group col-md-6">
            <label>Responsavel</label>
            <input type="text" name="name" value="{{$orcamento->name}}" class="form-control" />
        </div>
        

        <div class="form-group col-md-6">
            <label>Email</label>
            <input type="text" name="email" value="{{$orcamento->email}}" class="form-control" />
        </div>
        
        <div class="form-group col-md-6">
            <label>Telefone</label>
            <input type="text" name="phone" value="{{$orcamento->phone}}" class="form-control" />
        </div>

                
        <div class="form-group col-md-4">
            <label>Preço</label>
            <input type="text" name="price" value="{{$orcamento->price}}" class="form-control" />
        </div>

        
                
        <div class="form-group col-md-4">
            <label>Forma Pagamento</label>
            <input type="text" name="payment_method" value="{{$orcamento->payment_method}}" class="form-control" />
        </div>

                       
        <div class="form-group col-md-4">
            <label>Prazo de Entrega</label>
            <input type="text" name="time" value="{{$orcamento->time}}" class="form-control" />
        </div>

                               
        <div class="form-group col-md-12">
            <label>Orçamento</label>
            <textarea class="form-control" id="mytextarea" name="content"> {{$orcamento->content}} </textarea>
        </div>

        <div class="col-md-12">
            <input type="hidden" name="id" value="{{$orcamento->id}}" />
            <input type="submit" name="submit" value="CADASTRAR" class="btn btn-success" />
        </div>

        </div>
    </form>
</div>
<script src="https://cdn.tiny.cloud/1/m3hz4cg05xyawh6oij7oqfhs82e3sbhwud17vgxco9lbbg4j/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>


@endsection