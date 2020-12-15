@extends('layouts.default')



@section('content')

<h1> বিবরন {{ $provider->first_name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $provider->first_name. " ". $provider->last_name  }}</h2>
        <p>
            <strong>ফোন নাম্বার 
            </strong> {{ $provider->phone_number }}<br>
            <strong>ঠিকানা
            </strong> {{ $provider->address }}
        </p>
    </div>
@endsection