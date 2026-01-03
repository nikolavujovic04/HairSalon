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

    <h2>Upoznajte tim</h2>
    <p>U svakom trenutku spremni na izazov</p>

    <div class="team-section">
    <div class="team-card">
      <div class="text-team">
        <p class="name">Marcus Williams</p>
        <p class="role">Master Barber</p>
        <p class="specialisation">Klasican frizer</p>
        <p class="experience">12 godina iskustva</p>
      </div>
      
    </div>

    <div class="team-card">
      <div class="text-team">
        <p class="name">Marcus Williams</p>
        <p class="role">Master Barber</p>
        <p class="specialisation">Klasican frizer</p>
        <p class="experience">12 godina iskustva</p>
      </div>
    </div>

    <div class="team-card">
      <div class="text-team">
        <p class="name">Marcus Williams</p>
        <p class="role">Master Barber</p>
        <p class="specialisation">Klasican frizer</p>
        <p class="experience">12 godina iskustva</p>
      </div>
    </div>

    <div class="team-card">
      <div class="text-team">
        <p class="name">Marcus Williams</p>
        <p class="role">Master Barber</p>
        <p class="specialisation">Klasican frizer</p>
        <p class="experience">12 godina iskustva</p>
      </div>
    </div>
  </div>

  </div>

  <div class="pricing-general">
    <h2>Nase cene</h2>
    <p>Prikazani su najpovoljniji paketi</p>
    <div class="pricing">
      
      <div class="pricing-cards classic">
        <h2>Klasicno sisanje</h2>
        <p class="pricing-description">Perfektno za svaciji ukus</p>
        <p class="pricing-text">500din</p>
      </div>

      <div class="pricing-cards signature">
        <h2>Fjed sisanje</h2>
        <p class="pricing-description"> Perfektno za mladje generacije</p>
        <p style="color:#2A2421;">900din</p>
      </div>

      <div class="pricing-cards executive">
        <h2>Klasicno sisanje</h2>
        <p class="pricing-description">Perfektno za svaciji ukus</p>
        <p class="pricing-text">500din</p>
      </div>
    </div>
  
  </div>

  



@endsection