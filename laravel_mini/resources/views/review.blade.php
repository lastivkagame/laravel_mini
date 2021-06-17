@extends('layout')

@section("title")
    Review Page
@endsection

@section("main_content")
{{--    <div style="background: linear-gradient(#c2bcb1, #ffa600);    border-radius: 15px" class="container">--}}
<div class="container">
    <h1 class="mt-5">Form for add review</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

  <form method="post" action="/review/check">
      @csrf
      <input type="email" name="email" id="email" placeholder="Enter email" class="form-control" /><br />
      <input type="text" name="subject" id="subject" placeholder="Enter sunbject" class="form-control" /><br />
      <textarea name="message" id="message" placeholder="Enter message" class="form-control" /></textarea><br />
      <button type="submit" class="btn btn-success">SEND</button>
  </form>
    </div>
@endsection
