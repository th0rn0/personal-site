@extends('layouts.app')

@section ('title',  'Projects')

@section('content')
<div class="container pt-4">
  	<div class="row">
        <div class="col-md-4">
          	<div class="card mb-4 box-shadow">
            	<img class="card-img-top" src="/images/eventula-logo.png" alt="Card image cap">
                <div class="card-body">
        			<h5 class="card-title">Eventula</h5>
                  	<p class="card-text">A automated mapping and searching tool for Events and Subscription Service to deploy your own Event Management System. Fully Automated and Dockerized Environment.</p>
                  	<div class="d-flex justify-content-between align-items-center">
                    	<div class="btn-group">
                      		<a href="{{ route('projects.eventula') }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    	</div>
                  	</div>
                </div>
          	</div>
        </div>
        <div class="col-md-4">
          	<div class="card mb-4 box-shadow">
            	<img class="card-img-top" src="/images/lanops-logo.png" alt="LanOps">
                <div class="card-body">
        			<h5 class="card-title">LanOps</h5>
                  	<p class="card-text">LAN Gaming Event I've run Since 2003.</p>
                  	<div class="d-flex justify-content-between align-items-center">
                    	<div class="btn-group">
                      		<a href="{{ route('projects.lanops') }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    	</div>
                  	</div>
                </div>
          	</div>
        </div>
        <div class="col-md-4">
          	<div class="card mb-4 box-shadow">
            	<img class="card-img-top" src="/images/site-docker.jpg" alt="Site Docker">
                <div class="card-body">
        			<h5 class="card-title">This Site</h5>
                  	<p class="card-text">Fully Dockerized Laravel 6 in a Alpine Environment running on a Raspberry Pi with Maria DB.</p>
                  	<div class="d-flex justify-content-between align-items-center">
                    	<div class="btn-group">
                      		<a href="{{ route('projects.site') }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    	</div>
                  	</div>
                </div>
          	</div>
        </div>
     	<div class="col-md-4">
          	<div class="card mb-4 box-shadow">
            	<img class="card-img-top" src="/images/smrikyisms.jpg" alt="Card image cap">
                <div class="card-body">
        			<h5 class="card-title">Smirkyisms</h5>
                  	<p class="card-text">A upcoming Quote Book & Memory Bank for Friends.</p>
                  	<div class="d-flex justify-content-between align-items-center">
                    	<div class="btn-group">
                      		<a href="{{ route('projects.smirkyisms') }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    	</div>
                  	</div>
                </div>
          	</div>
        </div>
    </div>
</div>
@endsection
