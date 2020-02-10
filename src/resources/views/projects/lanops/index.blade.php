@extends('layouts.app')

@section ('title',  'LanOps')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="first-slide" src="/images/lanops.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>LanOps.</h1>
                    <p>
                        LanOps, or LAN Operations, is a small LAN party I started, way back in 2003. Breaking from traditional LAN systems, such as massive tournaments, cash prizes and "uber-pr0" clans everywhere, LanOps set out with one goal:
                        Have Fun & Be awesome.
                    </p>
                    <p><a class="btn btn-lg btn-primary" href="https://lanops.co.uk" role="button">Check it out!</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Marketing messaging and featurettes -->
<div class="container marketing">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">It's a Hobby. <span class="text-muted">We don't run this for profit.</span></h2>
            <p class="lead">Myself and all the staff are essentially volunteers. We don't get paid, everything we make goes back into the events. Because we love running them <strong>that much</strong>.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="/images/lanops-hobby.jpg" alt="LanOps Hobby">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">17 Years. <span class="text-muted">And no signs of slowing.</span></h2>
            <p class="lead">I pride myself on the amount of time LanOps has been running. I started it in a Scout Hut with no internet, now we run 4 bonded internet lines. LanOps may not be the biggest LAN, but biggest isn't always bestest!</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="/images/lanops-17.jpg" alt="LanOps 17 Years">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Experience. <span class="text-muted">It pathed the way for my career.</span></h2>
            <p class="lead">I started LanOps when I was around 13. From there I learnt networking and started building my own server for LanOps. Then we needed a website, so I learnt HTML and PHP and hacked together a site. That then spurred me on to get a University Degree in Computer Networking.</p>
        </div>
        <div class="col-md-5">
         <img class="featurette-image img-fluid mx-auto" src="/images/lanops-career.png" alt="LanOps Career">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Community. <span class="text-muted">It's the best bit.</span></h2>
            <p class="lead">The amount of friends that I and everyone else has met through LanOps is amazing. It's honestly one of the best bit about LanOps.</p>
        </div>
        <div class="col-md-5 order-md-1">
         <img class="featurette-image img-fluid mx-auto" src="/images/lanops-community.png" alt="Generic placeholder image">
        </div>
    </div>
</div><!-- /.container -->
@endsection
