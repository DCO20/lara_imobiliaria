@extends('web.master.master')

@section('content')
<div class=" container">
    

  <div id="slider" class="sl-slider-wrapper">

<div class="sl-slider">
@foreach ($sliders as $slider)
    

<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
  <div class="sl-slide-inner">
    <div class="bg-img bg-img-1"><img src="{{ url("storage/{$slider->image}") }}" alt="{{ $slider->name }}"></div>
    <h2><a href="{{$slider->link }}">{{$slider->name}}</a></h2>
    <blockquote>              
    <p class="location"><span class="glyphicon glyphicon-map-marker"></span> {{ $slider->city }}</p>
    <p>{{ $slider->description }}</p>
    <cite>{{$slider->situation}} | R$ {{ number_format($slider->price, 2, ',', '.') }}</cite>
    </blockquote>
  </div>
</div>
@endforeach
</div>
</div><!-- /sl-slider -->

<nav id="nav-dots" class="nav-dots">
<span class="nav-dot-current"></span>
<span></span>
<span></span>
<span></span>
<span></span>
</nav>

</div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
<div class="container"> 
<!-- banner -->
<h3>Venda & Alugar</h3>
  <div class="searchbar">
    <div class="row">
      <form action="{{ route('web.search')}}" method="post">
        @csrf
      <div class="col-lg-9 col-sm-9">
        <input type="text" name="filter" placeholder="Pesquise o imóvel" class="form-control" value="{{ $filters['filter'] ?? '' }}">
      </div>
      <div class="col-lg-3 col-sm-3">
        <button class="btn btn-success" type="submit">Pesquisar</button>
      </div>
    </form>
</div>

</div>
</div>
</div>
</div>
<!-- banner -->
<div class="container">
<div class="properties-listing spacer"> <a href="{{ route('web.sale')}}" class="pull-right viewall">Ver Todas</a>
<h2>Para Comprar</h2>
<div id="owl-example" class="owl-carousel">
  @foreach ($propertyForSale as $sale)
      
 
<div class="properties">
<div class="image-holder"><img src="{{ url("storage/{$sale->image}") }}" class="img-responsive" alt="{{ $sale->name }}"/>
<h4><a href="{{ url('/imoveis/venda/'.$sale->slug.'/detalhes')  }}">{{$sale->name}}</a></h4>
<p class="price">R$ {{ number_format($sale->price, 2, ',', '.') }}</p>
<div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Dormitórios">{{$sale->bedrooms}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Suites">{{$sale->suites}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Banheira">{{$sale->bathrooms}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Garagem">{{$sale->garage}}</span> </div>
<a class="btn btn-primary" href="{{ url('/imoveis/venda/'.$sale->slug.'/detalhes')  }}">Ver Detalhes</a>
</div>


</div>
@endforeach
</div>
<div class="spacer">
<div class="row">
<div class="col-lg-6 col-sm-6 recent-view">
<h3>Sobre</h3>
<p>Imobiliária criada com laravel 7 e admin voyager.<br><a href="about.php">Mais detalhes</a></p>

</div>
<div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
  <div class="properties-listing spacer"> <a href="{{ route('web.rent')}}" class="pull-right viewall">Ver Todas</a>
<h3>Para Alugar</h3>
<div id="myCarousel" class="carousel slide">
<div class="carousel-inner">
  @foreach ($propertyForRent as $rent)
  <div class="item active">
    <div class="row">
      <div class="col-lg-4"><img src="{{ url("storage/{$rent->image}") }}" class="img-responsive" alt="{{ $rent->name }}"/></div>
      <div class="col-lg-8">
        <h5><a href="{{ url('/imoveis/alugar/'.$rent->slug.'/detalhes')  }}">{{$rent->name}}</a></h5>
        <p class="price">${{ number_format($rent->price, 2, ',', '.') }}</p>
        <a href="{{ url('/imoveis/alugar/'.$rent->slug.'/detalhes')  }}" class="more">Detalhes</a> </div>
    </div>
  </div>
  @endforeach
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection