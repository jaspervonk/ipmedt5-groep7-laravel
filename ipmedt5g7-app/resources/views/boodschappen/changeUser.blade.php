<form action="/changeUser" method="POST">
    @csrf
    <label class="blackFont" for="naam">Selecteer lijstje: </label>
    <select name="naam" onchange="this.form.submit()">
        <option value="" disabled selected hidden>Kies een gebruiker</option>
        @foreach($user as $user)
            <option value="{{$user->name}}">{{$user->name}}</option>
        @endforeach
    </select>
    <!-- <button class="button button--red button--small" type="submit">Veranderen</button> -->
</form>