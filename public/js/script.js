

function goTo(element , speed){
    var href = element.attr('href');
    var top = $(href).offset().top;
    $("html,body").animate({scrollTop : top }, speed);
};
  
$( "a" ).click(function() {
  goTo($(this) , 500);
});


$(document).ready(function () {

            $(".js_box").animate({"left": 800}, 1000, function () {
           
        })
            $(".js_box2").animate({"top": 150}, 1000, function () {
           
        })

});

$(document).ready(function(){
    
   var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
    loop: true
});

typewriter.typeString('Solução Web para seu negócio')
    .pauseFor(2500)
    .deleteAll()
    .typeString('Criação de Sites, Aplicativos, Lojas Virtual, Sistema de Gestão')
    .pauseFor(2500)
    .deleteChars(63)
    .typeString('Projetos personalizados de acordo necessidades de seu negócio')
    .pauseFor(2500)
    .start();
    
});

$(document).ready(function(){
    
    var app2 = document.getElementById('app2');
 
 var typewriter = new Typewriter(app2, {
     loop: true
 });
 
 typewriter.typeString('2022 e seu Auto Center ainda não tem um site ?')
     .pauseFor(2500)
     .deleteAll()
     .typeString('Que tal além de um site você ter um sistema de gestão completo para seu Auto Center ?')
     .pauseFor(2500)
     .deleteAll()
     .typeString('Sistema que controla contas a pagar, contas a receber, estoque, cadastro de clientes, fornecedores , funcionarios e muito mais...')
     .pauseFor(2500)
     .deleteAll()
     .typeString('Aproveite essa oportunidade e mude o patamar de seu negócio.')
     .start();
     
 });






    
    
   



    




