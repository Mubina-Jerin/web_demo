@extends('layouts\default')
@include('includes.providerNav')
@section('content')
<div  style="margin-top:200px;" class="container">
<a class="btn btn-small btn-success" href="{{ URL::to('nursery_mng') }}">Back to Nursery Home</a>
<a class="btn btn-small btn-info" href="{{'nurseryDetailsShow/'. Session::get('nursery_id')}}">Ad Management Home of the nursery </a>
    <h1>Plant r লিস্ট</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Inv Id </td>
                <td>Plant Name</td>
                <td>Plant Type </td>
                <td>Prefered Season </td>
                <td>Description
                </td>
               
               
            </tr>
        </thead>
        <tbody>
            
        @foreach($PlantList as $key => $value)
            <tr>
                
                <td>{{ $value->id }}</td>
                <td>{{ $value->inv_id }}</td>
                <td>{{ $value->plant_name }}</td>
                <td>{{ $value->plant_type }}</td>
                <td>{{ $value->prefered_season }}</td>
                <td>{{ $value->plant_info }}</td>  
                {{-- <td>{{ $value->address }}</td> --}}
               
    
                {{-- <!-- we will also add show, edit, and delete buttons -->
                <td>
    
                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
    
                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                   
    
                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    
                   
                </td> --}}
                <td>
                    <a class="btn btn-small btn-success" href="{{ URL::to('plant_info/' . $value->id) }}">দেখুন</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
{{var_dump($inv_id)}}
<li class="media">                               
    <div class="media-body">  <a class="btn-solid-reg page-scroll" href="{{URL::to('createPlantByInvId/'.$inv_id)}}">Add plant to the Inventory</a></div>
</li>

@endsection