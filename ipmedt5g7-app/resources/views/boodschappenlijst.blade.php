<h1>Mijn boodschappenlijstje:</h1>
<ul>
    @foreach($product as $product)
    <li>{{ $product->product }} ({{ $product->aantal }})</li>
    @endforeach
</ul>

