@extends('layouts.menubar')
@section('body')

  <div class="card-style mb-30">
      <div class="
          title
          d-flex
          flex-wrap
          justify-content-between
          align-items-center
        ">
        <div class="left">
          <h6 class="text-medium mb-30">Valid Users</h6>
        </div>
      </div>
      <!-- End Title -->
      <div class="table-responsive">
        <table class="table top-selling-table">
          <thead>
            <tr>
              <th class="min-width">
                <h6 class="text-sm text-medium">ID</h6>
              </th>
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
                <h6 class="text-sm text-medium">Address</h6>
              </th>
              <th class="min-width">
                  <h6 class="text-sm text-medium">Position</h6>
              </th>
              <th class="min-width">
                  <h6 class="text-sm text-medium">Actions</h6>
              </th>
            </tr>
          </thead>
          <tbody>
              @foreach($user as $s)
            <tr>
              <td>
                  <p class="text-sm">{{$s->id}}</p>
                
              </td>
              <td>
                <p class="text-sm">{{$s->name}}</p>
                
              </td>
              <td>
                <p class="text-sm">{{$s->email}}</p>
                
              </td>
              <td>
                <p class="text-sm">{{$s->phone}}</p>
              </td>
              <td>
                  <p class="text-sm">{{$s->address}}</p>
              </td>
              <td>
                  <p class="text-sm">{{$s->positions}}</p>
              </td>
              <td>
                  <a href="{{route('edit-user', $s->id)}}" class="btn-sm primary-btn btn-hover">Edit</a>
                  <a href="{{route('delete-user', $s->id)}}" class="btn-sm danger-btn btn-hover" onclick = "return confirm('Are you sure to delete?')">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </form>
    </div>
  </div>
@endsection
