<section class="card u-box-shadow grid__toevoegen">
    <h2>Toevoegen aan database:</h2>
    <hr>
    <form action="/submit" method="POST" onsubmit='return setPopup("Product is toegevoegd aan de database.", "linear-gradient(180deg, #5ACD34 0%, #2B8D29 100%)");'>
        @method('POST')
        {{ csrf_field() }}
        <label class="u-label" for="product">Productnaam:</label><br>
        <input class="u-input" type="text" name="product" required><br>

        <!-- <label for="aantal">Aantal</label>
        <input type="number" name="aantal" value="1"><br> -->

        <label class="u-label" for="merk">EAN:</label><br>
        <input class="u-input" type="text" name="EAN" required><br>

        <label class="u-label" for="merk">Merk:</label><br>
        <input class="u-input" type="text" name="merk" required><br>

        <label class="u-label" for="Volume">Volume:</label><br>
        <input class="u-input" type="text" name="volume"><br><br>

        <button class="button button--red button--card" type="submit">Toevoegen</button>
    </form>
</section>
<section class="card u-box-shadow grid__barcodeScannen">
    <h2>Product toevoegen:</h2>
    <hr>
    <form action="/api" method="POST" onsubmit='return setPopup("Product is toegevoegd.", "linear-gradient(180deg, #5ACD34 0%, #2B8D29 100%)");'>
        @method('POST')
        {{ csrf_field() }}
        <label class="u-label" for="merk">Barcode:</label><br>
        <input class="u-input" type="text" name="EAN" required>

        <button class="button button--red button--card" type="submit">Toevoegen</button>
    </form>
</section>
<section class="card grid__userToevoegen u-box-shadow">
    @include('boodschappen.addShoppinglist')
</section>