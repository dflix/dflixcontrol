<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"-->
    <link rel="stylesheet" href="/css/custom-bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/7e04532e8d.js" crossorigin="anonymous"></script>
    

    <title>@yield('title')</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9F22VJ8ZY0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9F22VJ8ZY0');
</script>

<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '978157672894778');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=978157672894778&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
  </head>
  <body>
<div class="container-fluid bg-branci navbarr">
    <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-branco">
  <a class="navbar-brand" href="/">
      <img src="/image/logo.png" width="200" />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    @if(!auth()->user())
      <li class="nav-item active">
        <a class="nav-link" href="/"><i class="fa-solid fa-house"></i> Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/produtos"><i class="fa-solid fa-atom"></i> Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/videos"><i class="fa-solid fa-circle-play"></i> Treinamento (videos)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contato"><i class="fa-solid fa-phone-volume"></i> Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login"><i class="fa-solid fa-user-tie"></i> Admin</a>
      </li>
      
      @endif
      @if(auth()->user())
      <li class="nav-item">
        <a class="nav-link" href="/dashboard"><i class="fa-solid fa-dashboard"></i> Dashboard</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/dashboard/contatos"><i class="fa-solid fa-file"></i> Contatos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/dashboard/contratos"><i class="fa-solid fa-file"></i> Contratos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/dashboard/orcamentos"><i class="fa-solid fa-file"></i> Orçamentos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/dashboard/clientes"><i class="fa-solid fa-user"></i> Clientes</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/dashboard/marketing"><i class="fa-solid fa-lightbulb"></i> Marketing</a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" href="/dashboard/entradas"><i class="fa-solid fa-plus"></i> Entradas</a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" href="/dashboard/saidas"><i class="fa-solid fa-minus"></i> Saidas</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/sair"><i class="fa-solid fa-dashboard"></i> Sair</a>
      </li>
      @endif

    </ul>
  </div>
</nav>
    </div>
</div>


    @yield('content')



    <footer class="container-fluid bg-preto footer text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Dflix Control</h3>
                    <p>Criação de Sites, Lojas Virtual, Aplicativos, Sistemas de Gestão ERP / CRM</p>
                    <p>CNPJ: 04.301.876/00001-00</p>
                </div>
                <div class="col-md-3">
                    <h3>Institucional</h3>
                    <ul>
                        <li><a href="/" style="text-decoration: none; color: #fff;">Home</a></li>
                        <li><a href="/produtos" style="text-decoration: none; color: #fff;">Produtos</a></li>
                        <li><a href="/videos" style="text-decoration: none; color: #fff;">Treinamentos</a></li>
                        <li><a href="/contato" style="text-decoration: none; color: #fff;">Contato</a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h3># Social Mídia</h3>
                  <p style="font-size: 1.5em; color:#fff;">  <i class="fa-brands fa-facebook-square"></i>  <i class="fa-brands fa-instagram-square"></i>  <i class="fa-brands fa-whatsapp-square"></i></p>
                </div>
            </div>
            <p class="text-center text-white"><small>Desenvolvido por Dflix Control</small></p>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
    <script src="https://safi.me.uk/typewriterjs/js/typewriter.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>