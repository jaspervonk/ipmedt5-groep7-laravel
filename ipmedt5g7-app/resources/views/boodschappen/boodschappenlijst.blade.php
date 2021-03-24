@extends('default')
@section('content')
    <h1>Mijn boodschappenlijstje:</h1>
    <form action="/remove" method="POST">
        @method('POST')
        {{ csrf_field() }}
        <ul>
            @foreach($product as $product)
                <li id="js--item">
                    <input type="checkbox" name="checked[]" value="{{ $product->id }}">
                    <label for="checked[]" class="isChecked" >{{ $product->merk }} {{ $product->product }} ({{ $product->aantal }})</label> 
                </li>
            @endforeach
            <button type="submit">Verwijder Geselecteerde producten</button>
        </ul>
    </form>
    <br>
    <form action="/submit" method="POST">
        @method('POST')
        {{ csrf_field() }}
        <label for="product">Productnaam</label>
        <input type="text" name="product" required><br>

        <label for="aantal">Aantal</label>
        <input type="number" name="aantal" value="1"><br>

        <label for="merk">Merk</label>
        <input type="text" name="merk"><br>

        <label for="Volume">Volume</label>
        <input type="text" name="volume"><br><br>

        <button type="submit">Toevoegen</button>
    </form>
@endsection


