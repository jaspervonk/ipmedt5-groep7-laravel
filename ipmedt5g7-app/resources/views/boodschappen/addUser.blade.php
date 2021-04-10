<h2 class="card__title">Lijstje aanmaken</h2>
<hr>
<form action="/addUser" method="POST">
    @method('POST')
    {{ csrf_field() }}
    <label class="u-label" for="name">Naam:</label><br>
    <input class="u-input" type="text" name="name"><br>

    <button class="button button--red button--card" type="submit">Aanmaken</button>
</form>
