<br>
<form action="/submit" method="POST">
    {{ csrf_field() }}
    <label for="product">Productnaam</label>
    <input type="text" name="product"><br>

    <label for="aantal">Aantal</label>
    <input type="number" name="aantal"><br>

    <label for="merk">Merk</label>
    <input type="text" name="merk"><br>

    <label for="Volume">Volume</label>
    <input type="text" name="volume"><br><br>

    <button type="submit">Toevoegen</button>
</form>