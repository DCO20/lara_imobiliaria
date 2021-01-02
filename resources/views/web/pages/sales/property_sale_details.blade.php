@extends('web.master.master')

@section('content')

<div class="inside-banner">
    <div class="container"> 
      <span class="pull-right"><a href="{{ route('web.home')}}">Home</a> / Detalhes do imóvel</span>
      <h2>Detalhes do imóvel</h2>
  </div>
  </div>
  
  <div class="container">
  <div class="properties-listing spacer">
  
  <div class="row">
  <div class="col-lg-3 col-sm-4 hidden-xs">
  
  <div class="hot-properties hidden-xs">
    
        
    
  <h4>Imóveis Recentes</h4>
  @foreach ($propertyForSalesRecent as $detail)
    <div class="row">
      <div class="col-lg-4 col-sm-5"><img src="{{ url("storage/{$detail->image}") }}" class="img-responsive img-circle" alt="{{ $detail->name }}"/></div>
          <div class="col-lg-8 col-sm-7">
            <h5><a href="{{ url('/imoveis/venda/'.$detail->slug.'/detalhes')  }}">{{ $detail->name }}</a></h5>
          <p class="price">R$ {{ number_format($detail->price, 2, ',', '.') }}</p> 
      </div>
    </div>
    @endforeach
                
  </div>
  
  
  
  <div class="advertisement">
    <h4>Anúncios</h4>
    <img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">
  
  </div>
  
  </div>
  
  <div class="col-lg-9 col-sm-8 ">
  
  <h2>{{  $propertyForSalesDetails->name }}</h2>
  <div class="row">
    <div class="col-lg-8">
    <div class="property-images">
      <!-- Slider Starts -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators hidden-xs">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
          <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        </ol>
        <div class="carousel-inner">
          <!-- Item 1 -->
          <div class="item active">
            <img src=" {{ url("storage/{$propertyForSalesDetails->image}") }} " class="properties" alt="properties" />
          </div>
          <!-- #Item 1 -->
  
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
  <!-- #Slider Ends -->
  
    </div>
    
  
  
  
    <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Descriçao</h4>
    <p>{{  $propertyForSalesDetails->description }}.</p>
  
    </div>
    <div><h4><span class="glyphicon glyphicon-map-marker"></span> Localização</h4>
  <div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
    </div>
  
    </div>
    <div class="col-lg-4">
    <div class="col-lg-12  col-sm-6">
  <div class="property-info">
  <p class="price">R$ {{ number_format($propertyForSalesDetails->price, 2, ',', '.') }}</p>
    <p class="area"><span class="glyphicon glyphicon-map-marker"></span> {{  $propertyForSalesDetails->city }}, {{  $propertyForSalesDetails->state }}</p>
    
  </div>
  
      <h6><span class="glyphicon glyphicon-home"></span> Disponibilidade</h6>
      <div class="listing-detail">
      <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
      <p>Área Total = {{ $propertyForSalesDetails->area_total }} m&sup2;</p>
     
    
  
  </div>
  <div class="col-lg-12 col-sm-6 ">
  <div class="enquiry">
    <h6><span></span><i class="fas fa-envelope-square"></i> Entre em contato</h6>
    <form role="form">
                  <input type="text" class="form-control" placeholder="Digite seu nome"/>
                  <input type="text" class="form-control" placeholder="Digite seu email"/>
                  <textarea rows="6" class="form-control" placeholder="Digite sua mensagem"></textarea>
        <button type="submit" class="btn btn-primary" name="Submit">Enviar Menssagem</button>
        </form>
   </div>  
   <br>
    <div>
      <button type="submit" class="btn btn-primary" name="Submit"><i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp</button>
    </div>       
  </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
@endsection