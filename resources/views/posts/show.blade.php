@extends('layouts.master')
@section('content')
  {{-- expr --}}
  <div class="col-sm-8 blog-main">

    <div class="blog-post">
     <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
     <p class="blog-post-meta">By {{$post->user->name}}  on {{$post->created_at->toFormattedDateString()}}</p>

     <p>{{$post->body}}</p>
      
    </div><!-- /.blog-post -->

    {{-- comments section --}}
        <div class="card">
          <div class="card-block">
            @foreach ($post->comments as $comment)
              {{-- expr --}}
              <p class="card-text"><span><strong>{{$comment->created_at->diffForHumans()}} </strong></span>{{$comment->body}}</p>
              <a href="#" class="btn btn-primary btn-sm">Edit Comment</a>
            @endforeach
          </div>
        </div>

    {{-- add comment section --}}
        <div class="card">
          <div class="card-block">
            <form action="/posts/{{$post->id}}/comments" method="POST">
              {{csrf_field()}}
              <fieldset>
                <textarea name="body" class="form-control" rows="3" required=""></textarea>
                <br>
                <input type="submit" name="submit" value="Post" class="btn btn-info" placeholder="">
              </fieldset>
            </form>
          </div>
        </div>

    {{-- displaying errors --}}
          @include('partials.errors')

    

    <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

  </div><!-- /.blog-main -->
@endsection