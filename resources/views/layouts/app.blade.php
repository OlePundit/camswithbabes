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
                        <li><a href="#" data-toggle="modal" data-target="#exampleModal">Privacy policy</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#termsModal">Terms and conditions</a></li>
                        <li><a href="/contact-us">Contact Us</a></li>
                        <li><a href="/faq">FAQs</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-5">
                        <h4>Register</h4>
                        <ul class="list1">
                        <li><a href="/register">As a fan</a></li>
                        <li><a href="/register">As a creator</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-5">
                        <h4>Categories</h4>
                        <ul class="list1">
                        <li><a href="/section_swiper">Live</a></li>
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
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Privacy Policy</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <h1>Privacy Policy for CamsWithBabes</h1>
                                <p><strong>Effective Date:</strong> [Insert Date]</p>
                                <p>
                                    CamsWithBabes (&quot;we,&quot; &quot;us,&quot; &quot;our&quot;) is committed to protecting your privacy. 
                                    This Privacy Policy outlines how we collect, use, and protect your personal information when 
                                    you use our website, <strong>https://camswithbabes.com</strong> (the &quot;Site&quot;). By accessing or 
                                    using the Site, you agree to the terms of this Privacy Policy.
                                </p>
                            
                                <h2>1. Information We Collect</h2>
                                <p>We collect the following types of information:</p>
                                <h3>a. Information You Provide Directly</h3>
                                <ul>
                                    <li><strong>Account Registration:</strong> When you create an account, we collect your username, 
                                        email address, password, and other details you choose to provide.</li>
                                    <li><strong>Payment Information:</strong> If you make a purchase, we collect payment information 
                                        through secure third-party payment processors.</li>
                                    <li><strong>Communication:</strong> When you contact us or participate in chat features, we collect 
                                        the content of your messages.</li>
                                </ul>
                            
                                <h3>b. Information We Collect Automatically</h3>
                                <ul>
                                    <li><strong>Log Data:</strong> Your IP address, browser type, device type, operating system, 
                                        and other technical information.</li>
                                    <li><strong>Cookies and Tracking:</strong> We use cookies and similar tracking technologies 
                                        to improve user experience and analyze site performance.</li>
                                </ul>
                            
                                <h3>c. Sensitive Information</h3>
                                <p>
                                    We may collect sensitive data, such as preferences and activity on the Site, but only to 
                                    enhance your user experience. We handle such data in compliance with applicable laws.
                                </p>
                            
                                <h2>2. How We Use Your Information</h2>
                                <p>We use the collected information for the following purposes:</p>
                                <ul>
                                    <li>To provide, operate, and improve the Site.</li>
                                    <li>To process payments securely.</li>
                                    <li>To customize and personalize your experience.</li>
                                    <li>To communicate with you, including sending notifications, updates, or promotional materials.</li>
                                    <li>To enforce our Terms of Service and ensure user safety.</li>
                                    <li>To comply with legal obligations.</li>
                                </ul>
                            
                                <h2>3. Sharing of Information</h2>
                                <p>We do not sell your personal information. However, we may share your data in the following circumstances:</p>
                                <ul>
                                    <li><strong>With Service Providers:</strong> For payment processing, hosting, analytics, 
                                        and customer support.</li>
                                    <li><strong>For Legal Compliance:</strong> If required by law, subpoena, or other legal processes.</li>
                                    <li><strong>In Case of Business Transfer:</strong> If we undergo a merger, acquisition, 
                                        or sale of assets.</li>
                                </ul>
                            
                                <h2>4. Your Rights</h2>
                                <p>
                                    Depending on your location, you may have the following rights:
                                </p>
                                <ul>
                                    <li><strong>Access:</strong> Request a copy of your data.</li>
                                    <li><strong>Correction:</strong> Correct inaccuracies in your data.</li>
                                    <li><strong>Deletion:</strong> Request deletion of your data (subject to legal requirements).</li>
                                    <li><strong>Opt-Out:</strong> Opt-out of marketing communications or cookie tracking.</li>
                                </ul>
                                <p>
                                    To exercise these rights, contact us at <a href="mailto:admin@camswithbabes.com">admin@camswithbabes.com</a>.
                                </p>
                            
                                <h2>5. Data Security</h2>
                                <p>
                                    We implement industry-standard security measures to protect your data. However, no system 
                                    is completely secure, and we cannot guarantee absolute protection.
                                </p>
                            
                                <h2>6. Cookies and Tracking Technologies</h2>
                                <p>
                                    We use cookies to enhance your experience. You can manage cookie preferences 
                                    through your browser settings.
                                </p>
                            
                                <h2>7. Age Restriction</h2>
                                <p>
                                    CamsWithBabes is intended for individuals 18 years or older. We do not knowingly 
                                    collect data from minors. If you believe we have inadvertently collected data 
                                    from a minor, contact us immediately.
                                </p>
                            
                                <h2>8. International Data Transfers</h2>
                                <p>
                                    If you access the Site outside the United States, your data may be transferred to and 
                                    stored in the U.S. By using the Site, you consent to this transfer.
                                </p>
                            
                                <h2>9. Changes to This Privacy Policy</h2>
                                <p>
                                    We may update this Privacy Policy from time to time. Any changes will be posted on this 
                                    page with an updated effective date. Please review it periodically.
                                </p>
                            
                                <h2>10. Contact Us</h2>
                                <p>
                                    If you have any questions about this Privacy Policy, please contact us:<br>
                                    Email: <a href="mailto:admin@camswithbabes.com">admin@camswithbabes.com</a><br>
                                    Mail: [Insert Mailing Address]
                                </p>
                            
                                <p><em>This Privacy Policy is a general template and should be reviewed by a legal expert to ensure compliance with applicable laws.</em></p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <h1>Terms and Conditions for CamsWithBabes</h1>
                                <p><strong>Effective Date:</strong> [Insert Date]</p>
                                <p>
                                    Welcome to CamsWithBabes (&quot;we,&quot; &quot;us,&quot; or &quot;our&quot;). By accessing or using our website, 
                                    <strong>https://camswithbabes.com</strong> (the &quot;Site&quot;), you agree to comply with and be bound by 
                                    these Terms and Conditions (&quot;Terms&quot;). If you do not agree to these Terms, you may not use the Site.
                                </p>
                            
                                <h2>1. Eligibility</h2>
                                <p>
                                    You must be at least 18 years old (or the legal age of majority in your jurisdiction) to access 
                                    or use the Site. By using the Site, you represent and warrant that you meet this age requirement.
                                </p>
                            
                                <h2>2. User Accounts</h2>
                                <p>
                                    To access certain features, you may need to create an account. You are responsible for maintaining 
                                    the confidentiality of your account information and are liable for all activities under your account.
                                </p>
                                <ul>
                                    <li>You agree to provide accurate and up-to-date information during registration.</li>
                                    <li>You must notify us immediately of any unauthorized use of your account.</li>
                                </ul>
                            
                                <h2>3. Prohibited Activities</h2>
                                <p>
                                    You agree not to engage in any of the following prohibited activities:
                                </p>
                                <ul>
                                    <li>Using the Site for unlawful purposes.</li>
                                    <li>Harassing, threatening, or defaming other users or models on the Site.</li>
                                    <li>Uploading or sharing content that violates intellectual property rights.</li>
                                    <li>Attempting to hack or disrupt the Site&apos;s functionality.</li>
                                </ul>
                            
                                <h2>4. Intellectual Property</h2>
                                <p>
                                    All content on the Site, including but not limited to text, images, videos, and graphics, 
                                    is the property of CamsWithBabes or its licensors and is protected by copyright, trademark, 
                                    and other intellectual property laws.
                                </p>
                                <p>
                                    You may not copy, distribute, or use any content from the Site without prior written consent.
                                </p>
                            
                                <h2>5. Payments and Refunds</h2>
                                <p>
                                    Any payments made on the Site are processed through secure third-party payment processors. 
                                    By making a payment, you agree to the terms of the respective payment processor.
                                </p>
                                <p>
                                    Refunds are subject to our discretion and will only be issued under exceptional circumstances. 
                                    Contact <a href="mailto:admin@camswithbabes.com">support@camswithbabes.com</a> for assistance.
                                </p>
                            
                                <h2>6. Disclaimers</h2>
                                <p>
                                    The Site is provided on an &quot;as-is&quot; and &quot;as-available&quot; basis. We make no warranties, 
                                    express or implied, regarding the Site&apos;s functionality, availability, or suitability for a particular purpose.
                                </p>
                                <p>
                                    We are not responsible for any damages arising from your use of the Site.
                                </p>
                            
                                <h2>7. Limitation of Liability</h2>
                                <p>
                                    To the fullest extent permitted by law, CamsWithBabes shall not be liable for any indirect, incidental, 
                                    or consequential damages arising from your use of the Site.
                                </p>
                            
                                <h2>8. Termination</h2>
                                <p>
                                    We reserve the right to terminate or suspend your account at any time for violations of these Terms 
                                    or any other reason at our discretion.
                                </p>
                            
                                <h2>9. Modifications to the Terms</h2>
                                <p>
                                    We may update these Terms from time to time. Any changes will be posted on this page with the 
                                    updated effective date. Continued use of the Site after changes indicates your acceptance of the updated Terms.
                                </p>
                            
                                <h2>10. Governing Law</h2>
                                <p>
                                    These Terms are governed by the laws of [Insert Jurisdiction], without regard to its conflict of law principles.
                                </p>
                            
                                <h2>11. Contact Us</h2>
                                <p>
                                    If you have any questions or concerns about these Terms, please contact us:<br>
                                    Email: <a href="mailto:admin@camswithbabes.com">admin@camswithbabes.com</a><br>
                                    Mail: [Insert Mailing Address]
                                </p>
                            
                                <p><em>This Terms and Conditions document is a general template and should be reviewed by a legal expert to ensure compliance with applicable laws.</em></p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
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
