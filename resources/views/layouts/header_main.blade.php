<!DOCTYPE html>
<html lang="en">
<head>
   <title>SmileComs</title>
   <meta charset="utf-8">
   <link rel="icon" href="resources/images/favicon.png" sizes="32x32">
   <meta name="viewport" content="width=device-width, initial-scale=1">



   <link rel="stylesheet" href="resources/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <link rel="stylesheet" type="text/css" href="resources/js/slick/slick.css">
   <link rel="stylesheet" type="text/css" href="resources/js/slick/slick-theme.css">


   <link rel="stylesheet" href="resources/css/style_main.css">

</head>
<body>

<header  id="fixedHeader">
	<nav class="navbar navbar-expand-lg navbar-light">
	  	<a class="navbar-brand" href="{{route('home_main')}}">
	  		<img src="resources/images/logo_main.png" class="img-fluid logo">
	  	</a>


	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse " id="navbarNavDropdown">
	    	<ul class="navbar-nav  ml-auto">
	    		<li class="nav-item dropdown">
	        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          			Operations 
	        		</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="{{route('nigeria')}}">Nigeria</a>
			          <a class="dropdown-item" href="{{route('uganda')}}">Uganda</a>
			          <a class="dropdown-item" href="{{route('tanzania')}}">Tanzania</a>
			          <a class="dropdown-item" href="{{route('brc')}}">The DRC</a>
			        </div>
	      		</li>

	      		<li class="nav-item">
	        		<a class="nav-link" href="{{ route('services') }}">Services</a>
	      		</li>

	      		<li class="nav-item">
	        		<a class="nav-link" href="{{ route('media') }}">Media</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="{{ route('careers') }}">Careers</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
	      		</li>
	    	</ul>
	  	</div>
	</nav>
</header>