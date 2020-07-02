@extends('layouts.app')

@section ('title',  'Contact')

@section('content')
<div class="container pt-4">
	<div class="jumbotron">
      	<div class="row">
          	<div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
              <img src="/images/avatar.jpg" alt="stack photo" class="img img-fluid rounded">
          	</div>
          	<div class="col-lg-8">
              	<div class="container" style="border-bottom:1px solid black">
                	<h2>Thornton Phillis</h2>
              	</div>
            	<hr>
              	<ul class="container details">
                    <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>Email: <a href="mailto: contact@th0rn0.co.uk">contact@th0rn0.co.uk</a></p></li>
                    <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>Twitter: <a target="_blank" href="https://twitter.com/th0rn0">@Th0rn0</a></p></li>
                    <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>Github: <a target="_blank" href="https://github.com/th0rn0">Th0rn0</a></p></li>
                    <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>Discord: Th0rn0</p></li>
              	</ul>
          	</div>
  		</div>
    </div>
</div>
<style>
    .details li {
      list-style: none;
    }
</style>
@endsection
