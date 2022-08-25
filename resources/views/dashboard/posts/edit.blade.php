@extends('dashboard.layout.main')

@section('container')
    <h3>Edit</h3>
    @if (session()->has('success'))
      <div class="alert alert-primary" role="alert">
        {{ session('success') }}
      </div> 
    @endif
    
    <div class="col-8">
        <form method="POST" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}">
              @error('title')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select class="form-select" name="category_id">
                @foreach ($category as $c)
                  @if (old('category_id', $post->category_id) == $c->id)
                    <option value="{{ $c->id }}" selected >{{ $c->name }}</option>
                  @else
                    <option value="{{ $c->id }}">{{ $c->name }}</option> 
                  @endif
                  
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label @error('image') is-invalid @enderror">Gambar</label>
              <input type="hidden" name="oldImage" value="{{ $post->image }}">
              @if ($post->image)
              <img alt="" src="{{ asset('storage/'). '/' . $post->image }}" class="d-block img-preview img-fluid mb-3 col-sm-5">
              @else
              <img alt="" class="img-preview img-fluid mb-3 col-sm-5">
              @endif
              <img alt="" class="img-preview img-fluid mb-3 col-sm-5">
              <input type="file" class="form-control" id="image" name="image" onchange="previewImage()">
              @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            {{-- <div class="mb-3">
              <label for="body" class="form-label">Body</label>
              <input id="body" type="hidden" name="body">
              <trix-editor input="body"></trix-editor>
            </div> --}}
            <div class="mb-3">
              <label for="body" class="form-label">Body</label>
              {{-- <div id="editor" name="body"></div> --}}
              <textarea name="body" id="editor" cols="30" rows="10" class="@error('body') is-invalid @enderror">{{ old('body', $post->body) }}</textarea>
              @error('body')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            
            
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>


    {{-- <script>
      const title = document.querySelector('#title');
      const slug = document.querySelector('#slug');
      

      title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
        
      })
    </script> --}}

    <script>
      function previewImage() {
        const image = document.querySelector('#image')
        const preview = document.querySelector('.img-preview')

        preview.style.display = 'block'

        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])

        oFReader.onload = function(oFREvent) {
          preview.src = oFREvent.target.result
        }
      }
    </script>
@endsection