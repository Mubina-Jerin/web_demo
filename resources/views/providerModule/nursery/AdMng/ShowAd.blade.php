@extends('layouts\default')
@include('includes.providerNav')
 @section('content')
 <!-- Intro -->
 <div id="intro" class="basic-1">
    <div style="margin-top:80px;" class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="text-container" >
                <a class="btn btn-small btn-success" href="{{ URL::to('nurseryDetailsShow/'. $nursery_id ) }}">Back to Nursey Ad Home</a>
                <div class="section-title"><h2> <b>Ad Display Title:{{$mat_obj[0]->display_name}}</b></h2></div>
                    <h2><b>Unite Price: </b> {{$mat_obj[0]->unit_price}}</h2>
                    <p>{{$mat_obj[0]->display_info}}</p>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-8 mt-6">
                
            <div class="row justify-content-center">
                 
                 @if(count($resources)>0)
                 @foreach ($resources as $item)
                <div class="col-lg-6 mb-3">
              
                <div class="image-container">
                    <img class="img-fluid" src="{{asset('storage/'.$item->img)}}" alt="alternative" style="width: 300px;height: 150px">
                </div>
                <p>{{$item->caption}}</p>
                  </div> 
                @endforeach
                 @else
                 <h3>There is no image to preview</h3> </div>
                 @endif   
                 
            
           
            </div>
        
            
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of intro -->
@endsection