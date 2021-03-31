@extends('default')

@section('content')
<article class='recept'>
    <header class='recept__header u-flex-v-center'>
        <h1 class='recept__heading'>{{$recepten->naam}}</h1>
    </header>
    <section class='recept__section1'>
        <figure class='recept__figure'>
            <img class='recept__img' src="{{$recepten->afbeelding}}" alt="{{$recepten->afbeelding}}">
        </figure>
        <section class='recept__informatie'>
            <section class='recept__informatie__kaart'>
                <p class='recept__informatie__tekst'> Recept voor: {{$recepten->hoeveelheid}} </p>
                <p class='recept__informatie__tekst'> Tijd: {{$recepten->tijd}} minuten </p>
                <p class='recept__informatie__tekst'> Maximum te behalen punten: {{$recepten->punten}}</p>   
            </section>
            <section class='recept__informatie__kaart2'>
                <section class='recept__timer'>
                    <h2 class='recept__timer__tekst'> 00:00:00</h1>
                </section>
                <section class='recept__btnSection u-flex-v-center'>
                    <button class='recept__button recept__start' > Start recept </button>
                    <button class='recept__button recept__stop' > Stop recept </button>
                </section>
            </section>
        </section>
    </section>
    <section class=recept__section2>
        <section class='recept__bereiden'>
            <h2 class='recept__bereiden__heading'> Hoe te bereiden </h2>
            <p class='recept__bereiden__tekst'> {!! nl2br(e($recepten->bereiden)) !!}</p>
        </section>
        <section class='recept__ingredienten'>
            <section class='recept__ingredienten__kaart'>
                <h2 class='recept__ingredienten__heading'> Ingrediënten </h2>
                <p class='recept__ingredienten__tekst'> {!! nl2br(e($recepten->ingredienten)) !!} </p>
            </section>
        </section>
    </section>
</article>

@endsection