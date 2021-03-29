<br>
<form action="/submit" method="POST">
    @method('POST')
    {{ csrf_field() }}
    <label for="product">Productnaam</label>
    <input type="text" name="product" required><br>

    <!-- <label for="aantal">Aantal</label>
    <input type="number" name="aantal" value="1"><br> -->

    <label for="merk">EAN</label>
    <input type="text" name="EAN"><br>
    
    <label for="merk">Merk</label>
    <input type="text" name="merk"><br>

    <label for="Volume">Volume</label>
    <input type="text" name="volume"><br><br>

    <button type="submit">Toevoegen</button>
</form>
<h2>Scan barcode of voer hieronder in:</h2>
<form action="/api" method="POST">
    @method('POST')
    {{ csrf_field() }}
    <label for="merk">Barcode</label>
    <input type="text" name="EAN"><br>

    <button type="submit">Toevoegen</button>
</form>