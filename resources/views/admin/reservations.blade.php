<p>Ovo je prikaz svih rezervacija<br></p>
@foreach ($reservation as $reservations)
  <p>Ime: {{ $reservation->person->name }}</p>
  <p>Datum: {{ $reservation->date }}</p>  
  <p>Ukupan iznos: {{ $reservation->totalAmount }}</p>
@endforeach