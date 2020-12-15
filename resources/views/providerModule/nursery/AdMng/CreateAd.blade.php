
@extends('layouts.default')

@include('includes.providerNav')

@section('content')


<div class="userHome">
    <!-- Header -->
    <header id="header" class="ex-header" >
      <div style="margin-top:-15px;" class="container" >
          <div class="row">
              <div class="col-lg-12">
                  <h2>
                      Ad Management  
                      পোর্টাল
                  </h2>
                  <h2>   স্বাগতম  {{Session::get('name')}}</h2>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </header> <!-- end of ex-header -->
  <!-- end of header -->
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Open a new Ad') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/publishAd/') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="display_name" class="col-md-4 col-form-label text-md-right">{{ __('Name of the Ad') }}</label>

                            <div class="col-md-6">
                                <input id="display_name" type="text" class="form-control @error('display_name') is-invalid @enderror" name="display_name" value="{{ old('display_name') }}" required autocomplete="Name of the Advertisement">

                                @error('display_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                                    

                        <input id="owner_id" type="hidden" name="owner_id" value="{{$owner_id}}">  
                        <input id="inv_id" type="hidden" name="inv_id" value="{{$inv_id}}">               
                        
                        <div class="form-group row">
                            <label for="unit_price" class="col-md-4 col-form-label text-md-right">{{ __('Unit price of the Product Item') }}</label>
                           
                            <div class="col-md-6">
                 <input  id="unit_price" class="form-control"  type="text" class="form-control 
             @error('unit_price') is-invalid @enderror" name="unit_price" value="{{ old('unit_price') }}" required autocomplete="unit_price">

                                @error('unit_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                
                            </div>
                        </div>

                         
                        <div class="form-group row">
                            <label for="display_info" class="col-md-4 col-form-label text-md-right">{{ __('Display Description of the Product Item') }}</label>
                           
                            <div class="col-md-6">
                 <textarea  id="display_info" class="form-control"  type="text" class="form-control 
             @error('display_info') is-invalid @enderror" name="display_info" value="{{ old('display_info') }}" required autocomplete="display_info">
                     </textarea>
                                @error('display_info')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                 
                            </div>
                        </div>

              
                
                <input id="plant_id" type="hidden" name="plant_id" value="{{$plant_id}}">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Ad') }}
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

