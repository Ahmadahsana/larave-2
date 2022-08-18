{{-- <nav class="navbar navbar-expand-lg bg-danger navbar-dark">  
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ url('img/laravel.svg') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Laravel Blog
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link @if ($title == 'Home')
            active
          @endif" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if ($title == 'About')
          active
        @endif" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if ($title == 'Posts')
                        active
                      @endif" href="/posts">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if ($title == 'Post category')
                        active
                      @endif" href="/categories">Category</a>
            </li>
          </ul>

          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
          </ul>
          
          
          
          
          
        </div>
      </div>
    </div>
  </nav> --}}

  <nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <img src="{{ url('img/laravel.svg') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
        <a class="navbar-brand" href="#">Laravel Blog</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if ($title == 'Home')
          active
        @endif" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if ($title == 'About')
        active
      @endif" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if ($title == 'Posts')
                      active
                    @endif" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if ($title == 'Post category')
                      active
                    @endif" href="/categories">Category</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link @if ($title == 'Login')
            active
          @endif" href="/login">Login</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>