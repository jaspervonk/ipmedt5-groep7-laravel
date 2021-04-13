<h2 class="card__title">Boodschappenlijst aanmaken</h2>
<hr>
<form action="/boodschappenlijst/create" onsubmit='return setPopup("Boodschappenlijst aangemaakt!", "linear-gradient(180deg, #5ACD34 0%, #2B8D29 100%)");' method="POST">
    @method('POST')
    {{ csrf_field() }}
    <label class="u-label" for="name">Naam:</label><br>
    <input class="u-input" type="text" name="name" required><br>

    <button class="button button--red button--card" type="submit">Aanmaken</button>
</form>
