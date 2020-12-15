<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="index.html"><img src="{{url('/images/log.svg')}}" alt="alternative"></a>
    
    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ url('/userLanding') }}">হোম <span class="sr-only">(current)</span></a>     
            </li>
            @if(Session::get('current_order_id'))
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ URL::to('/ShowOrderSummery') }}">My orders </a> 
            </li>
            @endif
            
            @php
            $id=Session::get('customer_id');
            $provider=DB::table('providers')->where('user_id',Session::get('login_id'))->get();
            Session::put('provider_id',$provider[0]->id);
            @endphp
            <li class="nav-item">
            @if($id==NULL)
                         
                <a class="nav-link page-scroll" href="{{ URL::to('provider/'. $provider[0]->id .'/edit') }}">Edit my Info </a> 
            @else
            <a class="nav-link page-scroll" href="{{ URL::to('customer/'. $id .'/edit') }}">Edit my Info </a> 
            @endif
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ URL::to('blog/create') }}">ব্লগ লিখুন </a> 
            </li>
           
          <li class="nav-item">
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
            @endif
           
          
        </ul>
        
    </div>
</nav> <!-- end of navbar -->
<!-- end of navbar -->
