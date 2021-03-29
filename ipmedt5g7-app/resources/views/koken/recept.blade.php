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
                <p class='recept__informatie__tekst'> Bereiden voor: 2 pers. </p>
                <p class='recept__informatie__tekst'> Duur: 20 minuten </p>
                <p class='recept__informatie__tekst'> Te behalen punten: 3</p>   
            </section>
        </section>
    </section>
    <section class=recept__section2>
        <section class='recept__bereiden'>
            <h2 class='recept__bereiden__heading'> Hoe te bereiden </h2>
            <p class='recept__bereiden__tekst'> {{$recepten->bereiden}} </p>
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