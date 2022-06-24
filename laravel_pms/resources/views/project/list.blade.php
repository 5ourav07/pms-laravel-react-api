@extends('layouts.menubar')
@section('body')
  <div class="row">
    <div class="col-lg-12">
      <div class="card-style mb-30">
        <h6 class="mb-10">Projects</h6>
          
        <div class="table-wrapper table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th><h6>SL</h6></th>
                <th><h6>Title</h6></th>
                <th><h6>Type</h6></th>
                <th><h6>Duration</h6></th>
                <th><h6>Head</h6></th>
                <th><h6>Lead</h6></th>
                <th><h6>M-01</h6></th>
                <th><h6>M-02</h6></th>
                <th><h6>M-03</h6></th>
                <th><h6>Attachment</h6></th>
                <th><h6>Status</h6></th>
                <th><h6>Action</h6></th>
              </tr>
              <!-- end table row-->
            </thead>

            <tbody>
              @foreach ($projects as $p)
                <tr>
                  <td>
                    <p>{{$p->id}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->title}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->type}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->duration.' '.'Month'}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->head_id}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->lead_id}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->user1_id}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->user2_id}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->user3_id}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{$p->attachment}}></a></p>
                  </td>
                  <td class="min-width">
                    <span class="status-btn active-btn">{{$p->status}}</span>
                  </td>
                  <td>  
                    <a href="{{route('modify-project',$p->id)}}" class="btn-sm primary-btn btn-hover">Modify</a>
                    <a href="{{route('delete-project',$p->id)}}" class="btn-sm danger-btn btn-hover">Delete</a>
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