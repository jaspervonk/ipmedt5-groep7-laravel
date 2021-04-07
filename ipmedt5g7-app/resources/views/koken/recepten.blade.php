@extends('default')

@section('title')
 {{'Recepten'}}
@endsection

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
    <ul class='u-grid-12 u-grid-gap-2 u-body-padding'>
        @foreach($recepten as $recepten)
            <li class='receptKaart u-list-style-none u-box-shadow'> 
                    <header class='receptKaart__header u-flex-v-center'>  
                        <h2 class='receptKaart__heading'> {{$recepten->naam}} </h2>
                    </header>
                    <figure class='receptKaart__figure'>
                        <img class='receptKaart__img' src="{{$recepten->afbeelding}}" alt="{{$recepten->afbeelding}}">
                    </figure>
                    <section class='receptKaart__btnSection u-flex-v-center'>
                        <button class='receptKaart__button' onclick="window.location='{{ url('/recepten/' . $recepten->id) }}'"> Lees meer </button>
                    </section>
            </li>
        @endforeach
    </ul>
@endsection