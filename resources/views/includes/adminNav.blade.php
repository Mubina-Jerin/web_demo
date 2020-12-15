
   
<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="btn btn-sm navbar-brand logo-image" href="#" id="open_sideboard"><img src="images/log.svg" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
       <!-- end of mobile menu toggle button -->


       
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ url('/') }}">হোম <span class="sr-only">(current)</span></a>     
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#intro">নগর কৃষি</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">বাগান সেবা</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#callMe">কৃষি ব্লগ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#projects">ছাদ কৃষির ইতিহাস</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#projects">যোগাযোগ</a>
                </li>

                <!-- <li class="nav-item">
                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth                        
                            <a class=" nav-link" href="{{ url('/logout') }}">লগ আউট</a>
                        @else
                            <a class=" nav-link" href="{{ route('login') }}">লগ ইন</a>
    
                            @if (Route::has('register'))
                                <a class=" nav-link" href="{{ route('register') }}">রেজিস্ট্রেশন</a>
                            @endif
                        @endauth
                    </div>
                @endif -->
               
              
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->
