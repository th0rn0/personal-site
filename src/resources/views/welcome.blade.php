
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

        <title>Th0rn0.co.uk</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <style>
            /*
             * Globals
             */

            /* Links */
            a,
            a:focus,
            a:hover {
              color: #fff;
            }

            /* Custom default button */
            .btn-secondary,
            .btn-secondary:hover,
            .btn-secondary:focus {
              color: #333;
              text-shadow: none; /* Prevent inheritance from `body` */
              background-color: #fff;
              border: .05rem solid #fff;
            }


            /*
             * Base structure
             */

            html,
            body {
              height: 100%;
              background-color: #333;
            }

            body {
              display: -ms-flexbox;
              display: -webkit-box;
              display: flex;
              -ms-flex-pack: center;
              -webkit-box-pack: center;
              justify-content: center;
              color: #fff;
              text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
              box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
            }

            .cover-container {
              max-width: 42em;
            }


            /*
             * Header
             */
            .masthead {
              margin-bottom: 2rem;
            }

            .masthead-brand {
              margin-bottom: 0;
            }

            .nav-masthead .nav-link {
              padding: .25rem 0;
              font-weight: 700;
              color: rgba(255, 255, 255, .5);
              background-color: transparent;
              border-bottom: .25rem solid transparent;
            }

            .nav-masthead .nav-link:hover,
            .nav-masthead .nav-link:focus {
              border-bottom-color: rgba(255, 255, 255, .25);
            }

            .nav-masthead .nav-link + .nav-link {
              margin-left: 1rem;
            }

            .nav-masthead .active {
              color: #fff;
              border-bottom-color: #fff;
            }

            /*
             * Cover
             */
            .cover {
              padding: 0 1.5rem;
            }
            .cover .btn-lg {
              padding: .75rem 1.25rem;
              font-weight: 700;
            }

            /*
             * Footer
             */
            .mastfoot {
              color: rgba(255, 255, 255, .5);
            }
        </style>
    </head>
    <body class="text-center">

        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto">
                <div class="inner">
                    <nav class="nav nav-masthead justify-content-center">
                        <a class="nav-link" href="#">Blog</a>
                        <a class="nav-link" href="#">Eventula</a>
                        <a class="nav-link" href="#">Projects</a>
                        <a class="nav-link" href="#">Contact</a>
                        <a class="nav-link" href="https://github.com/th0rn0">Github</a>
                    </nav>
                </div>
            </header>

            <main role="main" class="inner cover">
                <h1 class="cover-heading">Heyup.</h1>
                <p class="lead">{{ $tagline }}</p>
                <p class="lead">
                    <a href="#" class="btn btn-lg btn-secondary">About Me</a>
                </p>
            </main>

            <footer class="mastfoot mt-auto">
                <div class="inner">
                    <p>Built with Vodka and Hatred.</p>
                </div>
            </footer>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
    </body>
</html>
