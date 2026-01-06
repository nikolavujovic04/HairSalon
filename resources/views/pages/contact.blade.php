@extends('layouts.app')

@section('content')

  <div class="container-contact">
    <div class="left">
      <h1>Chat to out team</h1>
      <p>This is some text about contact</p>
      <form action="{{ route('contact.send') }}" method="POST">
        @csrf

        <div>
          <label>Name:</label>
          <input type="text" name="name">
        </div>

        <div>
          <label>Email:</label>
          <input type="email" name="email">
        </div>

        <div>
          <label>Message:</label>
          <textarea name="message"></textarea>
        </div>

        <button type="submit">Send Message</button>
      </form>
    </div>

    <div class="right-side">
    </div>
  </div>
@endsection