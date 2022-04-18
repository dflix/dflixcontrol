@extends('template.main')

@section('title' , "Dflix Control Solução Web")

@section('content')

<div class="tophome">
    <div class="container">
        <div class="blocotop">
        <h1 style="color:#F29200;">DFLIX CONTROL</h1>
      
        
                <h3>  <div id="app" class="app"></div>  </h3>
                
        </div>
   
    </div>


</div>
<div class="onelayer container">
    <div class="row">

        <div class="col-md-3">
        </br>
            <h1 class="text-center"><i class="fa-solid fa-desktop"></i></h1>
            <h2 class="text-center">Criação de Sites</h2>
            <p class="text-center">Criação de sites personalizados, responsivos, amigaveis para motores de buscas</p>
        </div>
        
        <div class="col-md-3">
        </br>
            <h1 class="text-center"><i class="fa-solid fa-cash-register"></i></h1>
            <h2 class="text-center">Lojas Virtual</h2>
            <p class="text-center">Extenda as vendas além de seu balcão, venda pela internet e aumente seu faturamento </p>
        </div>
        

                
        <div class="col-md-3">
        </br>
            <h1 class="text-center"><i class="fa-solid fa-mobile-screen-button"></i></h1>
            <h2 class="text-center">Aplicativos</h2>
            <p class="text-center">Criação de aplicativos, coloque suas idéias em prática, crie seu aplicativo personalizado </p>
        </div>

        

        <div class="col-md-3">
        </br>
            <h1 class="text-center"><i class="fa-solid fa-window-maximize"></i></h1>
            <h2 class="text-center">Sistema de Gestão ERP e CRM</h2>
            <p class="text-center">Cadastro de clientes, fornecedores , gestão de estoque e rotinas administrativas de acordo com necessidades de seu negócio </p>
        </div>

    </div>
</div>

<div class="twolayer">
    <div class="container-fluid" id="formulario">
        <div class="row">
            <div class="col-md-6 programador">
</br>
            <h2 class="text-dark borda">Fale com o Especialista</h2>
                <p class="text-dark">Traga sua idéia para nós, vamos analisar sua idéia e viabilizar as melhores condições.</p>
                
                
            </div>
            <div class="col-md-6">
</br>
                <h3 class="borda">Preencha Formulário</h3>
                @if(session('msg'))
                <p class="alert alert-success">Orçamento enviado com sucesso, aguarde retorno, obrigado pelo contato.</p>
                @endif
                <form action="/formulario" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="name" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" name="email" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="phone" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label>Qual é sua idéia?</label>
                        <textarea name="message" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ENVIAR" class="btn btn-warning" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection