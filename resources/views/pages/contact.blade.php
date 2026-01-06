@extends('layouts.app')

@section('content')

  <div class="container-contact">
    <div class="left">
      <h1>Chat to out team</h1>
      <p>This is some text about contact</p>
      <form action="/" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="mail">Email:</label>
            <input type="email" id="mail" name="user_email">
        </div>
        <div>
            <label for="mail">Phone Number:</label>
            <input type="email" id="mail" name="user_email">
        </div>
        <div class="button">
            <button type="submit">Send Message</button>
        </div>
    </form>
    </div>

    <div class="right-side">
    </div>
  </div>
@endsection