@extends('default')    
    @section('content')
    <article class='gebruiker u-box-shadow-content'>
        <h3 class="gebruiker__header__text u-box-shadow-content"> Hallo {{$ActiveUser->name}}!</h3>
        <section class='gebruiker__section1'>
            <h3 class='gebruiker__title'>Gebruiker aanmaken</h3>
            <form action="/addUser" method="POST" onsubmit='return setPopup("De gebruiker is toegevoegd", "linear-gradient(180deg, #5ACD34 0%, #2B8D29 100%)");'>
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



