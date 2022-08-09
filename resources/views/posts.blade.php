@extends('layout.main')

@section('container')
    <h1>posts</h1>

    @foreach ($posts as $post)
       <div class="card my-4">  
        <div class="card-header">
            <h3><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <footer class="blockquote-footer">Oleh <a href="" class="text-decoration-none">{{ $post->user->name }}</a> in <cite title="Source Title"><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></cite></footer>
            <p>{{ $post->excerpt }}</p>
            
          </blockquote>
          <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
        </div>
      </div> 
    @endforeach
      

@endsection