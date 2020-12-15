@extends('layouts.default')



@section('content')

<div style="margin-top:200px;" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                       @php echo $user; @endphp 
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
