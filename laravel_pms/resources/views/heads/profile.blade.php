@extends('layouts.menubar')
@section('body')
  <div class="container-fluid">
    @if(Session::has('msg'))
      <p class="alert alert-success">{{Session::get('msg')}}</p>
    @endif
    <form action="{{route('profile-submit', $profile->id)}}" method="post">
      {{@csrf_field()}}
      <div class="col-lg-6">
        <div class="card-style settings-card-2 mb-30">

          <div class="title mb-30">
            <h6>My Profile</h6>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="input-style-1">
                <label>Full Name</label>
                <input type="hidden" name="id" value="{{$profile->id}}">
                <input type="text" name="name" placeholder="Full Name" value="{{$profile->name}}">
              </div>
            </div>

            {{-- <div class="col-12">
              <div class="input-style-1">
                <label>Email</label>
                <input type="email" disabled placeholder="Email" value="{{$profile->email}}">
              </div>
            </div> --}}

            <div class="col-12">
              <div class="input-style-1">
                <label>Phone</label>
                <input type="text" name="phone" placeholder="Phone" value="{{$profile->phone}}">
              </div>
            </div>

            <div class="col-12">
              <div class="input-style-1">
                <label>Address</label>
                <input type="text" name="address" placeholder="Address" value="{{$profile->address}}">
              </div>
            </div>

            {{-- <div class="col-12">
              <div class="input-style-1">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password">
              </div>
            </div> --}}

            <div class="col-12">
              <button class="main-btn primary-btn btn-hover">
                Update Profile
              </button>
            </div>
          </div>
        </div>
        <!-- end card -->
      </div>
    </form>
  </div>
@endsection