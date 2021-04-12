@extends('default')
    
    @section('content')
    <header class="mainHeader u-main-gradient u-box-shadow">
        <nav class="nav u-boodschappen-gradient">
            <input type="checkbox" id="check" class="checkbtn">
            <label for="check" class="nav__hamburger"><p>Menu</p><i class="fas fa-bars fa-2x"></i></label>
            <figure>
                <img class="nav__logo" src="./img/logo.png" alt="Logo">
            </figure>
            <ul class="nav__list">
                <li class="nav__list__li" ><a class=" nav__list__li--a" href="/boodschappenlijst">Boodschappen</a></li>
                <li class="nav__list__li" ><a class="nav__list__li--a" href="/desk">Bureau</a></li>
                <li class="nav__list__li" ><a class="nav__list__li--a" href="/recepten">Koken</a></li>
                <li class="nav__list__li" ><a class="nav__list__li--a" href="/opstaan">Opstaan</a></li>
                <li class="nav__list__li" ><p class="nav__mijnaccount nav__mijnaccount--message" id="u-white">Hallo {{$ActiveUser->name}}</p></li>
                <li class="nav__list__li" ><a href="/gebruiker" class="nav__mijnaccount nav__mijnaccount__link" id="u-white" href="/gebruiker">Andere gebruiker</a></li>
            </ul> 
        </nav>
    </header>
    <article class='gebruiker u-box-shadow-content'>
        @foreach($ActiveUser as $ActiveUser)
            <h3 class="gebruiker__header__text u-box-shadow-content"> Hallo {{$ActiveUser->name}}!</h3>
        @endforeach
        <section class='gebruiker__section1'>
            <h3 class='gebruiker__title'>Gebruiker aanmaken</h3>
            <form action="/addUser" method="POST">
                @method('POST')
                {{ csrf_field() }}
                <label for="name">Naam:</label><br>
                <section class='gebruiker__flex'>
                    <input class='gebruiker__input' type="text" name="name" required><br>
                    <button class="gebruiker__button" type="submit">Aanmaken</button>
                </section>
            </form>
        </section>
        <section class='gebruiker__section2'>
            <header class='gebruiker__header'>
                <h1 class="gebruiker__header__title">Gebruiker veranderen</h1>
                @include('gebruiker.gebruikerChange')
            </header>
        </section>
    </article>
    @endsection



