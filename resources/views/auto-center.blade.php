@extends('template.main')

@section('title' , "Auto Center")

@section('content')

<div class="container-fluid auto_top">
    <div class="container">
        <div class="bloco_autotop">
            <h1>Auto Center</h1>
            <div id="app2"></div>
        </div>

    </div>

</div>

<div class="auto_onelayer container p-3">
    <h2 class="borda">Site + Sistema de Gestão para Auto Center</h2>
    <p>Hoje em dia é fundamental seu negócio ter um endereço digital, um webiste, além disso é fundamental você ter,
        um sistema de gestão para controlar finanças de seu negócio e ter controle melhor de sua empresa
    </p>
    <p>Pensando nisso, a Dflix Control criou um sistema completo para seu Auto Center, além de um site moderno,
        responsivo, onde pode ser acessado tanto de celulares como de computadores ou tablets, nosso site
        oferece um sistema completo de gestão para seu Auto Center.
    </p>
    <p>Com o Dflix Control Auto Center você pode</p>
    <div class="row">
        <div class="col-md-3">
            <h1 class="text-center"><i class="fa-solid fa-globe"></i></h1>
            <h2 class="text-center">WebSite Profissional</h2>
            <p class="text-center">Tenha um website profissional e melhore a visualização de seu auto center na internet, emails profissionais</p>
        </div>

        <div class="col-md-3">
            <h1 class="text-center"><i class="fa-solid fa-file-import"></i></h1>
            <h2 class="text-center">Cadastro de Clientes</h2>
            <p class="text-center">Cadastre seus clientes e tenha um melhor controle de seus clientes, serviços e garantias.</p>
        </div>

        <div class="col-md-3">
            <h1 class="text-center"><i class="fa-solid fa-file-import"></i></h1>
            <h2 class="text-center">Cadastro de Fornecedores</h2>
            <p class="text-center">Cadastre seus fornecedores e tenha melhor controle de suas compras.</p>
        </div>

        <div class="col-md-3">
            <h1 class="text-center"><i class="fa-solid fa-file-import"></i></h1>
            <h2 class="text-center">Cadastro de Funcionários</h2>
            <p class="text-center">Cadastre seus funcionário e tenha controle de sua gestão pessoal.</p>
        </div>

        <div class="col-md-3">
            <h1 class="text-center"><i class="fa-solid fa-file-pdf"></i></h1>
            <h2 class="text-center">Geração de Documentos</h2>
            <p class="text-center">Geração de ordem de serviços, garantias , recibos e contratos </p>
        </div>


        <div class="col-md-3">
            <h1 class="text-center"><i class="fa-solid fa-plus"></i></h1>
            <h2 class="text-center">Contas à Receber</h2>
            <p class="text-center">Tenha total controle de suas contas à receber </p>
        </div>

        <div class="col-md-3">
            <h1 class="text-center"><i class="fa-solid fa-minus"></i></h1>
            <h2 class="text-center">Contas à Pagar</h2>
            <p class="text-center">Tenha total controle de suas contas à receber </p>
        </div>


        <div class="col-md-3">
            <h1 class="text-center"><i class="fa-regular fa-calendar-days"></i></h1>
            <h2 class="text-center">Agenda de Eventos</h2>
            <p class="text-center">Tenha total controle de suas agenda de trabalho, organize melhor seus serviços </p>
        </div>

    </div>
</div>

<div class="auto_layer bg-laranja">
    <div class="row">
        <div class="col-md-6 celular">
            <img src="/image/celular.png" alt="dfix control auto center" title="Dflix Control Auto Center" width="100%" />
        </div>
        <div class="col-md-6 text-white">
