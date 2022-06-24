@extends('layouts.menubar')
@section('body')
  <div class="signup-wrapper">
    <div class="form-wrapper">
      <form action="{{route('createuser-submit')}}" method="post">
        {{@csrf_field()}}
        <div class="row d-flex justify-content-center flex-wrap">

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
              <textarea name="address" placeholder="Address" value="{{old('address')}}"></textarea>
              @error('address')
                <span>{{$message}}</span>
              @enderror
            </div>
          </div>
          <!-- end col -->

          <div class="col-10 select-style-1">
            <label>Choose Role</label>
            <div class="select-position">
              <select name="role" value="{{old('role')}}">
                <option selected="" disabled="">Choose Role</option>
                <option value="Head">Head</option>
                <option value="Lead">Lead</option>
                <option value="User">User</option>
              </select>
              @error('role')
                <span>{{$message}}</span>
              @enderror
            </div>
          </div>
          <!-- end col -->

          <div class="col-12">
            <div class="button-group d-flex justify-content-center flex-wrap">
              <button class="main-btn primary-btn btn-hover w-80 text-center">
                Create
              </button>
            </div>
          </div>
        </div>
        <!-- end row -->
      </form>
    </div>
  </div>
@endsection