@extends('layout.main')

@section('container')
    {{-- <h1>{{ $title }}</h1> --}}
 
      @if ($posts->count())
        <div class="card mb-3 mt-3">
          <img src="img/12121.jpg" style="height: 150px;" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
            <blockquote class="blockquote mb-0 mt-3"><footer class="blockquote-footer">Oleh <a href="/author/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <cite title="Source Title"><a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></cite></footer></blockquote>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
            <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Read more</a>
          </div>
        </div>
      @else
          <p class="text-center f2-4">NO POST FOUND</p>
      @endif


    @foreach ($posts->skip(1) as $post)
       <div class="card my-4">  
        <div class="card-header">
            <h3><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <footer class="blockquote-footer">Oleh <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <cite title="Source Title"><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></cite></footer>
            <p>{{ $post->excerpt }}</p>
            
          </blockquote>
          <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
        </div>
      </div> 
    @endforeach
      

@endsection