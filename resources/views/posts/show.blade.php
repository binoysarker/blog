@extends('layouts.master')
@section('content')
  {{-- expr --}}
  <div class="col-sm-8 blog-main">

    <div class="blog-post">
     <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
     <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}<a href="#">Binoy</a></p>

     <p>{{$post->body}}</p>
      
    </div><!-- /.blog-post -->

    

    <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

  </div><!-- /.blog-main -->
@endsection