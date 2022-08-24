@extends('dashboard.layout.main')

@section('container')
    <h3>create</h3>
    @if (session()->has('success'))
      <div class="alert alert-primary" role="alert">
        {{ session('success') }}
      </div> 
    @endif
    
    <div class="col-8">
        <form method="POST" action="/dashboard/posts" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
              @error('title')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            {{-- <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control" id="slug" name="slug">
            </div> --}}
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select class="form-select" name="category_id">
                @foreach ($category as $c)
                  @if (old('category_id') == $c->id)
                    <option value="{{ $c->id }}" selected >{{ $c->name }}</option>
                  @else
                    <option value="{{ $c->id }}">{{ $c->name }}</option> 
                  @endif
                  
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            {{-- <div class="mb-3">
              <label for="body" class="form-label">Body</label>
              <input id="body" type="hidden" name="body">
              <trix-editor input="body"></trix-editor>
            </div> --}}
            <div class="mb-3">
              <label for="body" class="form-label">Body</label>
              {{-- <div id="editor" name="body"></div> --}}
              <textarea name="body" id="editor" cols="30" rows="10" class="@error('body') is-invalid @enderror">{{ old('body') }}</textarea>
              @error('body')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            
            
            <button type="submit" class="btn btn-primary">Create</button>
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
@endsection