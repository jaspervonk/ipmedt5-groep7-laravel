@extends('default')
    @section('content')
    <header class="mainHeader u-boodschappen-gradient u-box-shadow">
        <nav class="nav u-boodschappen-gradient">
            <input type="checkbox" id="check" class="checkbtn">
            <label for="check" class="nav__hamburger"><p>Menu</p><i class="fas fa-bars fa-2x"></i></label>
            <figure>
                <img class="nav__logo" src="./img/logo.png" alt="Logo">
            </figure>
            <ul class="nav__list">
                <li class="nav__list__li" ><a class=" nav__list__li--a active" href="/boodschappenlijst">Boodschappen</a></li>
                <li class="nav__list__li" ><a class="nav__list__li--a" href="/desk">Bureau</a></li>
                <li class="nav__list__li" ><a class="nav__list__li--a" href="/recepten">Koken</a></li>
                <li class="nav__list__li" ><a class="nav__list__li--a" href="/opstaan">Opstaan</a></li>
                <li class="nav__list__li" ><p class="nav__mijnaccount nav__mijnaccount--message" id="u-white">Hallo {{$ActiveUser->name}}</p></li>
                <li class="nav__list__li" ><a href="/gebruiker" class="nav__mijnaccount nav__mijnaccount__link" id="u-white" href="/gebruiker">Andere gebruiker</a></li>
            </ul> 
        </nav>
    </header>
    <main class="grid u-body-padding">
        <header class="grid__header">
            <h1 class="pageTitle">Boodschappen</h1>
            <p class="blackFont">Huidig lijstje: {{$activeShoppinglist->activeshoppinglist}}</p>
            @include('boodschappen.changeShoppinglist')
        </header>
        <section class="card u-box-shadow grid__booschappenlijstCard u-box-shadow lijstFlex">
            @if($selected)
            <h2 class="card__title">{{$activeShoppinglist->activeshoppinglist}}</h2>
            @else
            <h2 class="card__title">Selecteer een boodschappenlijst</h2>
            @endif
            <hr>
            <form action="/remove" method="POST">
                @method('POST')
                {{ csrf_field() }}
                <ul>
                    @if($selected)
                        @foreach($shoppinglistProducts as $product)
                            @if($product->shoppinglist == $activeShoppinglist->activeshoppinglist)
                                <li id="js--item" class="card__list__item u-noLiStyle">
                                    <input type="checkbox" name="checked[]" value="{{ $product->id }}">
                                    <label for="checked[]" class="isChecked" >{{ $product->merk }} {{ $product->product }} ({{ $product->aantal }})</label> 
                                </li>
                            @endif
                        @endforeach
                    @endif
                    <button class="button button--red button--card" type="submit">Verwijder</button>
                </ul>
            </form>
        </section>
        <br>
        @include('boodschappen.form')
    </main>
    @endsection



