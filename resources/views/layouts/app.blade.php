<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
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

    <!-- Scripts -->
    <!--@vite([
        'resources/css/app.css', 'resources/js/app.js'
    ])-->
    </head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-body shadow-sm">
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

        <main class="">
            @yield('content')
        </main>
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
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const video = document.querySelector('video');
            const volumeUpIcon = document.querySelector('.bi-volume-up-fill');
            const volumeMuteIcon = document.querySelector('.bi-volume-mute');
    
            // Check if the video is initially muted
            if (video.muted) {
                volumeUpIcon.style.display = 'none'; // Hide the volume up icon
                volumeMuteIcon.style.display = 'inline'; // Show the mute icon
            } else {
                volumeUpIcon.style.display = 'inline'; // Show the volume up icon
                volumeMuteIcon.style.display = 'none'; // Hide the mute icon
            }
    
            // Add event listeners to toggle mute/unmute on icon click
            volumeUpIcon.addEventListener('click', () => {
                video.muted = true;
                volumeUpIcon.style.display = 'none'; // Hide volume-up icon
                volumeMuteIcon.style.display = 'inline'; // Show volume-mute icon
            });
    
            volumeMuteIcon.addEventListener('click', () => {
                video.muted = false;
                volumeUpIcon.style.display = 'inline'; // Show volume-up icon
                volumeMuteIcon.style.display = 'none'; // Hide volume-mute icon
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
            const videoSection = document.querySelector('.video-container');
            if (videoSection) {
                videoSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });

    </script>
    

<!-- Popper.js (Required for Bootstrap 4) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>

<!-- Bootstrap 4 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
