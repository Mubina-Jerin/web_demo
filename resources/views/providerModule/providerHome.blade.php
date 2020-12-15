@extends('layouts.default')

@include('includes.providerNav')

@section('content')

{{-- {{var_dump($user)}} --}}


<div class="userHome">
      <!-- Header -->
      <header id="header" class="ex-header">
        <div style="margin-top:-15px;" class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <h1>বাগান সেবীর
                        পোর্টাল
                    </h1> --}}
                    <h1>
                        নার্সারী 
                        পোর্টাল
                    </h1>
                    <h1>   স্বাগতম  {{$user['name']}}</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <div class="row justify-content-center">
 
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
                            <h3 class="card-title">নার্সারী ম্যানেজম্যান্ট</h3>
                            <p>নার্সারী ক্যাটালগ, বাগানের পরিচর্যা সেবা তৈরী
                                সব একসাথে এক জায়গায়
                            </p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">নার্সারী ক্যাটালগ</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">নার্সারী ক্যাটালগ করূন</div>
                                </li>
                            </ul>
                           
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="{{ URL::to('nursery_mng') }}">প্রবেশ</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-2.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">বাগান সেবার তালিকা তৈরী</h3>
                            <p>বাগান সেবার তালিকা করূন। নার্সারী সেবা তৈরী করুন </p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">বাগান চাষের খুঁটিনাটি সাহায্য</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">বাগানের সরঞ্জাম তালিকা তৈরী</div>
                                </li>
                            </ul>
                            
                        </div>
                        <div class="button-container">
                        <a class="btn-solid-reg page-scroll" href="{{URL::to('/adCreationLanding')}}">প্রবেশ করুন</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-3.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">অর্ডার ট্রেকিং </h3>
                            <p>অর্ডার ম্যানেজ করুন </p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">বাসায় বসে নার্সারী ম্যানেজম্যান্ট </div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">নার্সারী ইনভেনটরী আপডেট </div>
                                </li>
                            </ul>
                            
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">প্রবেশ করুন</a>
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
