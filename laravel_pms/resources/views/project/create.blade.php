@extends('layouts.menubar')
@section('body')
  <section class="tab-components">
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="title mb-30">
              <h2>Create Project</h2>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>

      <form action="{{route('createproject-submit')}}" method="post" enctype="multipart/form-data">
        {{@csrf_field()}}
        <div class="form-elements-wrapper">
          <div class="row">

            <div class="col-lg-6">
              <div class="card-style mb-30">
                <div class="input-style-1">
                  <input type="text" placeholder="Project Name" name="p_name" value="{{old('p_name')}}">
                  @error('p_name')
                    <span>{{$message}}</span>
                  @enderror
                </div>

                <div class="select-style-1">
                  <div class="select-position">
                    <select name="p_type">
                      <option selected disabled >Select Project Type</option>
                      <option value="Education">Education</option>
                      <option value="Business">Business</option>
                      <option value="Marketing">Marketing</option>
                      <option value="IT">IT</option>
                      <option value="Software">Software</option>
                      <option value="Personal">Personal</option>
                      <option value="Design">Design</option>
                      <option value="Engineering">Engineering</option>
                    </select>
                    @error('p_type')
                      <span>{{$message}}</span>
                    @enderror
                  </div>
                </div>
                    
                <div class="select-style-2">
                  <div class="select-position">
                    <select name="p_time">
                      <option selected disabled >Select Project Duration</option>
                      <option value="One">One Month</option>
                      <option value="Two">Two Month</option>
                      <option value="Three">Three Month</option>
                      <option value="More">More than three</option>
                    </select>
                    @error('p_time')
                      <span>{{$message}}</span>
                    @enderror
                  </div>
                </div>

                <div class="card-style mb-30">
                  <div class="input-style-1">
                    <label>Project Discription</label>
                    <textarea placeholder="Discription" name="p_dis" rows="5">{{old('p_dis')}}</textarea>
                    @error('p_dis')
                      <span>{{$message}}</span>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->

            <div class="col-lg-6">
              <div class="card-style mb-30">
                <h6 class="mb-25">Select Project Member</h6>
                <div class="select-style-1">
                  <div class="select-position">
                    <select class="selectpicker" id="click" name="pmember1">
                      <option selected disabled >Project Member One</option>
                      @foreach ($member as $m)
                        <option value="{{$m->id}}">{{$m->name}}</option>    
                      @endforeach            
                    </select>
                    @error('pmember1')
                      <span>{{$message}}</span>
                    @enderror

                    <select class="selectpicker" name="pmember2">
                      <option selected disabled >Project Member Two</option>
                      @foreach ($member as $m)
                        <option value="{{$m->id}}">{{$m->name}}</option>    
                      @endforeach            
                    </select>
                    @error('pmember2')
                      <span>{{$message}}</span>
                    @enderror

                    <select class="selectpicker" name="pmember3">
                      <option selected disabled >Project Member Three</option>
                      @foreach ($member as $m)
                        <option value="{{$m->id}}">{{$m->name}}</option>    
                      @endforeach            
                    </select>
                    @error('pmember3')
                      <span>{{$message}}</span>
                    @enderror
                  </div>
                </div>
              
                <h6 class="mb-25">Attachment</h6>
                <div class="form-check checkbox-style checkbox-danger mb-20">
                  <input  type="file" name="attachment" >
                  @error('attachment')
                    <span>{{$message}}</span>
                  @enderror
                </div>
                <!-- end checkbox -->
              </div>
            </div>
          </div>

          <div class="button-group d-flex justify-content-center flex-wrap">
            <button class="main-btn primary-btn btn-hover w-80 text-center">
              Create Project
            </button>
          </div>
        </div>
      </form>  
    </div>
  </section>
@endsection
