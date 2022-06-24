@extends('layouts.app')
@section('body')
  <form action="{{route('finishedtask-submit', $task->id)}}" method="post" enctype="multipart/form-data">
    {{@csrf_field()}}
    <div class="card-style mb-30">
      <div class="input-style-1">
        <p>Task Name</p>
        <input type="text" disabled  name="t_name" value="{{$task->task_name}}">
      </div>

      <div class="input-style-1">
        <p>Task Type</p>
        <input type="text" disabled  name="t_type" value="{{$task->type}}">
      </div>
          
      <div class="input-style-1">
        <p>Task Status</p>
        <input type="text" disabled  name="t_status" value="{{$task->status}}">
      </div>
        
      <div class="select-style-1">
        <div class="select-position">
          <input type="file" name="attachment">
        </div>
      </div>

      <button class="main-btn primary-btn btn-hover w-80 text-center">
        Finished Task
      </button>  
    </div>
  </form>
@endsection