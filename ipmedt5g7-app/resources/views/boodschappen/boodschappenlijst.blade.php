@extends('default')
    
    @section('content')
    <header class="mainHeader u-boodschappen-gradient u-box-shadow">
        <nav class="mainHeader__nav">
            <img src="/img/logo.png"></img>
            <ul>
                <li><a href="/gebruiker">Account</a></li>
                <li><a href="/opstaan">Opstaan</a></li>
                <li><a href="/desk">Bureau</a></li>
                <li><a href="/boodschappenlijst">Boodschappen</a></li>
                <li><a href="/recepten">Koken</a></li>
            </ul> 
        </nav>
    </header>
    <main class="grid u-body-padding">
        <header class="grid__header">
            <h1 class="pageTitle">Boodschappen</h1>
            <p class="blackFont">Huidige gebruiker: {{$ActiveUser->first()->name}}</p>
            @include('boodschappen.changeShoppinglist')
        </header>
        <section class="card u-box-shadow grid__booschappenlijstCard u-box-shadow lijstFlex">
            @if($selected)
            <h2 class="card__title">{{$activeShoppinglist->activeshoppinglist}}</h2>
            @else
            <h2 class="card__title">Selecteer een boodschappenlijst</h2>
            @endif
            <hr>
            <form action="/remove" method="POST" onsubmit='return setPopup("Geselecteerde producten verwijderd", "linear-gradient(180deg, #5ACD34 0%, #2B8D29 100%)");'>
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
                    <button class="button button--red button--card">Verwijder</button>
                </ul>
            </form>
        </section>
        <br>
        @include('boodschappen.form')
    </main>
    @endsection



