@extends('dashboard.layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-8">
      <h3 class=""><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>
        <blockquote class="blockquote mb-0">
          <footer class="blockquote-footer mt-3">Oleh <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <cite title="Source Title"><a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></cite></footer>
          @if ($post->image)
          <img src="{{ asset('storage') . '/' . $post->image }}" alt="" sizes="" srcset="" class="img-fluid">
          @else
          <img src="{{ asset('img/12121.jpg') }}" alt="" sizes="" srcset="" class="img-fluid">
              
          @endif
          <p>{!! $post->body !!}</p>
          
        </blockquote>
    </div>
  </div>   
@endsection