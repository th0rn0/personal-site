<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>@yield('title') | Th0rn0.co.uk</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
            <a class="navbar-brand" href="/">Th0rn0</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects.eventula') }}">Eventula</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects.lanops') }}">LanOps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/th0rn0">Github</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/th0rn0">Twitter</a>
                    </li>
                </ul>
                @auth()
                    <div class="row flex-nowrap justify-content-between align-items-center mt-2 mt-md-0">
                        <div class="col-4 d-flex justify-content-end align-items-center">
                            @yield('actions')
                            <div class="dropdown">
                                <a href="#" class="nav-link px-0 py-0 text-secondary" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ $data['avatar'] }}"
                                         class="rounded-circle my-0 shadow-sm" style="width: 20px" alt="{{ auth()->user()->name }}">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <h6 class="dropdown-header font-sans">
                                        <strong>{{ auth()->user()->name }}</strong>
                                        <br/>
                                        {{ auth()->user()->email }}
                                    </h6>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ url(sprintf('%s/posts', config('canvas.path'))) }}">{{ __('canvas::blog.nav.user.posts') }}</a>
                                    <a class="dropdown-item" href="{{ url(sprintf('%s/tags', config('canvas.path'))) }}">{{ __('canvas::blog.nav.user.tags') }}</a>
                                    <a class="dropdown-item" href="{{ url(sprintf('%s/topics', config('canvas.path'))) }}">{{ __('canvas::blog.nav.user.topics') }}</a>
                                    <a class="dropdown-item" href="{{ url(sprintf('%s/stats', config('canvas.path'))) }}">{{ __('canvas::blog.nav.user.stats') }}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ url(sprintf('%s/settings', config('canvas.path'))) }}">{{ __('canvas::blog.nav.user.settings') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('canvas::blog.nav.user.logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>

        </nav>
    </header>
    <main role="main">
        @yield('content')
        <!-- FOOTER -->
        <footer class="container mt-5">
            <p class="float-right">Built With Vodka and Hatred.</p>
            <p>&copy; Th0rn0.co.uk</p>
        </footer>
    </main>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
