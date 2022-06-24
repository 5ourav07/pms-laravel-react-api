@extends('layouts.menubar')
@section('body')
  <div class="row">
    <div class="col-lg-12">
      <div class="card-style mb-30">
        <h6 class="mb-10">Tasks</h6>
        
        <div class="table-wrapper table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th><h6>SL</h6></th>
                <th><h6>Project</h6></th>
                <th><h6>Task Name</h6></th>
                <th><h6>Type</h6></th>
                <th><h6>Deadline Time</h6></th>
                <th><h6>Deadline Date</h6></th>
                <th><h6>Discription</h6></th>
                <th><h6>Attachment</h6></th>
                <th><h6>Status</h6></th>
                <th><h6>Action</h6></th>
              </tr>
              <!-- end table row-->
            </thead>

            <tbody>
              @foreach ($task as $p)
                <tr>
                  <td>
                    <p>{{$p->id}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->project_id}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->task_name}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->type}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->deadline_time}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->deadline_date}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->task_dis}}</a></p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->attachment}}</a></p>
                  </td>
                  <td class="min-width">
                    <span class="status-btn active-btn">{{$p->status}}</span>
                  </td>
                  <td>
                    <a href="{{route('finished-task', $p->id)}}" class="btn-sm primary-btn btn-hover">Finished Task</a>
                    <a href="{{route('delete-task', $p->id)}}" class="btn-sm danger-btn btn-hover">Delete</a>                    
                  </td>
                </tr>
                <!-- end table row -->
              @endforeach
            </tbody>
          </table>
          <!-- end table -->
        </div>
      </div>
      <!-- end card -->
    </div>
    <!-- end col -->
  </div>
@endsection