@extends('layouts.default')

@include('includes.userNav')

@section('content')

<div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title"><h1>{{$blog->blog_title}}</h1></div>
                        <h2>Intro</h2>
                        <p> {{$blog->blog_introduction}}</p>
                        <p> {{$blog->blog_body}}</p>
         
                        <p class="testimonial-text">{{$blog->blog_conclusion}}</p>
                        @php
                        $customer=DB::table('customers')->where('user_id',$blog->user_id)->get();
                        @endphp
                      <b>Author Name</b>  <div class="testimonial-author">{{$customer[0]->first_name}}</div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/intro-office.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->
@endsection