@extends('web.master.master')

@section('content')
    <!-- banner -->
<div class="inside-banner">
    <div class="container"> 
      <span class="pull-right"><a href="#">Home</a> / Sobre</span>
      <h2>Sobre</h2>
  </div>
  </div>
  <!-- banner -->
  
  
  <div class="container">
  <div class="spacer">
  <div class="row">
    <div class="col-lg-8  col-lg-offset-2">
    <img src="{{ url(asset('assets/img/about.jpg')) }}" class="img-responsive thumbnail"  alt="LaraImobiliaria">
    <h3>LaraImobiliaria</h3>
    <p>Imobiliaria criado com laravel 7 e admin voyager.</p>
    </div>
   
  </div>
  </div>
  </div>
@endsection