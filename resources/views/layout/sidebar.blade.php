<!doctype html>
<html lang="en">
<head>
  	<title>LANDING PAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('import/css/style.css')}}">
    




</head>


<div class="wrapper d-flex align-items-stretch" >
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a href="index.html" class="logo">TheClubHub</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="{{ route('dashboard') }}"><span class="fa fa-home mr-3"></span> Homepage</a>
          </li>
          <li>
            <a href="{{ route('members') }}"><span class="fa fa-sticky-note mr-3"></span> Members</a>
          </li>
          <li>
            <a href="{{ route('friends') }}"><span class="fa fa-sticky-note mr-3"></span>Friends</a>
          </li>
          
          <li>
            <a href="{{ route('logout') }}" method="post"><span class="fa fa-paper-plane mr-3"></span> Sign out</a>
          </li>
        </ul>

    	</nav>
</div>