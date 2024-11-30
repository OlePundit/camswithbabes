<!DOCTYPE html>
<html lang="en">
<head>
<title>Camswithbabes</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/superfish.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/skin.css">
<link rel="stylesheet" href="css/jqtransform.css" type="text/css">

<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb4FBO9vB25ti8Hw6ZdLM6puhUFPEjF9IVXczFucHxl8PC1w" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="{{ asset('build/assets/app-c444118a.css') }}">
<script src="{{ asset('build/assets/app-69aa0dbd.js') }}"></script>

<!--@vite([
    'resources/css/app.css', 'resources/js/app.js'
])-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script src="js/jquery.hoverIntent.minified.js"></script>
<script src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/tms-0.4.1.js"></script>
<script src="js/jquery.jqtransform.js"></script>

<script>

		
	  $(function(){ 
		  
		  $('#form-2').jqTransform();
	  
	  });
		
		
	jQuery(document).ready(function() {

			jQuery('#mycarousel-2').jcarousel({
				horizontal: true,
				wrap:false,
				scroll:1,
				easing:'easeInOutBack',
				animation:1200
			});
			jQuery('#mycarousel-3').jcarousel({
				horizontal: true,
				wrap:false,
				scroll:1,
				easing:'easeInOutBack',
				animation:1200
			});
	})
	
	jQuery(document).ready(function() {
		
		$("a.icon-1, a.icon-2, a.icon-3, a.icon-4").hover(function(){
			  $(this).stop().fadeTo("fast", 0.6); 
		  },function(){
			  $(this).stop().fadeTo("fast", 1);
		  });
			
	})
		 
	$(document).ready(function(){
		$('.slider')._TMS({
			show:0,
			pauseOnHover:true,
			prevBu:'.prev',
			nextBu:'.next',
			playBu:'.play',
			duration:800,
			preset:'fade',
	        pagination:'.pags',
			pagNums:false,
			slideshow:7000,
			numStatus:false,
			banners:false,
			waitBannerAnimation:false,
			progressBar:false
		})		
 })

</script>

<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
<!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
<div class="head-shape">
    <!--==============================header=================================-->
    <header>            
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('storage/images/logo1.png') }}" alt="">
                </a>
                <div class="phone">
                    <form class="d-flex" role="search" style="position: relative;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%);display:flex;">
                            <i class="fas fa-search"></i>
                        </span>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="padding-left: 30px;">
                    </form>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="navbar-nav me-auto">
                        <form class="d-flex" role="search" style="position: relative;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%);display:flex;">
                                <i class="fas fa-search"></i>
                            </span>
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="padding-left: 30px;">
                        </form>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle other-menu" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-trans" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1.707L3.5 2.793l.646-.647a.5.5 0 1 1 .708.708l-.647.646.822.822A4 4 0 0 1 8 3c1.18 0 2.239.51 2.971 1.322L14.293 1H11.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 0 1-3.05-5.814l-.95-.949-.646.647a.5.5 0 1 1-.708-.708l.647-.646L1 1.707V3.5a.5.5 0 0 1-1 0zm5.49 4.856a3 3 0 1 0 5.02 3.288 3 3 0 0 0-5.02-3.288"/>
                                </svg>
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Males</a></li>
                            <li><a class="dropdown-item" href="#">Females</a></li>
                            <li><a class="dropdown-item" href="#">Trans</a></li>
                            </ul>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link other-menu" href="{{ route('login') }}">Login</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link free-join" href="{{ route('register') }}">Join</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!--==============================content================================-->
    <div class="container">

        <section id="content">

        
            <div class="grid_4">
                <div class="header-title">
                    <h3 class="marg1 mt-3"><strong style="margin-right: 5px;">Camswithbabes</strong> - The Hottest UK Cam Girls </h3>
                </div>
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach($videos as $video)
                        <div class="swiper-slide">
                            <div class="img-label">
                                <a href="video/{{$video->id}}">
                                    <div class="img-container box">
                                        <img src="storage/{{$video->thumb}}" alt="model">
                                        <i class="fa-solid fa-play"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach

                    </div>                
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                
            </div>
            <div class="grid_4">
                <div class="row justify-content-center model-wrap">
                    @foreach($models as $model)
                    <div class="img-label col-xl-3 col-lg-3 col-md-4 col-6">
                        <a href="/profile/{{$model->id}}">

                            <div class="img-container box">
                                <img src="storage/{{$model->thumb}}" alt="model">
                                <div class="text">
                                    <h4><i class="fa fa-circle dot" aria-hidden="true"></i>{{$model->name}}</h4>
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>

                        </a>
                    </div>
                    @endforeach

                    
                    

                    
                </div>
            </div>

        </section> 
        <!--==============================footer=================================-->

        

    </div>
    <footer>
            
        <div class="footer-block">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-12 mb-3">
                    <img src="storage/images/logo1.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-5">
                    <h4>Compliance</h4>
                    <ul class="list1">
                    <li><a href="soon.html">Privacy policy</a></li>
                    <li><a href="soon.html">Terms and conditions</a></li>
                    <li><a href="soon.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-5">
                    <h4>Register</h4>
                    <ul class="list1">
                    <li><a href="soon.html">As a fan</a></li>
                    <li><a href="soon.html">As a creator</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-5">
                    <h4>Categories</h4>
                    <ul class="list1">
                    <li><a href="soon.html">Live</a></li>
                    <li><a href="soon.html">Messages</a></li>
                    <li><a href="soon.html">More</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-5">
                    <h4>Follow Us</h4>
                    <div class="socialicon">
                    <a href="#" class=""><i class="fab fa-twitter-square" aria-hidden="true"></i>
                    </a>
                    <a href="#" class=""><i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="#" class=""><i class="fab fa-facebook-square" aria-hidden="true"></i>
                    </a>
                    </div>
                    
                </div>
            </div>     
        </div>
        <p class="foot-text">All rights reserved, Camswithbabes © 2024&nbsp;<!-- {%FOOTER_LINK} --></p>

    <div class="clear"></div>
</div>
</footer> 
 <!-- jQuery (Bootstrap 4 requires jQuery 3.0 or later) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js (Required for Bootstrap 4) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>

<!-- Bootstrap 4 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
    slidesPerView: 4,
    spaceBetween:10,

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    // Add breakpoints
    breakpoints: {
            // When the viewport is >= 768px
    500: {
        slidesPerView: 5,
        spaceBetween: 15,
    },
    // When the viewport is >= 768px
    768: {
        slidesPerView: 7,
        spaceBetween: 15,
    },
    // When the viewport is >= 1024px
    1024: {
        slidesPerView: 8,
        spaceBetween: 20,
    },
    // When the viewport is >= 1440px
    1440: {
        slidesPerView: 12,
        spaceBetween: 30,
    },
},
});
</script>
</body>
</html>