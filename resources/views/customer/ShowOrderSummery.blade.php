@extends('layouts.default')
@include('includes.userNav')
@section('content')
  
    <div id="intro" class="basic-1">
    <a class="btn btn-small btn-success" href="{{ URL::to('/userLanding' ) }}">Back to  Home</a>
       
    <div style="margin-top:80px;" class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="text-container" >
               @php
               $provider_name= DB::table('providers')->where('id',$order_obj[0]->recipent_id)->get();
               @endphp
                <div class="section-title"><h2> <b>Order Summery</b></h2></div>
                <b>The Summery: </b> <h2> {{$order_obj[0]->order_summary}}</h2>
                <b> Total Amount: </b>   <h2>{{$order_obj[0]->total_amount}}</h2>
                <b> Tracking ID: </b>   <h2>{{$order_obj[0]->tracking_id}}</h2> 
                <b>Nursery Contact person Name:</b>   <h2>{{$provider_name[0]->first_name}}</h2>
                <b>Call the Nursery: </b><h2>{{$order_obj[0]->provider_phone_number}}</h2>
                   
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
           
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->

<!-- end of intro -->

@endsection

