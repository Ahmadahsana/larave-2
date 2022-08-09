@extends('layout.main')

@section('container')
    <h1>{{ $category }}</h1>

    @foreach ($posts as $post)
       <div class="card my-4">  
        <div class="card-header">
            <h3 class=""><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h3>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{ $post->excerpt }}</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
          </blockquote>
          <a href="/post/{{ $post->slug }}">Read More..</a>
        </div>
      </div> 
    @endforeach
      

@endsection