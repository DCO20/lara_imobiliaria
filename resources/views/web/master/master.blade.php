<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>LaraImobiliaria </title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="shortcut icon" href="{{ url(asset('assets/img/favicon.ico')) }}">

<link rel="stylesheet" href="{{ url(mix('assets/css/bootstrap.min.css')) }}" />
<link rel="stylesheet" href="{{ url(mix('assets/css/style.css')) }}"/> 
<link rel="stylesheet" href="{{ url(mix('assets/css/owl.carousel.css')) }}">
<link rel="stylesheet" href="{{ url(mix('assets/css/owl.theme.css')) }}">
<link rel="stylesheet" type="text/css" href="{{ url(mix('assets/css/slitslider/css/style.css')) }}" />
<link rel="stylesheet" type="text/css" href="{{ url(mix('assets/css/custom.css')) }}" />

  <script src="https://kit.fontawesome.com/b0d8aefb17.js" crossorigin="anonymous"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
</head>

<body>
<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="{{(Route::current()->getName() === 'web.home' ? 'active' : '')}}"><a href="{{ route('web.home')}}">Home</a></li>
                <li class="{{(Route::current()->getName() === 'web.about' ? 'active' : '')}}"><a href="{{ route('web.about')}}">Sobre</a></li>     
                <li class="{{(Route::current()->getName() === 'web.blog' ? 'active' : '')}}"><a href="{{ route('web.blog')}}">Blog</a></li>
                <li class="{{(Route::current()->getName() === 'web.contact' ? 'active' : '')}}"><a href="{{ route('web.contact')}}">Contato</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="{{ route('web.home')}}"><img src="{{ url(asset('assets/img/LaraImobiliaria.png')) }}" alt="LaraImobiliaria"></a>

              <ul class="pull-right">
                <li><a href="{{ route('web.sale')}}">Vendas</a></li>         
                <li><a href="{{ route('web.rent')}}">Alugar</a></li>
              </ul>
</div>
<!-- #Header Starts -->

</div>


@yield('content')




<div class="footer">

  <div class="container">
  <div class="row">
              <div class="col-lg-4 col-sm-3">
                  <h4>Informação</h4>
                  <ul class="row">
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{ route('web.sale')}}">Vendas</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{ route('web.rent')}}">Alugar</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{ route('web.about')}}">Sobre</a></li>         
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{ route('web.blog')}}">Blog</a></li>
                </ul>
              </div>
  
              
              <div class="col-lg-4 col-sm-3">
                      <h4>Notícias</h4>
                      <p>Cadastre seu email e receba as novidades diaramente.</p>
                      <form class="form-inline" role="form">
                              <input type="text" placeholder="Digite seu email" class="form-control">
                                  <button class="btn btn-success" type="button">Enviar</button></form>
              </div>
  
               <div class="col-lg-4 col-sm-3">
                      <h4>Contato</h4>
                      <p><b>LaraImobiliária</b><br>
  <span></span><i class="fas fa-envelope-square"></i> laraimobiliaria@lara.com<br>
  <span><i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp</span>  (99) 9999-9999
              </div>
          </div>
          <p>&copy; <?= date("Y"); ?> - Todos os Direitos Reservados</p>
  
  
  </div>
</div>
  
  
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="{{ url(mix('assets/js/bootstrap.js')) }}"></script>
  <script type="text/javascript" src="{{ url(mix('assets/js/script.js')) }}"></script>
  <script src="{{ url(mix('assets/js/owl.carousel.js')) }}"></script>
  <script src="{{ url(mix('assets/js/modernizr.custom.79639.js')) }}"></script>
  <script type="text/javascript" src="{{ url(mix('assets/js/jquery.ba-cond.min.js')) }}"></script>
  <script type="text/javascript" src="{{ url(mix('assets/js/jquery.slitslider.js')) }}"></script>

  </body>
  </html>
  
  
  