<section class="card u-box-shadow grid__toevoegen">
    <h2>Toevoegen aan database</h2>
    <hr class="u-stripe">
    <form action="/boodschappenlijst/store" method="POST" onsubmit='return setPopup("Product is toegevoegd aan de database.", "linear-gradient(180deg, #5ACD34 0%, #2B8D29 100%)");'>
        @method('POST')
        {{ csrf_field() }}
        <p class="u-label">* = Verplicht veld</p>
        <label class="u-label" for="product">Productnaam*</label>
        <input class="u-input" type="text" name="product" required>

        <label class="u-label" for="merk">Barcode*</label>
        <input class="u-input" type="text" name="EAN" required>

        <label class="u-label" for="merk">Merk*</label>
        <input class="u-input" type="text" name="merk" required>

        <label class="u-label" for="Volume">Inhoud</label>
        <input class="u-input" type="text" name="volume">

        <button class="button button--red button--card" type="submit">Toevoegen</button>
    </form>
</section>
<section class="card u-box-shadow grid__barcodeScannen">
    <h2>Product toevoegen</h2>
    <hr class="u-stripe">
    <form action="/boodschappenlijst/api" method="POST" onsubmit='return setPopup("Product is toegevoegd.", "linear-gradient(180deg, #5ACD34 0%, #2B8D29 100%)");'>
        @method('POST')
        {{ csrf_field() }}
        <label class="u-label" for="merk">Barcode:</label>
        <input class="u-input" type="text" name="EAN" required>

        <button class="button button--red button--card" type="submit">Toevoegen</button>
    </form>
</section>
<section class="card grid__userToevoegen u-box-shadow">
    @include('boodschappen.addShoppinglist')
</section>