</br>
            <h3>Não precisa Computador ou Impressora ?</h3>
            <p>Gere documentos , recibos e garantias, e envie para seu cliente de uma forma digital via whatsapp ou e-mail.</p>
            <p>Basta ter celular com acesso a internet para acessar a área administrativa, e ter acesso a todas as funções do sistema. </p>
        <ul>
            <li>SITE PROFISSIONAL E RESPONSIVO , ADAPTADO PARA CELULARES, TABLET E DESKTOP</li>
            <li>E-MAIL PROFISSIONAL COM NOME DE SUA EMPRESA.</li>
            <li>SISTEMA DE GESTÃO COMPLETO PARA SEU AUTO-CENTER</li>
            <li>CADASTRO DE CLIENTES</li>
            <li>CADASTRO DE FORNECEDORES</li>
            <li>CADASTRO DE FUNCIONÁRIOS</li>
            <li>GERAÇÃO DE ORÇAMENTOS</li>
            <li>GERAÇÃO DE ORDENS DE SERVIÇO, GARANTIAS E RECIBOS DIGITAL (PDF)</li>
            <li>ENVIE NOTIFICAÇÕES PARA SEU CLIENTE VIA WHATSAPP EM 1 CLICK</li>
        </ul>
        </div>
    </div>
</div>

<div class="auto_twolayer">
    <div class="container-fluid" id="contrate">
        <div class="row">
            <div class="col-md-6 text-center">
                </br>
                <h2 class="borda">Condição Especial</h2>
                <h3 class="text-laranja">Setup Inicial <span style="text-decoration: line-through;"> R$1.690,00</span> </h3>
                <p>Instalação + edição layout do site + treinamento</p>
                <h1 class="text-laranja text-center">Por tempo limitado </br> Setup Inicial R$250,00</h1>

                <h3>Mensalidade de Manutenção</h3>
                <h5 class="text-laranja">R$149,90 (mensal) <small>pagamento mensal via PIX</small></h5>
                <p>Equivalente hospedagem + manutenção periódica + suporte técnico
                </p>
                <p>Suporte técnico via <b>acesso remoto</b> ,<b>whatsapp</b> , <b>telefone</b></p>
            </div>

            <div class="col-md-6">
                <h3>Contrate</h3>
                @if(session('msg'))
    <p class="alert alert-success"> Parabéns !. Contratação efetuada com sucesso, envie valor de Setup do Projeto nop valor de R$ <b>250.00</b>
    para o PIX chave <b>Celular (11)952409765</b>, e envie comprovante de transferencia para dar inicio ao seu projeto. Duvidas por favor fale com Marcio Leite via whatsapp (11)95240-9765</p>
                @endif
                <p class="alert alert-warning">Contrate Agora e ganhe cadastro gratuito do seu site nos mapas do Google!</p>
                <form action="/produtos/auto-center/cad" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label>Empresa</label>
                            <input type="text" class="form-control" name="company" />
                        </div>
                        <div class="col-md-4">
                            <label>Responsável</label>
                            <input type="text" class="form-control" name="name" />
                        </div>
                        <div class="col-md-4">
                            <label>CPF</label>
                            <input type="text" class="form-control" name="cpf" />
                        </div>
                        <div class="col-md-4">
                            <label>CNPJ</label>
                            <input type="text" class="form-control" name="cnpj" />
                        </div>
                        <div class="col-md-6">
                            <label>E-mail</label>
                            <input type="text" class="form-control" name="email" />
                        </div>
                        <div class="col-md-6">
                            <label>Whatsapp</label>
                            <input type="text" class="form-control" name="phone" />
                        </div>
                        <hr>
                        <div class="form-group col-md-3">
                            <label class="vinte">
                                CEP
                            </label>
                            <input name="cep" type="text" id="cep" value="" class="form-control" maxlength="9" onblur="pesquisacep(this.value);" />
                        </div>

                        <div class="form-group col-md-7">
                            <label>
                                END.RES: </label>
                            <input name="endereco" type="text" id="endereco" class="form-control" />
                        </div>
                        <div class="form-group col-md-2">
                            <label>Numeroº</label>
                            <input name="numero" type="text" id="numero" class="form-control" />

                        </div>

                        <div class="form-group col-md-5">
                            <label>
                                COMPLEMENTO:
                            </label>
                            <input name="complemento" type="text" id="complemento" class="form-control" />
                        </div>

                        <div class="form-group col-md-3">
                            <label> BAIRRO : </label>
                            <input name="bairro" type="text" id="bairro" class="form-control" />
                        </div>

                        <div class="form-group col-md-2">
                            <label>CIDADE: </label>

                            <input name="cidade" type="text" id="cidade" class="form-control" />
                        </div>

                        <div class="form-group col-md-2">
                            <label>UF:</label>
                            <input name="uf" type="text" id="uf" class="form-control" />
                        </div>

                        <div class="form-group col-md-12">
                            <textarea class="form-control">
            CONTRATO PARA PRESTAÇÃO DE SERVIÇOS DE DESENVOLVIMENTO DE SITE
