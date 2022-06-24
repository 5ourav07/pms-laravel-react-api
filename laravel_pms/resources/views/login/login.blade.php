@extends('layouts.app')
@section('body')    
  <section class="signin-section">
    <div class="row g-0 auth-row">

      <div class="col-lg-6">
        <div class="auth-cover-wrapper bg-primary-100">
          <div class="auth-cover">
            <div class="title text-center">
              <h1 class="text-primary mb-10">Welcome To Project Management</h1>
              <p class="text-medium">
                Login to Your Existing Account to Continue
              </p>
            </div>

            <div class="cover-image">
              <img src="assets/images/auth/signin-image.svg" alt="">
            </div>

            <div class="shape-image">
              <img src="assets/images/auth/shape.svg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- end col -->

      <div class="col-lg-6">
        <div class="signin-wrapper">
          <div class="form-wrapper">
            <form action="{{route('login-submit')}}" method="post">
              {{@csrf_field()}}
              <div class="row">

                <div class="col-12">
                  <div class="input-style-1">
                    <label>Email</label>
                    <input type="email" name="email" value="{{old('email')}}" placeholder="Email">
                    @error('email')
                      <span>{{$message}}</span>
                    @enderror
                  </div>
                </div>
                <!-- end col -->

                <div class="col-12">
                  <div class="input-style-1">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password">
                    @error('password')
                      <span>{{$message}}</span>
                    @enderror
                    @error('')
                      <span>{{$message}}</span>
                    @enderror
                    <span>{{Session::get('msg')}}</span>
                  </div>
                </div>
                <!-- end col -->

                <div class="col-xxl-6 col-lg-12 col-md-6">
                  <div class="form-check checkbox-style mb-30">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox-remember">
                    <label class="form-check-label" for="checkbox-remember">Remember Me Next Time</label>
                  </div>
                </div>
                <!-- end col -->

                <div class="col-xxl-6 col-lg-12 col-md-6">
                  <div class="text-start text-md-end text-lg-start text-xxl-end mb-30">
                      <a href="#" class="hover-underline">Forgot Password?</a>
                  </div>
                </div>
                <!-- end col -->

                <div class="col-12">
                  <div class="button-group d-flex justify-content-center flex-wrap">
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                  </div>
                </div>
                <!-- end col -->

                <div class="col-12">
                  <div class="button-group d-flex justify-content-center flex-wrap">
                    @if ($errors->has('g-recaptcha-response'))
                      <span class="help-block">
                        <strong style="color:red">{{ $errors->first('g-recaptcha-response') }}</strong>
                      </span>
                    @endif
                    <button class="main-btn primary-btn btn-hover w-100 text-center">Sign In</button>
                  </div>
                </div>
              </div>
              <!-- end row -->
            </form>

            <div class="singin-option pt-40">
              <p class="text-sm text-medium text-center text-gray">Easy Login With</p>
              <div class="button-group pt-20 pb-20 d-flex justify-content-center flex-wrap">
                <button class="main-btn primary-btn-outline m-2">
                  <i class="lni lni-facebook-filled mr-10"></i>
                  Facebook
                </button>

                <button class="main-btn danger-btn-outline m-2">
                  <i class="lni lni-google mr-10"></i>
                  Google
                </button>
              </div>

              <p class="text-sm text-medium text-dark text-center">
                Don't Have Any Account Yet?
                <a href="{{route('signup')}}">Create an Account</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- end col -->
    </div>
    <!-- end row -->
  </section>
@endsection