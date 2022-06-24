@extends('layouts.menubar')
@section('body')
  <div class="card-style mb-30">
    <div class="title d-flex flex-wrap justify-content-between align-items-center">
      <div class="left">
        <h6 class="text-medium mb-30">Messages</h6>
      </div>
    </div>

    <div class="table-responsive">
      <table class="table top-selling-table">
        <thead>
          <tr>
            <th class="min-width">
              <h6 class="text-sm text-medium">SL No.</h6>
            </th>
            <th class="min-width">
              <h6 class="text-sm text-medium">Send By</h6>
            </th>
            <th class="min-width">
              <h6 class="text-sm text-medium">Receiver</h6>
            </th>
            <th class="min-width">
              <h6 class="text-sm text-medium">Message</h6>
            </th>
            <th class="min-width">
              <h6 class="text-sm text-medium">Attachment</h6>
            </th>
            <th class="min-width">
              <h6 class="text-sm text-medium">Action</h6>
            </th>
          </tr>
          <!-- end table row-->
        </thead>

        <tbody>
          @foreach ($messages as $msg)
            <tr>
              <td>
                <div class="lead">
                  <p class="text-sm">{{$msg->id}}</p>
                </div>
              </td>
              <td>
                <p class="text-sm">{{$msg->sender_id}}</p>
              </td>
              <td>
                <p class="text-sm">{{$msg->receiver}}</p>
              </td>
              <td>
                <p class="text-sm">{{$msg->message}}</p>
              </td>
              <td>
                <p class="text-sm">{{$msg->attachment}}</p>
              </td>
              <td>
                  <a href="{{route('delete-message', ['id'=>$msg->id])}}" class="btn-sm danger-btn btn-hover">Delete</a>
              </td>
            </tr>
          @endforeach
          <!-- end table row -->
        </tbody>
      </table>
      <!-- end table -->
    </div>
    <!-- end card -->
  </div>
@endsection