@extends('layouts.default')
@include('includes.providerNav')
@section('content')
<div style="margin-top:200px;" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add a new plant to the Inventory') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ URL::to('plant_info') }}" enctype="multipart/form-data">
                        @csrf
                        <input id="inv_id" type="hidden" name="inv_id" value="{{$inv_id}}">
                        <div class="form-group row">
                            <label for="plant_name" class="col-md-4 col-form-label text-md-right">{{ __('Name of the Plant') }}</label>

                            <div class="col-md-6">
                                <input id="plant_name" type="text" class="form-control @error('plant_name') is-invalid @enderror" name="plant_name" value="{{ old('plant_name') }}" required autocomplete="Name of the Plant">

                                @error('plant_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>        
                                                 
                        <div class="form-group row">
                            <label for="plant_type" class="col-md-4 col-form-label text-md-right">{{ __('Name of the Plant') }}</label>

                            <div class="col-md-6">
                                <select id="plant_type" type="text" class="form-control @error('plant_type') is-invalid @enderror" name="plant_type" value="{{ old('plant_type') }}" required autocomplete="Type of the Plant">
                                    <option value="fruit"> Fruits Plant </option>
                                    <option value="grain"> Harvesting Crop(grains) </option>
                                    <option value="orchide"> Gormenting Plants </option>
                                    <option value="flower"> Flowers </option>
                                    <option value="harbal"> Harbel Plants </option>
                                
                                @error('plant_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </select>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="prefered_season" class="col-md-4 col-form-label text-md-right">{{ __('Prefered Season of the Plant') }}</label>

                            <div class="col-md-6">
                                <input id="prefered_season" type="text" class="form-control @error('prefered_season') is-invalid @enderror" name="prefered_season" value="{{ old('prefered_season') }}"  autocomplete="Prefered Season of the Plant">

                                @error('prefered_season')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                                   
                        <div class="form-group row">
                            <label for="plant_info" type="text" class="col-md-4 col-form-label text-md-right">{{ __('Description of the Plant') }}</label>

                            <div class="col-md-6">
                                <textarea id="plant_info" class="form-control @error('plant_info') is-invalid @enderror" name="plant_info" value="{{ old('plant_info') }}" required autocomplete="Description of the Plant">

                                @error('plant_info')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </textarea>
                            </div>
                        </div>   


                        <div class="form-group row">
                            <label for="img" type="text" class="col-md-4 col-form-label text-md-right">{{ __('Images of the Plant') }}</label>

                            <div class="col-md-6">
                                <input required type="file" class="form-control" name="images[]" placeholder="Upload Images" multiple>
                                @error('img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                            </div>
                        </div>  
                       
                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add this Plant to the Inventory') }}
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








