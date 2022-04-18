@extends('template.main')

@section('title' , 'Contratos')

@section('content')

<div class="container">
    <h2>Cadastrar Contratos</h2>

    <form action="/dashboard/contratos/update" method="post">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label>Titulo</label>
        <input type="text" name="title" value="{{$contrato->title}}" class="form-control" />
    </div>
    <div class="form-group">
        <label>Conteudo</label>
        <textarea name="content" id="mytextarea"> {{$contrato->content}}</textarea>
    </div>
    <div class="form-group">
        <input type="hidden" name="id" value="{{$contrato->id}}" />
        <input type="submit" class="btn btn-success" value="CADASTRAR" />
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