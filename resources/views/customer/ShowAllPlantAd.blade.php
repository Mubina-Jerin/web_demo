@extends('layouts.default')
@include('includes.userNav')
@section('content')
  
    <div id="intro" class="basic-1">
    <a class="btn btn-small btn-success" href="{{ URL::to('/userLanding' ) }}">Back to  Home</a>
        @foreach($mat_obj as $item)
    <div style="margin-top:80px;" class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="text-container" >
                      
            @php
            $resource=DB::table('resources')->where('plant_image_id',$item->plant_id)->get();
            $provider_obj=DB::table('providers')->where('id',$item->owner_id)->get();
            $inv_obj=DB::table('nursery_inventories')->where('id',$item->inv_id)->get();
            $nursery_obj= DB::table('nurseries')->where('id',$inv_obj[0]->nursery_id)->get();
           
            $num_of_images=count($resource);           
            @endphp
                <div class="section-title"><h2> <b>Ad Display Title:{{$item->display_name}}</b></h2></div>
                    <h2><b>Unite Price: </b> {{$item->unit_price}}</h2>
                    <p><b>Display Info: </b>{{$item->display_info}}</p>
                     <p><b>Nursery Name: </b>{{$nursery_obj[0]->nursery_name}}</p>
                    <p><b>Nursery Address: </b>{{$nursery_obj[0]->address}}</p>

                   
                    <a class="btn btn-small btn-success" href="{{ URL::to('/orderItem/'. $item->id ) }}">Order This Item</a>
                   
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-8 mt-6">
                
            <div class="row justify-content-center">
          
                 @if($num_of_images >0)
                 @foreach ($resource as $item)
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
@endforeach
<!-- end of intro -->

@endsection



