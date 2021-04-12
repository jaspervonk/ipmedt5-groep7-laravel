@extends('default')

@section('title')
 {{'Recepten'}}
@endsection

@section('content')
    <header class="mainHeader u-koken-gradient u-box-shadow">
    <nav class="nav u-boodschappen-gradient">
        <input type="checkbox" id="check" class="checkbtn">
        <label for="check" class="nav__hamburger"><p>Menu</p><i class="fas fa-bars fa-2x"></i></label>
        <figure>
            <img class="nav__logo" src="./img/logo.png" alt="Logo">
        </figure>
        <ul class="nav__list">
            <li class="nav__list__li" ><a class=" nav__list__li--a" href="/boodschappenlijst">Boodschappen</a></li>
            <li class="nav__list__li" ><a class="nav__list__li--a" href="/desk">Bureau</a></li>
            <li class="nav__list__li" ><a class="nav__list__li--a active" href="/recepten">Koken</a></li>
            <li class="nav__list__li" ><a class="nav__list__li--a" href="/opstaan">Opstaan</a></li>
            <li class="nav__list__li" ><p class="nav__mijnaccount nav__mijnaccount--message" id="u-white">Hallo {{$ActiveUser->name}}</p></li>
            <li class="nav__list__li" ><a href="/gebruiker" class="nav__mijnaccount nav__mijnaccount__link" id="u-white" href="/gebruiker">Andere gebruiker</a></li>
        </ul> 
    </nav>
    </header>
    <ul class='u-grid-12 u-grid-gap-2 u-body-padding'>
        @foreach($recepten as $recepten)
            <li class='receptKaart u-list-style-none u-box-shadow a-popup'> 
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