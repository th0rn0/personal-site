@extends('layouts.app')

@section ('title',  'Smirkyisms')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      	<div class="carousel-item active">
        	<img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Smirkyisms">
        	<div class="container">
          		<div class="carousel-caption text-left">
            		<h1>Smirkyisms.</h1>
                <p>
                    Smirkyisms as a App I built to try and learn NodeJS, VueJS and Backend / Frontend Services. It allows users to post quotes to a MongoDB using a VueJS Frontend or a Discord Bot.
                </p>
                <p><a class="btn btn-lg btn-primary" href="https://smirkyisms.com" role="button">Check it out!</a></p>
          		</div>
    		</div>
      	</div>
    </div>
</div>

<!-- Marketing messaging and featurettes -->
<div class="container marketing">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Frontend. <span class="text-muted">Built using VueJS.</span></h2>
            <p class="lead">Pure frontend framework running behind a NGINX Loadbalancer.</p>
        </div>
        <div class="col-md-5">
            <img width="70%" class="featurette-image rounded img-fluid mx-auto" src="/images/vue-logo.png" alt="Frontend">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading" style="margin-top: 5rem">Bot. <span class="text-muted">Built using ExpressJS.</span></h2>
            <p class="lead">Built upon Express & DiscordJS. Added to my discord servers, it allows the users to provoke the bot and have it quote messages directly from discord to the server.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img width="70%" class="featurette-image rounded img-fluid mx-auto" src="/images/discord-logo.png" alt="ExpressJS">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Backend. <span class="text-muted">Built using SailsJS.</span></h2>
            <p class="lead">JS Framework for rapid development. Used for just the API, the bot and the client bot communicate with the API Server over HTTP.</p>
        </div>
        <div class="col-md-5">
         <img width="70%" class="featurette-image rounded img-fluid mx-auto" src="/images/sails-logo.png" alt="SailsJS">
        </div>
    </div>

</div><!-- /.container -->
<br><br>
<div class="container">
  <h2>Related Posts</h2>
  <hr>
  @if(isset($data['data']) && $data['posts']->count() > 0)
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
  @if(isset($data['data']) && $data['posts']->count() > 0)
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
