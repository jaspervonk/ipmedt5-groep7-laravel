<form action="/addUser" method="POST">
    @method('POST')
    {{ csrf_field() }}
    <label for="name">Naam</label>
    <input type="text" name="name"><br>

    <button type="submit">Aanmaken</button>
</form>
