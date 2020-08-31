@extends('layouts.app')

@section ('title',  'About Me')

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
	<p>
		I am a Highly Experienced & Motivated Applications and DevOps Engineer. I have over 10 years Experience in Web Development, DevOps Enviroments, Backend & Front End applications including E-Commerce, Insurance, Subscription Services and CMS/EMS Platforms. I Have Developed and Deployed a number of fully bespoke CI/CD Systems, Microservice/Server Infrastructures, APIs and High Availablity/Scalable Systems. In addition to this I am also a very Experienced Event Manager & Organizer of over 15 years (Check <a href="/projects/lanops/">LanOps</a>). 
	</p>
	<hr>
	<h5>Key Skills</h5>
	<ul>
		<li>Programming experience with PHP, MYSQL, HTML, JavaScript, CSS, Bash, JS</li>
		<li>Infrastructure through Code experience with Cloudformation, Cloud Init/Config & Terraform</li>
		<li>Service work with Linux (Alpine, Ubuntu, CentOS, RedHat, Debian) & Windows (08, 12r2, 16)</li>
		<li>Microservice development and deployment</li>
		<li>Network development and deployment</li>
		<li>Front End & Back End development and deployment</li>
		<li>AWS Management & Deployment including Terraform & Cloud Formation</li>
		<li>Framework experience with Bootstrap, Laravel, Lumen, PimCore, VueJS, SailsJs, ExpressJs & Silex</li>
		<li>Experience with Proxmox & HyperV</li>
		<li>Creation and Maintenance of APIs, Microservices infrastructure and Server infrastructure</li>
		<li>Deployment of CI/CD using Git, Concourse, Rancher and DroneCI</li>
		<li>Docker Orchestration experience with Docker-Compose, Rancher 1.6, Docker Swarm, Portainer and Kubernetes</li>
		<li>Docker Image Creation and Build Cycles with DockerX for multiple CPU Architectures (x86, Armv7, Armv8, Arm64)</li>
		<li>High Availability Infrastructure development and deployment</li>
		<li>Apache, Nginx & NodeJS experience</li>
	</ul>
	<hr>
	<h5>CV & References Available on Request!</h5>
</div>
<style>
    .details li {
      list-style: none;
    }
</style>
@endsection
