@extends('layouts.app')

@section('content')

<div class="contact-wrapper">
  <div class="contact-card">

    <div class="contact-left">
      <h1>Contact our team</h1>
      <p>If you have any questions, feel free to reach out. We usually reply within 24 hours.</p>

      <form action="{{ route('contact.send') }}" method="POST">
        @csrf

        <div class="input-group">
          <input type="text" name="name" required>
          <label>Your name</label>
        </div>

        <div class="input-group">
          <input type="email" name="email" required>
          <label>Email address</label>
        </div>

        <div class="input-group textarea-group">
          <textarea name="message" required></textarea>
          <label>Your message</label>
        </div>

        <button type="submit" class="send-btn">
          Send message
        </button>
      </form>
    </div>

    <div class="contact-right">
      <img src="{{ asset('images/card3.jfif') }}" alt="Contact image">
      <div class="image-overlay"></div>
    </div>

  </div>
</div>

@endsection
