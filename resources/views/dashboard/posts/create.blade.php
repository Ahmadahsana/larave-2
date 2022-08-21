@extends('dashboard.layout.main')

@section('container')
    <h3>create</h3>
    <div class="col-8">
        <form method="POST" action="/dashboard/posts">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control" id="slug" name="slug">
            </div>
            
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>


    <script>
      const title = document.querySelector('#title');
      const slug = document.querySelector('#slug');

      title.addEventlistener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
      })
    </script>
@endsection