@extends('layouts.menubar')
@section('body')
  <form action="{{route('createtask-submit')}}" method="post" enctype="multipart/form-data">
    {{@csrf_field()}}

    <section class="tab-components">
      <div class="container-fluid">

        <div class="title-wrapper pt-30">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="title mb-30">
                <h2>Create Task</h2>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>

        <div class="form-elements-wrapper">
          <div class="row">

            <div class="col-lg-6">
              <!-- input style start -->
              <div class="card-style mb-30">

                <div class="input-style-1">
                  <input type="text" placeholder="Task Name" name="t_name" value="{{old('t_name')}}">
                  @error('t_name')
                    <span>{{$message}}</span>
                  @enderror
                </div>

                <div class="select-style-1">
                  <div class="select-position">
                    <select name="t_type">
                      <option selected="" disabled="">Select Task Type</option>
                      <option value="Diagram">Draw Diagram</option>
                      <option value="Script">Script</option>
                      <option value="Doc">Documentation</option>
                      <option value="Code">Coding</option>
                    </select>
                  </div>
                  @error('t_type')
                    <span>{{$message}}</span>
                  @enderror
                </div>

                <div class="select-style-1">
                  <div class="select-position">
                    <select name="p_id">
                      <option selected="" disabled="">Select Project Name</option>
                      @foreach ($project as $p)
                        <option value="{{$p->id}}">{{$p->title}}</option>
                      @endforeach
                    </select>
                  </div>
                  @error('p_id')
                    <span>{{$message}}</span>
                  @enderror
                </div>

                <div class="card-style mb-30">
                  <div class="input-style-1">
                    <label>Task Deadline</label>
                    <div class="input-style-2">
                      <input type="date" name="date" value="{{old('date')}}">
                      <span class="icon"><i class="lni lni-chevron-down"></i></span>
                      @error('date')
                        <span>{{$message}}</span>
                      @enderror
                    </div>

                    <div class="input-style-2">
                      <input type="time" name="time" value="{{old('time')}}">
                      @error('time')
                        <span>{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <!-- end col -->

            <div class="col-lg-6">
              <div class="card-style mb-30">
                <div class="input-style-1">
                  <label>Project Discription</label>
                  <textarea placeholder="Discription" rows="5" name="t_dis">{{old('t_dis')}}</textarea>
                  @error('t_dis')
                    <span>{{$message}}</span>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>

        <div class="button-group d-flex justify-content-center flex-wrap">
          <button class="main-btn primary-btn btn-hover w-80 text-center">
            Create Task
          </button>
        </div>
      </div>
    </section>
  </form> 
@endsection