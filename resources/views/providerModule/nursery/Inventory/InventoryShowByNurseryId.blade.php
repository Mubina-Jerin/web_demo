@extends('layouts\default')
@include('includes.providerNav')
@section('content')
<div  style="margin-top:200px;" class="container">

    <h1>Inventory r লিস্ট</h1>

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
               
               
            </tr>
        </thead>
        <tbody>
        @foreach($inventories as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->inv_name }}</td>
                <td>{{ $value->inv_type }}</td>
               
               
            </tr>
            <td>
    
                <a class="btn btn-small btn-info" href="{{ URL::to('createPlantByInvId/'.  $value->id ) }}">Add a Item to the inventory</a>
                <a class="btn btn-small btn-info" href="{{URL::to('nursery_inventory/'.$value->id)}}"> Show the Inventory </a>
               
            </td>
        @endforeach
        </tbody>
    </table>
</div>
&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
<li class="media">                               
    <div class="media-body">  <a class="btn-solid-reg page-scroll" href="{{URL::to('nursery_inventory/create')}}">Add New Inventory</a></div>
</li>

@endsection