Pelo presente instrumento e na melhor forma de direito, de um lado ,a empresa cadastrada no formulário acima doravante denominado CONTRATANTE e de
outro lado a empresa DFLIX CONTROL DESENVOLVIMENTO DE SOFTWARE LTDA, inscrita no CNPJ sob nº
13.637.835/0001-07, estabelecida a Av Itajuibe, 545 – 22 C -  Itaim Paulista, CEP 08120-470, São Paulo / SP,
doravante denominada CONTRATADO.
CLÁUSULA PRIMEIRA – OBJETO:
 Desenvolvimento de site:
 Desenvolvimento de layout das telas que compõem o site;
 Desenvolvimento da modelagem de banco de dados que compõem o site;
 Desenvolvimento da programação do site.
CLÁUSULA SEGUNDA – RESPONSABILIDADES DO CONTRATADO:
 Realizar o desenvolvimento do site, objeto do presente instrumento;
 Realizar a instalação/implantação do site, objeto do presente instrumento;
 Realizar o treinamento dos indivíduos/usuários indicados pelo CONTRATANTE que irão utilizar o site, através
de telefone e suporte online, e-mail, acesso remoto ou chat;
 Promover a reciclagem dos indivíduos/usuários, na hipótese do CONTRATANTE adquirir versões mais
atualizadas do site;
 Promover as devidas correções no que concerne às falhas e/ou impropriedades do site, bem como atualizar o
mesmo, por razão de erro não detectado anteriormente;
 Fornecer suporte técnico ao CONTRATANTE, ou qualquer outro atendimento ou consulta, referente ao site,
de segunda-feira à sexta-feira, das 9h às 18h (horário de Brasília);
 Não divulgar, transferir, fornecer ou ceder, a qualquer título, quaisquer dados ou informações do
CONTRATANTE e seus clientes, contidos no banco de dados e/ou obtidos por força do presente instrumento.
CLÁUSULA TERCEIRA – RESPONSABILIDADES DO CONTRATANTE:
 Remunerar o CONTRATADO, nos termos descritos na Cláusula Quinta (Pagamento);
 Utilizar o site de acordo com suas finalidades e exigências técnicas;
 Responsabilizar-se legalmente pelos dados e informações armazenados no site;
 Responsabilizar-se por qualquer infração legal, nos âmbitos civil, penal, autoral e todos os demais, que
eventualmente venha a ser cometida com a utilização do site;
 Disponibilizar os dados e informações necessárias como textos, fotos, logos, desenhos, esboços e qualquer
outro material para o desenvolvimento do site.
CLÁUSULA QUARTA – PRAZO DE ENTREGA
 Fica estipulado ao CONTRATADO o prazo de 15( quinze ) dias para
a entrega e conclusão do site, integralmente conforme descrição na Cláusula Primeira (Objeto) ao CONTRATANTE a
contar a partir da data de assinatura deste Instrumento e do envio dos dados, informações e materiais necessários.
 Após a entrega do site o CONTRATANTE deverá solicitar ao CONTRATADO suas devidas correções em um
