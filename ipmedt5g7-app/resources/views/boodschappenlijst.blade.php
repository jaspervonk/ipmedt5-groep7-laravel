<h1>Mijn boodschappenlijstje:</h1>
<form action="/remove" method="POST">
    @method('POST')
    {{ csrf_field() }}
    <ul>
        @foreach($shoppinglist as $shoppinglist)
            <li>{{ $Shoppinglist->merk }} {{ $Shoppinglist->product }} ({{ $Shoppinglist->aantal }}) <input type="checkbox" name="checked[]" value={{ $product->id }}></li>
        @endforeach
        <button type="submit">Verwijder Geselecteerde producten</button>
    </ul>
</form>

