@extends('web.master.master')

@section('content')
<div class="inside-banner">
    <div class="container"> 
      <span class="pull-right"><a href="{{route('web.home')}}">Home</a> / Alugar</span>
      <h2>Alugar</h2>
  </div>
  </div>
  <!-- banner -->
  
  
  <div class="container">
  <div class="properties-listing spacer">
  
  <div class="row">
  <div class="col-lg-3 col-sm-4 ">
  
  <div class="hot-properties hidden-xs">
  <h4>Imóveis Recentes</h4>
    @foreach ($propertyForRentsRecent as $rent)
    <div class="row">
        <div class="col-lg-4 col-sm-5"><img src="{{ url("storage/{$rent->image}") }}" class="img-responsive img-circle" alt="{{ $rent->name }}"></div>
            <div class="col-lg-8 col-sm-7">
            <h5><a href="{{ url('/imoveis/alugar/'.$rent->slug.'/detalhes')  }}">{{$rent->name}}</a></h5>
            <p class="price">R$ {{ number_format($rent->price, 2, ',', '.') }}</p> </div>
        </div>
        @endforeach
    </div>
  
  
  </div>
  
  <div class="col-lg-9 col-sm-8">
    <div class="row">
  
       <!-- properties -->
       @foreach ($propertyForRents as $rent)
           
       
        <div class="col-lg-4 col-sm-6">
        <div class="properties">
          <div class="image-holder"><img src="{{ url("storage/{$rent->image}") }}" class="img-responsive" alt="{{ $rent->name }}">
            
          </div>
          <h4><a href="{{ url('/imoveis/alugar/'.$rent->slug.'/detalhes')  }}">{{$rent->name}}</a></h4>
          <p class="price">R$ {{ number_format($rent->price, 2, ',', '.') }}</p>
          <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Dormitórios">{{$rent->bedrooms}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Suites">{{$rent->suites}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Banheira">{{$rent->bathrooms}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Garagem">{{$rent->garage}}</span> </div>
          <a class="btn btn-primary" href="{{ url('/imoveis/alugar/'.$rent->slug.'/detalhes')  }}">Ver Detalhes</a>
        </div>
        </div>
        @endforeach
        <!-- properties -->
  
  
       
        <div class="center">
  <ul class="pagination">
    {{ $propertyForRents->links()}}
          </ul>
  </div>
  
  </div>
  </div>
  </div>
  </div>
  </div>
@endsection