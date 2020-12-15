@extends('layouts.default')
@include('includes.providerNav')
@section('content')
<div style="margin-top:200px;" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Open a new Nursery') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/nursery_mng') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nursery_name" class="col-md-4 col-form-label text-md-right">{{ __('Name of the nursery') }}</label>

                            <div class="col-md-6">
                                <input id="nursery_name" type="text" class="form-control @error('nursery_name') is-invalid @enderror" name="nursery_name" value="{{ old('nursery_name') }}" required autocomplete="Name of the nursery">

                                @error('nursery_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                                    

                                         
                        
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description of the nursery') }}</label>
                           
                            <div class="col-md-6">
                 <textarea  id="description" class="form-control"  type="text" class="form-control 
             @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                 </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address of the nursery') }}</label>
                           
                            <div class="col-md-6">
                 <input  id="address" class="form-control"  type="text" class="form-control 
             @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                 
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Nursery') }}
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








