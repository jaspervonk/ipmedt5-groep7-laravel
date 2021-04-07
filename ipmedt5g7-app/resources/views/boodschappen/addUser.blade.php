<h2 class="card__title">Gebruiker aanmaken</h2>
<hr>
<form action="/addUser" method="POST">
    @method('POST')
    {{ csrf_field() }}
    <label for="name">Naam</label>
    <input type="text" name="name"><br>

    <button class="button button--red button--card" type="submit">Aanmaken</button>
</form>
