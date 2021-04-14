@extends('default')

@section('content')
<article class='recept u-box-shadow'>
    <header class='recept__header u-flex-v-center'>
        <h1 class='recept__heading'>{{$recepten->naam}}</h1>
    </header>
    <section class='recept__section1'>
        <figure class='recept__figure recept__image'>
            <img class='recept__img u-box-shadow-content' src="{{$recepten->afbeelding}}" alt="{{$recepten->afbeelding}}">
        </figure>
        <section class='recept__beoordeling' id='beoordelingSection'>
            <h3 class='recept__beoordeling__titel'> Heb je een beoordeling gekregen? Klik dan op de knop hieronder</h3>
            <section class='recept__beoordeling__flex'>
                <button class='recept__beoordeling__button' onclick='verwerk()'> Verwerken</button>
                <p class='recept__beoordeling__tekst' id='beoordeling'> Behaalde beoordeling: {{$cijfer}}</p>
            </section>
            <a class='recept__informatie' href="{{ url('/receptInfo') }}"> Hoe moet ik beoordelen? </a> <br>
            <button class='recept__score__button' onclick='receptScore()'> Bereken Score! </button>
        </section>
        <section class='recept__score' id='scoreSection'>
            <section class='recept__score__section' >
                <h2 class='recept__score__titel'> Gefeliciteerd! </h2> <br>
                <h3 class='recept__score__tekst'> Je hebt een totale score behaald van</h3>
                <p class='recept__score__score'> <b> {{$recepten->tijd * 2 + $cijfer * 10}} punten</b> </p> <br> 
                <p class='recept__score__tekst'> <i> Je kon voor dit recept maximaal een score behalen van: {{$recepten->punten - 10}} punten</i> </p>   
                <button class='recept__score__opslaan' onclick="window.location='{{ url('/recepten/') }}'"> Opslaan </button>
            </section> 
        </section> <br>
    </section>
</article>
<script src='/js/koken_verwerk.js'></script>
@endsection