@extends('template.main')

@section('title' , 'Cadastrar Clientes')

@section('content')

<div class="container">
    <h2>Atualizar Clientes</h2>
    <div class="col-md-12">
    <form action="/dashboard/clientes/update" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <label>Empresa</label>
                            <input type="text" class="form-control" value="{{$clientes->company}}" name="company" />
                        </div>
                        <div class="col-md-4">
                            <label>Responsável</label>
                            <input type="text" class="form-control" value="{{$clientes->name}}" name="name" />
                        </div>
                        <div class="col-md-4">
                            <label>CPF</label>
                            <input type="text" class="form-control" value="{{$clientes->cpf}}" name="cpf" />
                        </div>
                        <div class="col-md-4">
                            <label>CNPJ</label>
                            <input type="text" class="form-control" value="{{$clientes->cnpj}}" name="cnpj" />
                        </div>
                        <div class="col-md-6">
                            <label>E-mail</label>
                            <input type="text" class="form-control" value="{{$clientes->email}}" name="email" />
                        </div>
                        <div class="col-md-6">
                            <label>Whatsapp</label>
                            <input type="text" class="form-control" value="{{$clientes->phone}}" name="phone" />
                        </div>
                        <hr>
                        <div class="form-group col-md-3">
                            <label class="vinte">
                                CEP
                            </label>
                            <input name="cep" type="text" id="cep" value="{{$clientes->cep}}" class="form-control" maxlength="9" onblur="pesquisacep(this.value);" />
                        </div>

                        <div class="form-group col-md-7">
                            <label>
                                END.RES: </label>
                            <input name="endereco" type="text" id="endereco" value="{{$clientes->street}}" class="form-control" />
                        </div>
                        <div class="form-group col-md-2">
                            <label>Numeroº</label>
                            <input name="numero" type="text" id="numero" value="{{$clientes->number}}" class="form-control" />

                        </div>

                        <div class="form-group col-md-5">
                            <label>
                                COMPLEMENTO:
                            </label>
                            <input name="complemento" type="text" id="complemento" value="{{$clientes->complement}}" class="form-control" />
                        </div>

                        <div class="form-group col-md-3">
                            <label> BAIRRO : </label>
                            <input name="bairro" type="text" id="bairro" value="{{$clientes->counter}}" class="form-control" />
                        </div>

                        <div class="form-group col-md-2">
                            <label>CIDADE: </label>

                            <input name="cidade" type="text" id="cidade" value="{{$clientes->city}}" class="form-control" />
                        </div>

                        <div class="form-group col-md-2">
                            <label>UF:</label>
                            <input name="uf" type="text" id="uf" value="{{$clientes->uf}}" class="form-control" />
                        </div>


                        <div class="form-group col-md-3">
                            <label>Produto</label>
                            <input type="text" name="product" value="{{$clientes->product}}" class="form-control" />
                        </div>
                        

                        <div class="form-group col-md-2">
                            <label>Valor Setup</label>
                            <input type="text" name="setup" value="{{$clientes->setup}}" class="form-control" />
                        </div>

                                                

                        <div class="form-group col-md-2">
                            <label>Manutenção</label>
                            <input type="text" name="price" value="{{$clientes->price}}" class="form-control" />
                        </div>

                        
                        <div class="form-group col-md-2">
                            <label>Dia Pagamento</label>
                            <input type="text" name="day_payment" value="{{$clientes->day_payment}}" class="form-control" />
                        </div>

                        <div class="form-group col-md-3">
                        <label>Contrato</label>
                        <select class="form-control" name="contract">
                            <option value="{{$clientes->contract}}">{{$clientes->contract}}</option>
                            @foreach($contratos as $valor)
                            <option value="{{$valor->id}}">{{$valor->title}}</option>
                            @endforeach
                        </select>
                        </div>

                        <div class="col-md-12">
                            <input type="hidden" name="id" value="{{$clientes->id}}" />
                            <input type="submit" value="CONTRATAR" class="btn btn-success" />
                        </div>

                        </br></br>

                    </div>

                </form>
    </div>


</div>

<!-- Adicionando Javascript -->
<script type="text/javascript">
    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('endereco').value = ("");
        document.getElementById('bairro').value = ("");
        document.getElementById('cidade').value = ("");
        document.getElementById('uf').value = ("");

    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('endereco').value = (conteudo.logradouro);
            document.getElementById('bairro').value = (conteudo.bairro);
            document.getElementById('cidade').value = (conteudo.localidade);
            document.getElementById('uf').value = (conteudo.uf);

        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('endereco').value = "...";
                document.getElementById('bairro').value = "...";
                document.getElementById('cidade').value = "...";
                document.getElementById('uf').value = "...";


                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
</script>

@endsection