relatório único por escrito no prazo máximo de 10 (dez) dias, onde as mesmas serão efetuadas pelo CONTRATADO em
um prazo máximo de 5 (cinco) dias.
 Caso o CONTRATANTE não envie ao CONTRATADO relatório de correções no prazo estabelecido, o serviço
será dado como concluído.
CLÁUSULA QUINTA – PAGAMENTO:
O valor total do serviço, conforme proposta apresentada pelo CONTRATADO é de R$ 250.00
( Duzentos e cinquenta  ) reais, pago 
através de TRANSFERENCIA PIX a ser emitido pelo CONTRATADO e devidamente enviado ao CONTRATANTE através de
 whatspp (11)95240-9765.
Obriga-se ainda o CONTRATANTE a pagar mensalmente ao CONTRATADO o valor de R$ 149.90
( cento e quarenta e nove reais e noventa centavos ) , referente a hospedagem, suporte e manutenção do site.
DFLIX CONTROL DESENVOLVIMENTO DE SOFTWARE LTDA

Em caso de atraso no pagamento das parcelas ou mensalidades do CONTRATANTE incorrerá em multa de
10%, sem prejuízo de atualização monetária e juros de 1% ao mês, tudo na forma da lei. Se o atraso for superior a 3
15 DIAS  será feita o cancelamento dos serviços prestados e consequentemente a retirada do site do servidor;
Os valores previstos neste instrumento em forma de mensalidade serão reajustados anualmente, conforme a
variação do IGP-M (FGV), ou em caso de sua extinção, pelo índice que vier a substituí-lo.

CLÁUSULA SEXTA – DO PRAZO DO CONTRATO:
 O presente contrato vigorará por prazo indeterminado, todavia seu início é condicionado à assinatura deste e
sua resolução dar-se-á com o fiel cumprimento das obrigações aqui assumidas por ambas as partes.
CLÁUSULA SÉTIMA – RESCISÃO, DESISTÊNCIA OU CANCELAMENTO:

 O presente instrumento poderá ainda ser rescindido por solicitação do CONTRATANTE, sem custas ou multas,
desde que o pagamento integral do objeto deste instrumento esteja quitado e suas mensalidades em dia.
 No caso de atraso por mais de 30 (trinta) dias no pagamento da mensalidade do serviço de hospedagem,
suporte e manutenção este contrato poderá ser rescindido e o serviço cancelado pelo CONTRATADO sem qualquer
aviso prévio e os arquivos do site deletados.
CLÁUSULA OITAVA – DAS DISPOSIÇÕES GERAIS:
 Caso o CONTRATADO, por qualquer motivo, deixe de atuar na área de informática, ou de prestar os serviços
relativos ao site em questão, serão indicados novos representantes para que possam continuar o serviço, assegurando
ao CONTRATANTE a continuidade na prestação de serviços técnicos relativos ao adequado funcionamento do site.
CLÁUSULA NONA – DO FORO:
 Fica eleito o Foro da Cidade de São Paulo para dirimir quaisquer dúvidas que venham a surgir
e não encontrem entendimentos entre as partes.
 E por estarem justos e acordados, assinam o presente Contrato  para
que o mesmo faça cumprir seus efeitos legais à partir da presente data. 

            </textarea>
                        </div>
                        <div class="col-md-12">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sign" value="1" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Concordo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sign" value="0" id="flexRadioDefault2" >
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Não concordo
                                </label>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <input type="hidden" name="product" value="AUTO CENTER" />
                            <input type="hidden" name="setup" value="0" />
                            <input type="hidden" name="price" value="149.99" />
                            <input type="submit" value="CONTRATAR" class="btn btn-success" />
                        </div>

                        </br></br>

                    </div>

                </form>

            </div>
        </div>

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