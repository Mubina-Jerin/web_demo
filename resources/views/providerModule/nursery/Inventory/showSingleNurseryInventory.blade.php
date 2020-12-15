@extends('layouts.default')
@include('includes.providerNav')


@section('content')


{{-- 
{{var_dump($plant_infos)}}
{{exit()}} --}}
<div  style="margin-top:200px;" class="container">

    
    <h1>Inventory Name: {{$inventory->inv_name}} Plant r লিস্ট</h1>
    <li class="media">                               
    <div class="media-body">  <a class="btn-solid-reg page-scroll" href="{{URL::to('createPlantByInvId/'.  $inventory->id ) }}">Add a New Plant to the Inventory</a></div>
    </li>
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
      @if($plant_infos)
       @foreach ($plant_infos as $value)
       <tr>
             
        <td>{{ $value->id }}</td>
        <td>{{ $value->inv_id }}</td>
        <td>{{ $value->plant_name }}</td>
        <td>{{ $value->plant_type }}</td>
        <td>{{ $value->prefered_season }}</td>
        <td>{{ $value->plant_info }}</td>  
        
        <td>
            <a class="btn btn-small btn-success" href="{{ URL::to('plant_info/' . $value->id) }}">দেখুন</a>
        </td>
    </tr>
       @endforeach
       @else
       <p>
        <strong>There is no inventory Item at this time
        </strong>
    </p>
       @endif
        </tbody>
</table>
</div>    
    
@endsection

