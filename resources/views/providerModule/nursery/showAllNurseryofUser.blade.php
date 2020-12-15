@extends('layouts\default')
@include('includes.providerNav')
@section('content')
<div  style="margin-top:200px;" class="container">
<a class="btn btn-small btn-success" href="{{ URL::to('/userLanding') }}">Back to Nursery Owner Home</a>
    
    <h1>Nursery Management By Nursery</h1>
    <h1> Your Nursery r লিস্ট</h1>

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
        @foreach($nurseries as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nursery_name }}</td>
                <td>{{ $value->description }}</td>
                {{-- <td>{{ $value->address }}</td> --}}
               
    
                <!-- we will also add show, edit, and delete buttons -->
                <td>
    
                   
                    <a class="btn btn-small btn-info" href="{{'createInvByNusId/'.$value->id}}">Inventory Managemnt</a>
                    <a class="btn btn-small btn-info" href="{{'nurseryDetailsShow/'. $value->id}}">Show All Inventories of the nursery </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
<li class="media">                               
    <div class="media-body">  <a class="btn-solid-reg page-scroll" href="{{URL::to('nursery_mng/create')}}">Add a New Nursery</a></div>
</li>

@endsection