@extends('layouts.default')



@section('content')


<div class="userHome">
      <!-- Header -->
      <header id="header" class="ex-header">
        <div style="margin-top:-15px;" class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <h1>বাগান সেবীর
                        পোর্টাল
                    </h1> --}}
                    <h1>বাগানীর
                        পোর্টাল
                    </h1>
                    <h1>   স্বাগতম  {{$user['name']}}</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <div class="row justify-content-center">
    <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">  <a class="navbar-brand" href="{{ URL::to('customer') }}"> 
                    বাগানী </a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 <nav class="navbar navbar-inverse">
                    {{-- <div class="navbar-header">
                        <a class="navbar-brand" href="{{ URL::to('customer') }}">Customer</a>
                     </div> --}}
                     <ul class="nav navbar-nav">
                         <li><a href="{{ URL::to('customer') }}">
                             View All Customers</a></li>
                        <li><a href="{{ URL::to('customer/create') }}">
                            Create a Customer</a>
                         </ul>
                 </nav>
                </div>
                
        </div>
    </div>

    

    <!-- Services -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">বাগান পরিসেবা</div>
                    <h2> আমাদের যেসব সেবা <br> আপনার জন্য গুরুত্বপূর্ণ
                    </h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-1.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">ফুলের বাগান তৈরী</h3>
                            <p>ফুলের বাগান তৈরী , ফুলের বাগানের পরিচর্যা
                                সব একসাথে এক জায়গায়
                            </p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">ফুলের বাগান সেবা</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">ফুলের বাগানের পরিচর্যা সেবা</div>
                                </li>
                            </ul>
                            <p class="price">শুরু <span>৳ ৫০০</span> থেকে</p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">বুক করুন</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-2.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">সবজি বাগান তৈরী</h3>
                            <p>সবজি ছাষ করে বাসায় গরে তলুন নিজের সবজি বাগান। এর ফলে পাবেন স্বাস্থ্যকর এবং কেমিক্যাল মুক্ত সবজি </p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">সবজি চাষের খুঁটিনাটি</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">সবজি কেনা বেচা</div>
                                </li>
                            </ul>
                            <p class="price">শুরু <span>৳ ৩০০</span> থেকে</p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">বুক করুন</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-3.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">বাগানের জরুরি সরঞ্জাম </h3>
                            <p>বাগান করতে গিয়ে যেসব দরকারি জিনিশ যেমন বীজ,মাটি, টব, বীজতলা  এখনি নিন স্বল্প দামে</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">বাসায় বসে পান হোম ডেলিভারি </div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">সবচেয়ে কম সময়ে অন টাইম ডেলিভারি</div>
                                </li>
                            </ul>
                            <p class="price">শুরু <span>৳ ৩০০</span> থেকে</p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">বুক করুন</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->
</div>
@endsection
