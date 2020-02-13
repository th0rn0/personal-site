@extends('layouts.app')

@section ('title',  'Eventula')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="first-slide" src="/images/eventula.png" alt="Eventula">
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>Eventula.</h1>
                    <p>
                        Eventula is an automated mapping and searching tool for Events and Subscription Service to deploy your own Event Management System. If you're wanting to Host or Search for a Gaming Event, LAN Event, Airsoft Event, Golf Tournament, Go Karting Open Day, whatever! - we have you covered!
                    </p>
                    <p><a class="btn btn-lg btn-primary" href="https://eventula.com" role="button">Check it out!</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>ECO System.</h1>
                    <p>
                        The Event & Community Organization System. Making the management easy so you can focus on the important things that make your events great!
                    </p>
                    <p><a class="btn btn-lg btn-primary" href="/blog/topic/eventula" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Marketing messaging and featurettes -->
<div class="container marketing">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Event Mapping & Searching. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Utilizing the extremely powerful Google API I have created a tool to allow attendees and organizers alike to submit their events and have them searchable on an interactive map.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image rounded img-fluid mx-auto" src="/images/eventula-mapping.png" alt="Eventula Mapping">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">The ECO System. <span class="text-muted">EZ-Mode for Event Organizers.</span></h2>
            <p class="lead">Using my years of experience hosting LAN Events I created a Event Manager to help us out. Now people are using it and it's pretty good.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="featurette-image rounded img-fluid mx-auto" src="/images/eventula-eco.png" alt="Eventula ECO System">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Fully Automated Deployment. <span class="text-muted">Docker is bae.</span></h2>
            <p class="lead">I got bored with clicking buttons. So I made a full Dockerized infrastructure to handle my deployments.</p>
        </div>
        <div class="col-md-5">
         <img class="featurette-image rounded img-fluid mx-auto" src="/images/docker.png" alt="Eventula Docker">
        </div>
    </div>
</div><!-- /.container -->

<div class="container">
    <h2>Related Posts</h2>
    <hr>
    @if($data['posts']->count() > 0)
        @foreach($data['posts'] as $post)
            @if($loop->first)
                <div class="jumbotron p-4 p-md-5 text-white rounded @if(empty($post->featured_image)) bg-dark @endif"
                     @if(!empty($post->featured_image)) style="background: linear-gradient(rgba(0, 0, 0, 0.85),rgba(0, 0, 0, 0.85)),url({{ $post->featured_image }}); background-size: cover" @endif>
                    <div class="col-md-8 px-0">
                        <h1 class="font-serif">
                            <a href="{{ route('blog.post', $post->slug) }}" class="text-white text-decoration-none">{{ $post->title }}</a>
                        </h1>
                        <p class="lead my-3">
                            <a href="{{ route('blog.post', $post->slug) }}" class="text-white text-decoration-none">{{ $post->summary }}</a>
                        </p>
                        <p class="lead mb-0">
                            <a href="{{ route('blog.post', $post->slug) }}" class="text-white font-weight-bold text-decoration-none">{{ __('canvas::blog.buttons.continue') }}</a>
                        </p>
                    </div>
                </div>
            @endif
        @endforeach
    @endif
    @if($data['posts']->count() > 0)
        @foreach($data['posts'] as $post)
            @if(!$loop->first)
                <div class="mb-5">
                    <h3>
                        <a href="{{ route('blog.post', $post->slug) }}" class="font-serif text-dark text-decoration-none">{{ $post->title }}</a>
                    </h3>
                    <p class="text-muted mb-2">{{ $post->published_at->formatLocalized('%b %d') }} — {{ $post->read_time }}</p>
                    <p>
                        <a href="{{ route('blog.post', $post->slug) }}" class="text-dark text-decoration-none">{{ $post->summary }}</a>
                    </p>
                </div>
            @endif
        @endforeach

        {{ $data['posts']->links() }}
    @else
        <p class="mt-4">{{ __('canvas::blog.empty.description') }}
            <a href="{{ url(sprintf('%s/posts/create', config('canvas.path'))) }}" class="text-success text-decoration-none">{{ __('canvas::blog.empty.action') }}</a>.
        </p>
    @endif
</div>
@endsection
