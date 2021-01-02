@extends('web.master.master')

@section('content')
<div class="inside-banner">
    <div class="container"> 
      <span class="pull-right"><a href="{{route('web.home')}}">Home</a> / Venda</span>
      <h2>Venda</h2>
  </div>
  </div>
  <!-- banner -->
  
  
  <div class="container">
  <div class="properties-listing spacer">
  
  <div class="row">
  <div class="col-lg-3 col-sm-4 ">
  
    
  
  
  <div class="hot-properties hidden-xs">
  <h4>Imóveis Recentes</h4>
    @foreach ($propertyForSalesRecent as $sale)
    <div class="row">
        <div class="col-lg-4 col-sm-5"><img src="{{ url("storage/{$sale->image}") }}" class="img-responsive img-circle" alt="{{ $sale->name }}"></div>
            <div class="col-lg-8 col-sm-7">
            <h5><a href="{{ url('/imoveis/venda/'.$sale->slug.'/detalhes')  }}">{{$sale->name}}</a></h5>
            <p class="price">R$ {{ number_format($sale->price, 2, ',', '.') }}</p> </div>
        </div>
        @endforeach
    </div>
  
  
  </div>
  
  <div class="col-lg-9 col-sm-8">
  <div class="row">
  
       <!-- properties -->
       @foreach ($propertyForSales as $sale)
           
       
        <div class="col-lg-4 col-sm-6">
        <div class="properties">
          <div class="image-holder"><img src="{{ url("storage/{$sale->image}") }}" class="img-responsive" alt="{{ $sale->name }}">
            
          </div>
          <h4><a href="{{ url('/imoveis/venda/'.$sale->slug.'/detalhes')  }}">{{$sale->name}}</a></h4>
          <p class="price">R$ {{ number_format($sale->price, 2, ',', '.') }}</p>
          <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Dormitórios">{{$sale->bedrooms}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Suites">{{$sale->suites}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Banheira">{{$sale->bathrooms}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Garagem">{{$sale->garage}}</span> </div>
          <a class="btn btn-primary" href="{{ url('/imoveis/venda/'.$sale->slug.'/detalhes')  }}">Ver Detalhes</a>
        </div>
        </div>
        @endforeach
        <!-- properties -->
  
  
       
        <div class="center">
  <ul class="pagination">
    {{ $propertyForSales->links()}}
          </ul>
  </div>
  
  </div>
  </div>
  </div>
  </div>
  </div>
@endsection