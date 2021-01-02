@extends('web.master.master')

@section('content')
<div class="inside-banner">
    <div class="container"> 
      <span class="pull-right"><a href="{{route('web.home')}}">Home</a> / Todos</span>
      <h2>Todos</h2>
  </div>
  </div>
  <!-- banner -->
  
  
  <div class="container">
  <div class="properties-listing spacer">
  
  <div class="row">
  
       <!-- properties -->
       @foreach ($propertys as $all)
           
       
        <div class="col-lg-4 col-sm-6">
        <div class="properties">
          <div class="image-holder"><img src="{{ url("storage/{$all->image}") }}" class="img-responsive" alt="{{ $all->name }}">
            
          </div>
          <h4><a href="{{ url('/imoveis/venda/'.$all->slug.'/detalhes')  }}">{{$all->name}}</a></h4>
            <p class="price">R$ {{ number_format($all->price, 2, ',', '.') }}</p>
          <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Dormitórios">{{$all->bedrooms}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Suites">{{$all->suites}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Banheira">{{$all->bathrooms}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Garagem">{{$all->garage}}</span> </div>
          <a class="btn btn-primary" href="{{ url('/imoveis/venda/'.$all->slug.'/detalhes')  }}">Ver Detalhes</a>
        </div>
        </div>
        @endforeach
        <!-- properties -->
  
  
       
        <div class="center">
  <ul class="pagination">
    {{ $propertys->links()}}
          </ul>
  </div>
  
  </div>
  </div>
  </div>
  </div>
  </div>
@endsection