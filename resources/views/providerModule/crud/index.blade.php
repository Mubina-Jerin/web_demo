@extends('layouts\default')
@include('includes.providerNav')
@section('content')
<div  style="margin-top:200px;" class="container">

    <h1>Nursery Owners লিস্ট</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>নাম </td>
                <td>ফোন নাম্বার
                </td>
                <td>ঠিকানা
                 </td>
               
            </tr>
        </thead>
        <tbody>
        @foreach($provider as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->first_name. " ". $value->last_name }}</td>
                <td>{{ $value->phone_number }}</td>
                <td>{{ $value->address }}</td>
               
    
                <!-- we will also add show, edit, and delete buttons -->
                <td>
    
                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
    
                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('provider/' . $value->id) }}">দেখুন</a>
    
                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('provider/' . $value->id . '/edit') }}">এডিট করুন</a>
    
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection