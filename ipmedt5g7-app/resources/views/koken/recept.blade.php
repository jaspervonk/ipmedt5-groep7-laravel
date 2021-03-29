@extends('default')

@section('content')
<article class='recept'>
    <header class='recept__header'>
        <h1 class='recept__heading'>{{$recepten->naam}}</h1>
    </header>
    <figure class='recept__figure'>
        <img class='recept__img' src="{{$recepten->afbeelding}}" alt="{{$recepten->afbeelding}}">
    </figure>
    <section class='recept__informatie'>
        <p class='recept__informatie__tekst'> Bereiden voor: 2 personen </p>
        <p class='recept__informatie__tekst'> Duur: 20 minuten </p>   
    </section>
    <section class='recept__ingredienten'>
        <h2 class='recept__ingredienten__heading'> Ingrediënten </h2>
        <p class='recept__ingredienten__tekst'> {!! nl2br(e($recepten->ingredienten)) !!} </p>
    </section>
    <section class='recept__bereiden'>
        <h2 class='recept__ingredienten__heading'> Hoe te bereiden </h2>
        <p class='recept__bereiden__tekst'> {{$recepten->bereiden}} </p>
    </section>
</article>

@endsection