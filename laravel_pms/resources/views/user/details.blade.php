@extends('layouts.menubar')
@section('body')
  <div class="signup-wrapper">
    <div class="form-wrapper">
      <form action="{{route('update-user', $editData->id)}}" method="post">

        {{@csrf_field()}}

        <div class="row">
          <div class="col-5">
            <div class="input-style-1">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="Sname" value="{{$editData->name}}" placeholder="User's Name">
                  @error('Sname')
                    <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-5">
            <div class="input-style-1">
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="Semail" value="{{$editData->email}}" placeholder="User's Email">
                @error('Semail')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-5">
            <div class="input-style-1">
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="Sphone" value="{{$editData->phone}}" placeholder="User's Phone">
                @error('Sphone')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-5">
            <div class="input-style-1">
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="Saddress" value="{{$editData->address}}" placeholder="User's Address">
                @error('Saddress')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-5">
            <div class="select-style-1">
              <div class="select-position">
                <label>Choose Role</label>
                <select name="role">
                  <option selected="" disabled="">Choose Role</option>
                  <option value="User" @if($editData->positions=="User") selected @endif >User</option>
                  <option value="Lead" @if($editData->positions=="Lead") selected @endif>Project Lead</option>
                  <option value="Head" @if($editData->positions=="Head") selected @endif>Project Head</option>
                </select>
                @error('role')
                  <span>{{$message}}</span>
                @enderror
              </div>
            </div>
          </div>
        </div>

        <div class="
            button-group
            d-flex
            justify-content-center
            flex-wrap
          ">
          
          <button class="main-btn primary-btn btn-hover w-80 text-center">Update</button>
        </div>
      </form>
    </div>
  </div>
@endsection
