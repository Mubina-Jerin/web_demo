@extends('layouts\default')
@include('includes.userNav')
@section('content')
<div  style="margin-top:200px;" class="container">

    <h1> My profile</h1>

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
       
            <tr>
                <td>{{ $customers->id }}</td>
                <td>{{ $customers->first_name. " ". $customers->last_name }}</td>
                <td>{{ $customers->phone_number }}</td>
                <td>{{ $customers->address }}</td>
               
                @php Session::put('customer_id',$customers->id) @endphp
                <!-- we will also add show, edit, and delete buttons -->
                <td>
    
                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
    
                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('customer/' . $customers->id) }}">দেখুন</a>
                   
                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('customer/' . $customers->id . '/edit') }}">এডিট করুন</a>
    
                </td>
            </tr>
    
        </tbody>
    </table>
</div>

@endsection