@extends('web.master.master')

@section('content')
    <!-- banner -->
<div class="inside-banner">
    <div class="container"> 
      <span class="pull-right"><a href="{{ route('web.home')}}">Home</a> / Blogs</span>
      <h2>Blogs</h2>
  </div>
  </div>
  <!-- banner -->
  
  
  <div class="container">
  <div class="spacer blog">
  <div class="row">
    <div class="col-lg-8 col-sm-12 ">
  
      <!-- blog list -->
      <div class="row ">
        @foreach ($posts as $post)
            
       
        <div class="col-lg-4 col-sm-4 "><a href="{{ url('/blog/'.$post->slug.'/detalhes')  }}" class="thumbnail"><img src="{{ url("storage/{$post->image}") }}" alt="{{$post->title}}"></a></div>
          <div class="col-lg-8 col-sm-8 ">
            <h3><a href="{{ url('/blog/'.$post->slug.'/detalhes')  }}">{{ $post->title}}</a></h3>
              <div class="info">Postado em: {{ date('d/m/Y', strtotime($post->created_at))}}</div>                                               
                <p>{{$post->excerpt}}</p>
                  <a href="{{ url('/blog/'.$post->slug.'/detalhes')  }}" class="more">Mais detalhes</a>
              </div>
              <hr>
              @endforeach
             
              
        </div>
        <div class="center">
          <ul class="pagination">
            <div class="center">
              <ul class="pagination">
                {{ $posts->links()}}
                      </ul>
              </div>
                  </ul>
          </div>
    <!-- blog list -->

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