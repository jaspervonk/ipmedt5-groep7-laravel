@extends('default')
    @section('content')
    <main class="boodschappen-grid u-body-padding">
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



