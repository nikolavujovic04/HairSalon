@extends('layouts.app')

@section('content')
  <div class="reservation">
    <div class="reservation-left">
      <form action="" method="POST">
        <div>
            <label for="name">Ime i prezime</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="checkin">Datum</label>
            <input type="date" id="checkin" name="checkin_date">
        </div>
        <div>
            <label for="style-choose">Izaberite uslugu</label>
            <input list="hair" id="hair-choice" name="hair-choice" />

            <datalist id="hair">
              @foreach ($services as $service)
                  <option value="{{ $service->serviceName }}">{{ $service->serviceName }}</option>
              @endforeach
              
            </datalist>
        </div>
        <button type="submit">Rezervisi</button>
      </form>
    </div>

    <div class="reservation-right">
      <h1>MAKE YOUR RESERVATION</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Animi facere, soluta perspiciatis.
      </p>
    </div>
  </div>
@endsection