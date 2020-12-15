

@extends('layouts\default')
@include('includes.providerNav')
@section('content')
<div  style="margin-top:200px;" class="container">
<a class="btn btn-small btn-success" href="{{ URL::to('/userLanding') }}">Back to Nursery Owner Home</a>
    
    <h1>Nursery Ad Management By Nursery</h1>
    <h1> Your Nursery List</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>নাম </td>
                <td>Description
                </td>
                <td>Address
                </td>
               
               
            </tr>
        </thead>
        <tbody>
        
        @foreach($nursery_obj as $key => $value)
            <tr >
                <td>{{ $value->id }}</td>
                <td>{{ $value->nursery_name }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->address }}</td>
                         
            </tr>
            
            <tr >
            </tr>
            <tr >
            @foreach($inv_obj as $inv_key => $inv_value)
            <table class="table table-striped table-bordered">
             <tr>
            <h2> Inventory List (id: {{$inv_value->id}})</h2>
            </tr>
         
            <thead>
            <tr> 
                <td>ID</td>
                <td>Inventory Name </td>
                <td>Inventory_type </td>
            </tr>
            </thead>
            <tbody>
                <tr >
                <td>{{ $inv_value->id }}</td>
                <td>{{ $inv_value->inv_name }}</td>
                <td>{{ $inv_value->inv_type }}</td>
                                     
            </tr>
            <tr >
            </tr>
             @if($is_inventory_empty[$inv_value->id])
             <tr >
                 <h4>there is no plants in inventory {{$inv_value->id}}</h4>
            </tr>
             @else
            <table class="table table-striped table-bordered">
            <h3> List of Plants in of inventory id : {{$inv_value->id}}</h3>
                <thead>
                <tr>
                <td>ID</td>
                <td>Inv Id </td>
                <td>Plant Name</td>
                <td>Plant Type </td>
                <td>Prefered Season </td>
                <td>Description
                </td>
                <td>Action
                </td>
                </tr>
                </thead>
                <tbody>
                @foreach($plant_infos[0] as $key_plant => $plant_value)
                           <tr>

                <td>{{ $plant_value->id }}</td>
                <td>{{ $plant_value->inv_id }}</td>
                <td>{{ $plant_value->plant_name }}</td>
                <td>{{ $plant_value->plant_type }}</td>
                <td>{{ $plant_value->prefered_season }}</td>
                <td>{{ $plant_value->plant_info }}</td> 
                @php 
                Session::forget('nursery_id');
                Session::forget('current_inv_id');
                Session::put('nursery_id',$value->id);
                Session::put('current_inv_id',$inv_value->id);
                $mat_id=DB::table('materials')->where('plant_id',$plant_value->id )->get('id');
               
                @endphp
                @if(count($mat_id)>0)
                <td>  <a class="btn btn-small btn-info" 
                href="{{ URL::to('/showAd/' . $plant_value->id) }}">Show this plant  Ad</a>
                </td>
                @else
                <td>  <a class="btn btn-small btn-info" 
                href="{{ URL::to('/postAd/' . $plant_value->id) }}">Post this plant as Ad</a>
                </td>
                @endif
                </tr> 
            @endforeach
           
                </tbody>
            </table>
            @endif
            @endforeach
            </tbody>
            </table>
            </tr>
            <tr >
            </tr>
                      
        @endforeach
     
        </tbody>
    </table>
</div>
&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;


@endsection
