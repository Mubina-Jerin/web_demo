

@extends('layouts.default')
@include('includes.userNav')
@section('content')
<div style="margin-top:200px;" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    @php
            
            $provider_obj=DB::table('providers')->where('id',$mat_obj[0]->owner_id)->get();
                       
            @endphp
            <div class="card-header"><h3>{{ __('Contact Person') }} </h3></div>
            <label for="provider_name" class="col-md-4 col-form-label text-md-right"><h3>{{$provider_obj[0]->first_name}}</h3></label>
            <div class="card-header"><h3>{{ __('Contact Phone Number') }} </h3></div>
            <label for="provider_number" class="col-md-4 col-form-label text-md-right"><h3>{{$provider_obj[0]->phone_number}}</h3></label>
                

                <div class="card-body">
                    <form method="POST" action="{{ url('/order') }}">
                        @csrf

                       <h1> order Summary</h1>
                        
                        <div class="form-group row">
                            <label for="mat_id" class="col-md-4 col-form-label text-md-right">{{ __('Material Id') }}</label>
                           
                            <div class="col-md-6">
                 <input id="mat_id" class="form-control"  type="text" class="form-control 
             @error('mat_id') is-invalid @enderror" name="mat_id" value="{{$mat_obj[0]->id}}" readonly>
                             
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="display_name" class="col-md-4 col-form-label text-md-right">{{ __('Display Name') }}</label>
                           
                            <div class="col-md-6">
                 <input id="display_name" class="form-control"  type="text" class="form-control 
             @error('display_name') is-invalid @enderror" name="display_name" value="{{$mat_obj[0]->display_name}}" readonly>
                             
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="display_name" class="col-md-4 col-form-label text-md-right">{{ __('Quantity Name') }}</label>
                            <div class="col-md-6">
                 <input id="quantity" class="form-control"  type="number" class="form-control 
             @error('quantity') is-invalid @enderror" name="quantity" value="">
                             
                            </div>
                        </div>
                        
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Order') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection








