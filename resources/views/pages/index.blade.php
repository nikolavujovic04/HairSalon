@extends('layouts.app')

@section('content')

  <div class="background-image">
    <div class="title-background">
      <h1>Gde lepota susrece poverenje</h1>
      <p>Iskusite jednog od najboljih frizera u gradu Kraljevu</p>
      <button class="reservation">Rezervisi sada</button>
      <button class="services">Pogledaj usluge</button>
    </div>
    
  </div>

  <div class="services">
    <h2>Nase usluge</h2>
    <p>U ovom salonu se pruzaju samo ekspertske usluge</p>
    <div class="services-cards">
      <div class="card">
        <div class="card-image">
          <img src="{{ asset('images/card1.jfif') }}" alt="">
        </div>
        <div class="card-info">
          <h2>Izbrijavanje brade</h2>
          <p>Obicno sisanje je jedan od nasih usluga, cena je samo 500 dinara</p>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
          <img src="{{ asset('images/card2.jfif') }}" alt="">
        </div>
        <div class="card-info">
          <h2>Fejd frizura</h2>
          <p>Obicno sisanje je jedan od nasih usluga, cena je samo 500 dinara</p>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
          <img src="{{ asset('images/card3.jfif') }}" alt="">
        </div>
        <div class="card-info">
          <h2>Obicno sisanje</h2>
          <p>Obicno sisanje je jedan od nasih usluga, cena je samo 500 dinara</p>
        </div>
      </div>
    </div>
  </div>

@endsection