@extends('default')
    
    @section('content')
    <header class="mainHeader u-main-gradient u-box-shadow">
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
    <article class='gebruiker u-box-shadow-content'>
        @foreach($ActiveUser as $ActiveUser)
            <h3 class="gebruiker__header__text u-box-shadow-content"> {{$ActiveUser->name}}</h3>
        @endforeach
        <section class='gebruiker__section1'>
            <h3 class='gebruiker__title'>Gebruiker aanmaken</h3>
            <form action="/addUser" method="POST">
                @method('POST')
                {{ csrf_field() }}
                <label for="name">Naam:</label><br>
                <section class='gebruiker__flex'>
                    <input class='gebruiker__input' type="text" name="name"><br>
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



