@extends('layouts.app')

@section ('title',  'My Site')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      	<div class="carousel-item active">
        	<img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="My Site">
        	<div class="container">
          		<div class="carousel-caption text-left">
            		<h1>My Personal Site.</h1>
            		<p>
                		Coming Soon
           	 		</p>
          		</div>
    		</div>
      	</div>
    </div>
</div>

@endsection
