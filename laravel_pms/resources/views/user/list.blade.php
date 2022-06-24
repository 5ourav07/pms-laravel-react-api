@extends('layouts.menubar')
@section('body')
  <div class="card-style mb-30">

    <div class="title d-flex flex-wrap justify-content-between align-items-center">
      <div class="left">
        <h6 class="text-medium mb-30">Pendding Users</h6>
      </div>
    </div>

    <div class="table-responsive">
      <form action="{{route('confirm-user')}}" method="post">
        {{@csrf_field()}}

        <table class="table top-selling-table">
          <thead>
            <tr>
              <th class="min-width">
                <h6 class="text-sm text-medium">Name</h6>
              </th>
              <th class="min-width">
                <h6 class="text-sm text-medium">Email</h6>
              </th>
              <th class="min-width">
                <h6 class="text-sm text-medium">Phone</h6>
              </th>
              <th class="min-width">
                <h6 class="text-sm text-medium">Position</h6>
              </th>
              <th class="min-width">
                <h6 class="text-sm text-medium">Accept</h6>
              </th>
              <th class="min-width">
                <h6 class="text-sm text-medium">Reject</h6>
              </th>
            </tr>
          </thead>

          <tbody>
            @foreach($user as $s)
              <tr>
                <td>
                  <input type="hidden" name="id" value="{{$s->id}}">
                  <p class="text-sm">{{$s->name}}</p>
                  <input type="hidden" name="name" value="{{$s->name}}">
                </td>
                <td>
                  <p class="text-sm">{{$s->email}}</p>
                  <input type="hidden" name="email" value="{{$s->email}}">
                </td>
                <td>
                  <p class="text-sm">{{$s->phone}}</p>
                  <input type="hidden" name="phone" value="{{$s->phone}}">
                  <input type="hidden" name="address" value="{{$s->address}}">
                  <input type="hidden" name="password" value="{{$s->password}}">
                </td>
                <td>
                  <select name="positions">
                    <option selected disabled>Select Role</option>
                    <option value="Head">Head</option>
                    <option value="Lead">Lead</option>
                    <option value="User">User</option>
                  </select>
                </td>
                <td>
                  <input type="submit" class="btn-sm success-btn btn-hover" value="Accept">
                </td>
                <td>
                    <a href="{{route('reject-user', ['id'=>$s->id])}}" class="btn-sm danger-btn btn-hover">Reject</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </form>
    </div>
  </div>
@endsection
