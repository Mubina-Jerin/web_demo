@extends('layouts\default')
@include('includes.providerNav')
@section('content')
<div  style="margin-top:200px;" class="container">

    <h1>List of services for Nursery Owners</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Service Name</td>
                <td>Description
                </td>
               
               
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Adding Inventory to a nursery</td>
                       
            </tr>
            <td>
    
            <a class="btn btn-small btn-success" href="{{ URL::to('nursery_inventory') }}">Check a Inventory</a>
            <a class="btn btn-small btn-info" href="{{ URL::to('nursery_inventory') }}">Edit Inventory Information</a>
            <a class="btn btn-small btn-info" href="{{ URL::to('createPlantByInvId') }}">Add a Item to a inventory</a>
            <a class="btn btn-small btn-info" href="{{URL::to('createInvByNusId')}}">Inventory Create</a>
               
            </td>

            <tr>
                <td>Adding New nursery</td>
                       
            </tr>
            <td>
    
            <a class="btn btn-small btn-success" href="{{ URL::to('nursery_inventory') }}">Check a Nursery</a>
            <a class="btn btn-small btn-info" href="{{ URL::to('nursery_inventory') }}">Edit Nursery Information</a>
            <a class="btn btn-small btn-info" href="{{ URL::to('createPlantByInvId') }}">Add a Item to a Nursery</a>
            <a class="btn btn-small btn-info" href="{{URL::to('createInvByNusId')}}">Nursery Create</a>
               
            </td>
    
        </tbody>
    </table>
</div>


@endsection