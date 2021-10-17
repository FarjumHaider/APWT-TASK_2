@extends('layouts.app')
@section('content')
    <form action="{{route('contact')}}" class="col-md-6" method="post">
            {{csrf_field()}}

            <div class="col-md-4 form-group">
                <span>Email</span>
                <input type="text" name="email" value="{{old('email')}}"class="form-control">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-4 form-group">
                <span>Message</span>
                <input type="text" name="msg" value="{{old('msg')}}"class="form-control">
                @error('msg')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
  
            <input type="submit" class="btn btn-success" value="Send" >
    </form>

@endsection