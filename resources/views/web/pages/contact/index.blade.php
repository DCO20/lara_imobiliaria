@extends('web.master.master')

@section('content')
    <!-- banner -->
<div class="inside-banner">
    <div class="container"> 
      <span class="pull-right"><a href="#">Home</a> / Contato</span>
      <h2>Contato</h2>
  </div>
  </div>
  <!-- banner -->
  
  <div style="margin-top: 16px">
    @include('web.includes.alerts')
  </div>

  <div class="container">
  <div class="spacer">
  <div class="row contact">
    <form action="{{ url('/email-send')}}" method="post">
      @csrf
      <div class="col-lg-6 col-sm-6 ">
        <input name="name" type="text" class="form-control" placeholder="Digite seu nome">
        <input name="email" type="text" class="form-control" placeholder="Digite seu email">
        <textarea name="message" rows="6" class="form-control" placeholder="Digite sua mensagem"></textarea>
        <button type="submit" class="btn btn-success" name="Submit">Enviar</button>    
    </div>
    <div class="col-lg-6 col-sm-6 ">
    <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
    </div>
    <div class="col-lg-6 col-sm-6 ">
        <button type="submit" class="btn btn-primary" name="Submit"><i class="fa fa-whatsapp" aria-hidden="true"></i> Fale através do WhatsApp</button>
    </div>
    </form>
  </div>
  </div>
  </div>
@endsection