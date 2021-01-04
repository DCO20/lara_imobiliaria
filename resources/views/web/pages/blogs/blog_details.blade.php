@extends('web.master.master')

@section('content')
    <!-- banner -->
<div class="inside-banner">
    <div class="container"> 
      <span class="pull-right"><a href="{{ route('web.home')}}">Home</a> / Blog</span>
      <h2>Blog</h2>
  </div>
  </div>
  <!-- banner -->
  
  
  <div class="container">
  <div class="spacer blog">
  <div class="row">
    <div class="col-lg-8">
  
    <!-- blog detail -->
    <h2>{{$postDetails->title}}</h2>
    <div class="info">Postado em: {{ date('d/m/Y', strtotime($postDetails->created_at))}}</div>
    <img src="{{ url("storage/{$postDetails->image}") }}" class="thumbnail img-responsive"  alt="{{$postDetails->title}}">
   <p>{{$postDetails->excerpt}}</p>
  
    <!-- blog detail -->
  
  
  
  
    </div>
    <div class="col-lg-4 visible-lg">
  
    <!-- tabs -->
    <div class="tabbable">
        <ul class="nav nav-tabs">
          <li class="">Recentes Posts</li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab3">
          <ul class="list-unstyled">      
                      <li>
                        @foreach ($postsRecent as $recent)
                            
                        
            <h5><a href="{{ url('/blog/'.$recent->slug.'/detalhes')  }}">{{ $recent->title}}</a></h5>
                      <div class="info">Postado em: {{ date('d/m/Y', strtotime($recent->created_at))}}</div> 
                      @endforeach 
                      </li>
                      
                      <li>
          </div>
        </div>
        
        
        
      </div>
<!-- tabs -->

  
  
    </div>
  </div>
  </div>
  </div>
@endsection