@extends('layouts.default')

@include('includes.userNav')

@section('content')

<h1> বিবরন {{ $customer->first_name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $customer->first_name. " ". $customer->last_name  }}</h2>
        <p>
            <strong>ফোন নাম্বার 
            </strong> {{ $customer->phone_number }}<br>
            <strong>ঠিকানা
            </strong> {{ $customer->address }}
        </p>
    </div>
@endsection