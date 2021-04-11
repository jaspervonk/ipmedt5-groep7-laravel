<section class="card u-box-shadow grid__toevoegen">
    <h2>Toevoegen aan database:</h2>
    <hr>
    <form action="/submit" method="POST">
        @method('POST')
        {{ csrf_field() }}
        <label class="u-label" for="product">Productnaam:</label><br>
        <input class="u-input" type="text" name="product" required><br>

        <!-- <label for="aantal">Aantal</label>
        <input type="number" name="aantal" value="1"><br> -->

        <label class="u-label" for="merk">EAN:</label><br>
        <input class="u-input" type="text" name="EAN"><br>

        <label class="u-label" for="merk">Merk:</label><br>
        <input class="u-input" type="text" name="merk"><br>

        <label class="u-label" for="Volume">Volume:</label><br>
        <input class="u-input" type="text" name="volume"><br><br>

        <button class="button button--red button--card" type="submit">Toevoegen</button>
    </form>
</section>
<section class="card u-box-shadow grid__barcodeScannen">
    <h2>Product toevoegen:</h2>
    <hr>
    <form action="/api" method="POST">
        @method('POST')
        {{ csrf_field() }}
        <label class="u-label" for="merk">Barcode:</label><br>
        <input class="u-input" type="text" name="EAN">

        <button class="button button--red button--card" type="submit">Toevoegen</button>
    </form>
</section>
<section class="card grid__userToevoegen u-box-shadow">
    @include('boodschappen.addShoppinglist')
</section>