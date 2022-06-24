@extends('layouts.app')
@section('body')
    <form action="{{route('modifyproject-submit',$project->id)}}" method="post">
        {{@csrf_field()}}

        <div class="card-style mb-30">
            <div class="input-style-1">
                <p>Project Name</p>
                <input type="text" disabled  name="p_name" value="{{$project->title}}">
            </div>

            <div class="input-style-1">
                <p>Project Type</p>
                <input type="text" disabled  name="p_type" value="{{$project->type}}">
            </div>
            
            <div class="input-style-1">
                <p>Project Status</p>
                <input type="text" disabled  name="p_status" value="{{$project->status}}">
            </div>

            <div class="select-style-1">
                <div class="select-position">
                    <select name="p_head">
                        <option selected="" disabled="">Select Project Head</option>
                        @foreach ($head as $h)
                            <option value="{{$h->id}}">{{$h->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="select-style-1">
                <div class="select-position">
                    <select name="p_lead">
                        <option selected="" disabled="">Select Project Lead</option>
                        @foreach ($lead as $l)
                            <option value="{{$l->id}}">{{$l->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button class="main-btn primary-btn btn-hover w-80 text-center">
                Modify Project
            </button>  
        </div>
    </form>
@endsection