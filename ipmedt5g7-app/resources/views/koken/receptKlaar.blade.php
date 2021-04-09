@extends('default')

@section('content')
<header class="mainHeader u-koken-gradient u-box-shadow">
    <nav class="mainHeader__nav">
        <img src="/img/logo.png"></img>
        <ul>
            <li><a href="/gebruiker">Account</a></li>
            <li><a href="/wakingupresults">Opstaan</a></li>
            <li><a href="/desk">Bureau</a></li>
            <li><a href="/boodschappenlijst">Boodschappen</a></li>
            <li><a href="/recepten">Koken</a></li>
        </ul> 
    </nav>
</header>
<article class='recept u-box-shadow'>
    <header class='recept__header u-flex-v-center'>
        <h1 class='recept__heading'>{{$recepten->naam}}</h1>
    </header>
    <section class='recept__section1'>
        <figure class='recept__figure recept__image'>
            <img class='recept__img u-box-shadow-content' src="{{$recepten->afbeelding}}" alt="{{$recepten->afbeelding}}">
        </figure>
        <section class='recept__beoordeling'>
            <h3 class='recept__beoordeling__titel'> Heb je een beoordeling gekregen? Klik dan op de knop hieronder</h3>
            <section class='recept__beoordeling__flex'>
                <button class='recept__beoordeling__button' onclick='verwerk()'> Verwerken</button>
                <p class='recept__beoordeling__tekst' id='beoordeling'> Behaalde beoordeling: {{$cijfer}}</p>
            </section>
            <a class='recept__informatie' href="{{ url('/receptInfo') }}"> Hoe moet ik beoordelen? </a>
        </section>
    </section>
    <!-- <p> ({{$cijfer}} + {{$recepten->punten}}) </p>

     <a href="/change">Andere gebruiker kiezen</a>
    <p>{{$activeUser[0]->name}} </p> <br> -->
</article>
<script src='/js/koken_verwerk.js'></script>
@endsection