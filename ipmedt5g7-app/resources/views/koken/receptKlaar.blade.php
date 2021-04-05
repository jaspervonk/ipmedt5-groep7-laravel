@extends('default')

@section('content')
<article class='recept u-box-shadow'>
    <header class='recept__header u-flex-v-center'>
        <h1 class='recept__heading'>{{$recepten->naam}}</h1>
    </header>

    <a href="/change">Andere gebruiker kiezen</a>

    <p>{{$activeUser[0]->name}} </p> <br>
    <h3> Heb je een beoordeling gekregen? Klik dan op de knop hieronder</h3>
    <button onclick='verwerk()'> Verwerken</button>
    <p id='beoordeling'> Behaalde beoordeling: {{$cijfer}}</p>
    <p> ({{$cijfer}} + {{$recepten->punten}}) </p>
</article>
<script src='/js/koken_verwerk.js'></script>
@endsection