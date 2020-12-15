


@extends('layouts.default')
@include('includes.userNav')
@section('content')
<div style="margin-top:200px;" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blog Creation') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/blog') }}">
                        @csrf

                      
                        
                        <div class="form-group row">
                            <label for="mat_id" class="col-md-4 col-form-label text-md-right">{{ __('blog_title') }}</label>
                           
                            <div class="col-md-6">
                 <input id="blog_title" class="form-control"  type="text" class="form-control 
             @error('blog_title') is-invalid @enderror" name="blog_title" value="" required>
                             
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="blog_introduction" class="col-md-4 col-form-label text-md-right">{{ __('blog_introduction') }}</label>
                           
                            <div class="col-md-6">
                 <textarea id="blog_introduction" class="form-control"  type="text" class="form-control 
             @error('blog_introduction') is-invalid @enderror" name="blog_introduction" value="" required>
                        </textarea>      
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="blog_body" class="col-md-4 col-form-label text-md-right">{{ __('blog_body') }}</label>
                           
                            <div class="col-md-6">
                 <textarea id="blog_body" class="form-control"  type="text" class="form-control 
             @error('blog_body') is-invalid @enderror" name="blog_body" value="" required>
                        </textarea>      
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="blog_conclusion" class="col-md-4 col-form-label text-md-right">{{ __('blog_conclusion') }}</label>
                           
                            <div class="col-md-6">
                 <textarea id="blog_conclusion" class="form-control"  type="text" class="form-control 
             @error('blog_conclusion') is-invalid @enderror" name="blog_conclusion" value="" required>
                        </textarea>      
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="img" type="text" class="col-md-4 col-form-label text-md-right">{{ __('Images of the Blog') }}</label>

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
                                    {{ __('Create Blog') }}
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








