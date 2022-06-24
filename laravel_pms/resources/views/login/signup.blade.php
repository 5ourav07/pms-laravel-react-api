@extends('layouts.app')
@section('body')
  <section class="signin-section">
    <div class="container-fluid">
      <div class="row g-0 auth-row">

        <div class="col-lg-6">
          <div class="auth-cover-wrapper bg-primary-100">
            <div class="auth-cover">
              <div class="title text-center">
                <h1 class="text-primary mb-10">Get Started</h1>
                <p class="text-medium">
                  Start Creating the Best Possible Project Management
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
          <div class="signup-wrapper">
            <div class="form-wrapper">
              <h6 class="mb-15">Sign Up</h6>
                <form action="{{route('signup-submit')}}" method="post">
                  {{@csrf_field()}}
                  <div class="row">

                    <div class="col-5">
                      <div class="input-style-1">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
                        @error('name')
                          <span>{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <!-- end col -->

                    <div class="col-5">
                      <div class="input-style-1">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
                        @error('email')
                          <span>{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <!-- end col -->

                    <div class="col-5">
                      <div class="input-style-1">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password">
                        @error('password')
                          <span>{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <!-- end col -->

                    <div class="col-5">
                      <div class="input-style-1">
                        <label>Phone</label>
                        <input type="text" name="phone" placeholder="Phone Number" value="{{old('phone')}}">
                        @error('phone')
                          <span>{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <!-- end col -->

                    <div class="col-10">
                      <div class="input-style-1">
                        <label>Address</label>
                        <textarea name="address" name="address" placeholder="Address" value="{{old('address')}}"></textarea>
                        @error('address')
                          <span>{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <!-- end col -->

                    {{-- <div class="select-style-1">
                      <label>Choose Role</label>
                      <div class="select-position">
                        <select name="role" value="{{old('role')}}">
                          <option selected disabled>Choose Role</option>
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                          <option value="lead">Project Lead</option>
                          <option value="head">Project Head</option>
                        </select>
                        @error('role')
                          <span>{{$message}}</span>
                        @enderror
                        @error('')
                          <span>{{$message}}</span>
                        @enderror
                      </div>
                    </div> --}}
                    <!-- end col -->

                    <div class="col-12">
                      <div class="form-check checkbox-style mb-30">
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}

                        @if ($errors->has('g-recaptcha-response'))
                          <span class="help-block">
                            <strong style="color:red">{{ $errors->first('g-recaptcha-response') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                    <!-- end col -->

                    <div class="col-12">
                      <div class="button-group d-flex justify-content-center flex-wrap">
                        <button class="main-btn primary-btn btn-hover w-80 text-center">Sign Up</button>
                      </div>
                    </div>
                  </div>
                  <br>
                  <!-- end row -->
                </form>

                <p class="text-sm text-medium text-dark text-center">
                  Already Have an Account? 
                  <a href="{{route('login')}}">Login</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
  </section>
@endsection