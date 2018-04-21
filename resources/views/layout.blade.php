<!DOCTYPE html>
<html >
<head>
  <title>Home</title>
  
  <style>
input{width:600px; height:30px;border:1px solid #990000; border-radius: 10px;padding:2px; }
.con{background-color:#ff9999; width:55%;  border-radius:5px;}
select{width:600px; height:30px; border:1px solid #990000; border-radius:5px;}
</style>
  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style=" background-color:;" >

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    
	@if(Auth::user())
		<div class="navbar-header" >
      <a class="navbar-brand" href="#">Home</a>
    </div>
	   <ul class="nav navbar-nav">
	   
       <li class="active"><a href="{{URL::to('/profile')}}">Your Profile</a></li>
	   <li class="active"><a href="/makepost">Food order</a></li>
       <li class="active"><a href="/allpost">Food list</a></li>	
       	
    </ul>
		  <ul class="nav navbar-nav navbar-right">
      <li><a href="{{URL::to('/logout')}}">
	  
	 <span style="color:white"> {{ ucwords(Auth::user()->email) }}</span>  <span class="glyphicon glyphicon-user"></span> Logout</a></li>
    </ul>
	  @else
		 <div class="navbar-header" >
        <a class="navbar-brand" href="#">Food Order</a>
        </div>
	    <ul class="nav navbar-nav">
        <li class="active"><a href="#">About Us</a></li>
	       
       </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{URL::to('/register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{URL::to('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
	@endif
  </div> 
</nav>
  
  
  
  <!--Slide Show-->
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active" >
       <img src="{{asset('images/food.png')}}" alt="Logo" style="Height:500px; width:100%;"/>
      </div>
     <div class="item"style="Height:30%; width:100%;">
         <img src="{{asset('images/b1.jpg')}}" alt="Logo" style=" Height:500px; width:100%;"/>
      </div>
      <div class="item"style="Height:30%; width:100%;">
         <img src="{{asset('images/b2.jpg')}}" alt="Logo" style=" Height:500px;width:100%;"/>
      </div>
    
      <div class="item"style="Height:30%; width:100%;">
         <img src="{{asset('images/b3.jpg')}}" alt="Logo" style=" Height:500px; width:100%;"/>
      </div>
	  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="container">
  @yield('content')
</div>
<div style="background-color:#ff9999; color:white;height:150px; width:100%">

<a style="color:white; float:right;" href="{{URL::to('/register')}}">Click to Become a food  </a></h2></p>
</div>
</body>
</html>
