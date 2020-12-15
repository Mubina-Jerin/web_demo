@extends('layouts\default')
@include('includes.providerNav')
 @section('content')
 <!-- Intro -->
 <div id="intro" class="basic-1">
    <div style="margin-top:80px;" class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="text-container" >
                <a class="btn btn-small btn-success" href="{{ URL::to('plant_info') }}">Back to Inventory Home</a>
                <div class="section-title"><h2> <b>Plant name:{{$plant_infos->plant_name}}</b></h2></div>
                    <h2><b>Plant Type:: </b> {{$plant_infos->plant_type}}</h2>
                    <p>{{$plant_infos->plant_info}}</p>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-8 mt-6">
                
            <div class="row justify-content-center">
            @foreach ($resources as $item)
                <div class="col-lg-6 mb-3">
                <div class="image-container">
                    <img class="img-fluid" src="{{asset('storage/'.$item->img)}}" alt="alternative" style="width: 300px;height: 150px">
                </div>
                <p>{{$item->caption}}</p>
            </div> 
            @endforeach
            </div>
            <!-- {{asset('storage/'.$item->img)}} -->
       
            
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of intro -->
@endsection