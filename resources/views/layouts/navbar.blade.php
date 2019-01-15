
    <div class="blog-masthead">
            <div class="container">
              <nav class="nav blog-nav">
                <a class="nav-link active" href="/">Home</a>
                <a class="nav-link" href="#">New features</a>
                <a class="nav-link" href="#">Press</a>
                <a class="nav-link" href="#">New hires</a>
                <a class="nav-link" href="#">About</a>
                <a class="nav-link" href="posts/create">Create Post</a>

                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        @else
                            <a class="nav-link" href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
              </nav>
            </div>
          </div>
      
          <div class="blog-header">
            <div class="container">
              <h1 class="blog-title">The Bootstrap Blog</h1>
              <p class="lead blog-description">An example blog template built with Bootstrap.</p>
            </div>
          </div>