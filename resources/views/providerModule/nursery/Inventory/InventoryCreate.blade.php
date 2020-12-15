@extends('layouts.default')
@include('includes.providerNav')
@section('content')
<div style="margin-top:200px;" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Open a new Inventory') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ URL::to('nursery_inventory') }}">
                        @csrf
                        <input id="nursery_id" type="hidden" name="nursery_id" value="{{$nursery_id}}">
                        <div class="form-group row">
                            <label for="inv_name" class="col-md-4 col-form-label text-md-right">{{ __('Name of the Inventory') }}</label>

                            <div class="col-md-6">
                                <input id="inv_name" type="text" class="form-control @error('inv_name') is-invalid @enderror" name="inv_name" value="{{ old('inv_name') }}" required autocomplete="Name of the Inventory">

                                @error('inv_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                                    

                        <div class="form-group row">
                            <label for="inv_type" class="col-md-4 col-form-label text-md-right">{{ __('Type of the Inventory') }}</label>

                            <div class="col-md-6">
                                <select id="inv_type" type="text" class="form-control @error('inv_type') is-invalid @enderror" name="inv_type" value="{{ old('inv_type') }}" required autocomplete="Type of the Inventory">
                                    <option value="Plant_inv">Plant Inventory</option>
                                    <option value="Material_inv">Materials for sale</option>
                                    <option value="Soil_inv">Soil Inventory</option>
                                    <option value="Pesticide_inv">Fertilizer Inventory</option>
                                    <option value="Seed_inv">Seed Bank</option>
                              
                                @error('inv_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </select>
                            </div>
                        </div>             
                        
                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Nursery Inventory') }}
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








