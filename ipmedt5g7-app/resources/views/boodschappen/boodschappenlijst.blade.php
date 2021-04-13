@extends('default')
    @section('content')
    <main class="boodschappen-grid u-body-padding">
        <header class="grid__header">
            <h1 class="pageTitle">Boodschappen</h1>
            @if($activeShoppinglist->activeshoppinglist == "Default")
            <p class="blackFont">We hebben je standaard het lijstje Default gegeven. Je kunt er meerdere aanmaken.</p>
            @else
            <p class="blackFont">Huidig lijstje: {{$activeShoppinglist->activeshoppinglist}}</p>
            @endif

            
            <form action="/boodschappenlijst/clear" method="POST" onsubmit='return setPopup("Alle producten zijn verwijderd.", "linear-gradient(180deg, #5ACD34 0%, #2B8D29 100%)");'>
                @csrf
                <button type="submit" class="button button--red button--remove">Maak lijstje leeg</button>
            </form>
            @include('boodschappen.changeShoppinglist')
        </header>
        <section class="card u-box-shadow grid__booschappenlijstCard u-box-shadow lijstFlex">
            @if($selected)
            <h2 class="card__title">{{$activeShoppinglist->activeshoppinglist}}</h2>
            @else
            <h2 class="card__title">Selecteer een boodschappenlijst</h2>
            @endif
            <hr>
            <form action="/remove" method="POST" onsubmit='return setPopup("Product(en) zijn verwijderd.", "linear-gradient(180deg, #5ACD34 0%, #2B8D29 100%)");'>
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
                    <button type="submit" class="button button--red button--card">Verwijder</button>
                </ul>
            </form>
            
        </section>
        @include('boodschappen.form')
    </main>
    @endsection



