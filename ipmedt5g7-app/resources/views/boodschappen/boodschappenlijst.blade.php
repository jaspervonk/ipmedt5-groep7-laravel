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
            @foreach($ActiveUser as $ActiveUser)
                <p class="blackFont">Huidige lijstje: {{$ActiveUser->name}}</p>
            @endforeach
            @include('boodschappen.changeUser')
        </header>
        <section class="card u-box-shadow grid__booschappenlijstCard u-box-shadow lijstFlex">
            <h2 class="card__title">Boodschappenlijst {{$ActiveUser->name}}</h2>
            <hr>
            <form action="/remove" method="POST">
                @method('POST')
                {{ csrf_field() }}
                <ul>
                    @foreach($product as $product)
                        <li id="js--item" class="card__list__item u-noLiStyle">
                            <input type="checkbox" name="checked[]" value="{{ $product->id }}">
                            <label for="checked[]" class="isChecked" >{{ $product->merk }} {{ $product->product }} ({{ $product->aantal }})</label> 
                        </li>
                    @endforeach
                    <button class="button button--red button--card" type="submit">Verwijder</button>
                </ul>
            </form>
        </section>
        <br>
        @include('boodschappen.form')
    </main>
    @endsection



