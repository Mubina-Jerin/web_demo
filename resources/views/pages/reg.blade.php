@extends('layouts.default')
@include('includes.header')
@section('content')
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModal">{{ __('রেজিস্ট্রেশন') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route}(('registration'))}" > 
                
                    @csrf
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
            </div>
        </div>
    </div>
</div>
@stop

<!-- @section('scripts')
@parent
@php $errors['phone_number']=null; $errors['password']=null; @php
@if($errors->has('phone_number') || $errors->has('password'))
    <script>
    $(function() {
        $('#loginModal').modal({
            show: true
        });
    });
    </script>
@endif
@endsection -->

<!-- @section('scripts')
@parent

<script>
$(function () {
    $('#registerForm').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        $(".invalid-feedback").children("strong").text("");
        $("#registerForm input").removeClass("is-invalid");
        $.ajax({
            method: "post",
            headers: {
                Accept: "application/json"
            },
            url: "{{ route('registration') }}",
            data: formData,
            success: () => window.location.assign("{{ route('home') }}"),
            error: (response) => {
                if(response.status === 422) {
                    let errors = response.responseJSON.errors;
                    Object.keys(errors).forEach(function (key) {
                        $("#" + key + "Input").addClass("is-invalid");
                        $("#" + key + "Error").children("strong").text(errors[key][0]);
                    });
                } else {
                    window.location.reload();
                }
            }
        })
    });
})
</script>
@endsection -->