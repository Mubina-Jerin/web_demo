
<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body data-spy="scroll" data-target=".fixed-top">
      <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
<!-- <div class="container"> -->

    <!-- <header class="row"> -->
        @include('includes.header')
    <!-- </header> -->

    <!-- <div id="main" class="row"> -->
                        

    
             
                    <form style="margin-top:200px;" method="POST" action="{{ route('registration') }}">
                       
                       {{-- @if(count($errors>0))
                        @foreach($errors->all() as $error)
                        <p class="alert alert-danger"> {{$error}}</p>
                        @endforeach
                        @endif --}}
                    
                        @csrf 
                        <h2 align="center" >রেজিস্ট্রেশন</h2>
                           
                        <div class="form-group row">
                            <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('আপনার নাম') }}</label>

                            <div class="col-md-6">
                                <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" autofocus>

                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('ফোন নাম্বার') }}</label>
                           
                            <div class="col-md-6">
                 <input id="phone_number" class="form-control"  type="text" class="form-control 
             @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user_type" class="col-md-4 col-form-label text-md-right">{{ __('আপনার সম্পর্কে বলুন') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="user_type" type="user_type" class="form-control @error('user_type') is-invalid @enderror" name="user_type" required autocomplete="new-password">
                                -->
                            <select id="user_type" type="user_type" class="form-control @error('user_type') is-invalid @enderror" name="user_type" required >
                             <option value="customer">বাগানে আগ্রহী </option>
                             <option value="provider">নার্সারী মালিক</option>
                             <option value="broker">বাগান সেবায় আগ্রহী</option>
                              </select>
                                @error('user_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('আপনার পছন্দের পিন প্রবেশ করুন') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('আপনার পছন্দের পিন কনফার্ম করুন') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('সাইন আপ') }}
                                </button>
                            </div>
                        </div>
                    </form>
                
    <!-- </div> -->

    <!-- <footer class="row"> -->
        @include('includes.footer')
    <!-- </footer> -->

<!-- </div> -->

    <script src="{{url('js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{url('js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{url('js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{url('js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{url('js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{url('js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{url('js/morphext.min.js')}}"></script> <!-- Morphtext rotating text in the header -->
    <script src="{{url('js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
    <script src="{{url('js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{url('js/scripts.js')}}"></script> <!-- Custom scripts -->
    
 	
    


   
</body>
</html>

