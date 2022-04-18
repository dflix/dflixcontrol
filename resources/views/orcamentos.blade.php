@extends('template.main')

@section('title' , "Dashboard")

@section('content')

<div class="container">
    <h1>Dashboard</h1>
    <p>Olá {{auth()->user()->name}} , seja bem vindo, área administrativa</p>
</div>

@endsection