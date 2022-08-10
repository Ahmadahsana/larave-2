@extends('layout.main')

@section('container')
    <h1>single post</h1>


       <div class="card my-4">  
        <div class="card-header">
            <h3 class=""><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <footer class="blockquote-footer">Oleh <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <cite title="Source Title"><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></cite></footer>
            <p>{{ $post->body }}</p>
            
          </blockquote>
          <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
        </div>
      </div> 

      {{-- {{ dd($post) }} --}}

@endsection