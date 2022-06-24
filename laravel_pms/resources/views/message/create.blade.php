@extends('layouts.menubar')
@section('body')
  <div class="card-style mb-30">
    <form action="{{route('send-message')}}" method="post">
      {{@csrf_field()}}

      <h6 class="mb-25">Send Message</h6>

      <div class="select-style-1">
        <input type="hidden" name="sender_id" value="{{Session::get('adid')}}">
        <label>To</label>
        <div class="select-position">
          <select name="rcver">
            <option selected disabled>Select Receiver</option>
            <option value="Admin">Admin</option>
            <option value="Head">Head</option>
            <option value="Lead">Lead</option>
            <option value="Member">Member</option>
          </select>
          @error('rcver')
          <span>{{$message}}</span>
          @enderror
        </div>
      </div>

      <div class="card-style mb-30">
        <div class="input-style-1">
          <label>Message</label>
          <textarea name="message" placeholder="Message" rows="5"></textarea>
          @error('message')
            <span>{{$message}}</span>
          @enderror
        </div>

        <div class="input-style-1">
            <label>Attachment</label>
            <input type="file" name="file">
        </div>
      </div>

      <div class="input-style-1">
        <button class="main-btn primary-btn btn-hover w-80 text-center">
          Send
        </button>
      </div>
    </form>
  </div>
@endsection